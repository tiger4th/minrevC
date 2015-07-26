<?php
header("Content-Type: text/html; charset=UTF-8");

//カテゴリ取得
$id = '0';

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$responseC = @file_get_contents('./json/category/'.$id.'.json');
if(!$responseC) {
    $parent_id = substr($id, 0, -2);
    $responseC = @file_get_contents('./json/category/'.$parent_id.'.json');
    if(!$responseC) {
        $id = 0;
        $responseC = @file_get_contents('./json/category/0.json');
    }
}

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
$response = @file_get_contents('./json/review/'.$id.'_'.$results.'_'.$sort.'_'.$page.'.json');

if($response) {
    $res = json_decode($response, true);
} else {
    $glob = glob('./json/review/'.$id.'_*');
    if(!empty($glob)) {
        $response = @file_get_contents($glob[0]);
        $res = json_decode($response, true);
    } else {
        $res = array();
    }
}

if(isset($res["Header"])){
    if($res["Header"]["Page"]["Size"] <= 0){
        if($page == 1){
            $notice = "このカテゴリにはまだレビューがありません";
        }else{
            $notice = "レビュー表示位置が不正です";
        }
    }
    
    foreach($res["ItemInfo"] as &$item){
        $name = $item["Item"]["Name"];
        $name = explode('[', $name);
        $name = explode('［', $name[0]);
        $name = explode('(', $name[0]);
        $name = explode('（', $name[0]);
        $name = $name[0];
        $item["Item"]["ShortName"] = $name;
    }
    unset($item);
} else {
    $notice = "このカテゴリにはまだレビューがありません";
}

//デバイス
$ua = $_SERVER['HTTP_USER_AGENT'];
$sp = false;
if ((strpos($ua, 'iPhone') !== false) || (strpos($ua, 'iPad') !== false) || (strpos($ua, 'iPod') !== false) || (strpos($ua, 'Android') !== false) || (strpos($ua, 'Windows Phone') !== false)) {
    $sp = true;
}
