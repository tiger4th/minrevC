<?php

//カテゴリ取得
$id = '0';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}
$urlC = "http://api.coneco.net/cws/v1/SearchCategories_json?apikey=".$app_id."&categoryId=".$id;

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);

curl_setopt($ch, CURLOPT_URL, $urlC);
$responseC = curl_exec($ch);
$resC = json_decode($responseC, true);

if(!isset($resC["Header"])){
    echo '<meta charset="utf-8">ただいまご利用いただけません。しばらくお待ちください。<br><a href="http://minrev.main.jp/c/">トップページに戻る</a>';
    exit;
}

//変数
$newest  = "";
$newer   = "";
$older   = "";
$oldest  = "";
$blinker = "";
$res = array();
$notice = "";

$sort    = 'date';
$results = 20;
$page   = 1;

if(isset($_GET['sort']) && ($_GET['sort'] == 'date' || $_GET['sort'] == '-date' || $_GET['sort'] == 'rating' || $_GET['sort'] == '-rating')){
    $sort = rawurlencode($_GET['sort']);
}
if(isset($_GET['results']) && ctype_digit($_GET['results'])){
    $results = $_GET['results'];
}
if(isset($_GET['page']) && ctype_digit($_GET['page'])){
    $page = $_GET['page'];
}

//レビュー取得
$url = "http://api.coneco.net/cws/v1/SearchReviews_json?apikey=".$app_id."&categoryId=".$id."&count=".$results."&sort=".$sort."&page=".$page;

curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
$res = json_decode($response, true);

/*
if(!isset($res["ResultSet"])){
    $res["ResultSet"][0] = "";
    $res["ResultSet"]["totalResultsAvailable"] = 0;
    $res["ResultSet"]["totalResultsReturned"] = 0;
}
*/

if($res["Header"]["Page"]["Size"] <= 0){
    if($page == 1){
        $notice = "このカテゴリにはまだレビューがありません";
    }else{
        $notice = "レビュー表示位置が不正です";
    }
}

curl_close($ch);

//ページ移動
if($res["Header"]["Page"]["Count"] > $results){
    if($page > 1){
        $newest = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'" class="btn btn-left btn-red"><span>&#171; 最新</span></a>&nbsp;';
        $newer = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.($page - 1).'" class="btn btn-left"><span>&#139; 前へ</span></a>';
    }
    if($res["Header"]["Page"]["Count"] > ($page + $results - 1)){
        $older = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.($page + 1).'" class="btn btn-right"><span>次へ &#155;</span></a>&nbsp;';
        $oldest = '<a href="index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.$res["Header"]["Page"]["PageCount"].'" class="btn btn-right"><span>最古 &#187;</span></a>';
    }
}

//デバイス
$ua = $_SERVER['HTTP_USER_AGENT'];
$sp = false;
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPad') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    $sp = true;
}
