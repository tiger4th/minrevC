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
	echo '<link rel="stylesheet" type="text/css" href="./style.css" />ただいまご利用いただけません。しばらくお待ちください。<br /><a href="http://minrev.main.jp/c/">トップページに戻る</a>';
	exit;
}

//変数
$newest  = "";
$newer   = "";
$older   = "";
$oldest  = "";
$blinker = "";
$res = array();

$sort    = 'date';
$results = 10;
$page   = 1;
$help    = 0;
$nb      = 0;

if(isset($_GET['sort']) && ($_GET['sort'] == 'date' || $_GET['sort'] == '-date' || $_GET['sort'] == 'rating' || $_GET['sort'] == '-rating')){
	$sort = rawurlencode($_GET['sort']);
}
if(isset($_GET['results']) && ctype_digit($_GET['results'])){
	$results = $_GET['results'];
}
if(isset($_GET['page']) && ctype_digit($_GET['page'])){
	$page = $_GET['page'];
}
if(isset($_GET['help']) && ctype_digit($_GET['help'])){
	$help = $_GET['help'];
}
if(isset($_GET['nb']) && ctype_digit($_GET['nb'])){
	$nb = $_GET['nb'];
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

if($res["Header"]["Page"]["Count"] <= 0){
	$tweet[0]["image"] = "./image/caution.gif";
	if($page == 1){
		$tweet[0]["text"]  = "このカテゴリにはまだレビューがありません";
	}else{
		$tweet[0]["text"]  = "レビュー表示位置が不正です";
	}
}

//ヘルプ
if($help == 1){
	require("./help.php");
	$blinker = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.$page.'">元のページに戻る</a>&nbsp;&nbsp;';
}elseif($help == 2){
	require("./update.php");
	$blinker = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.$page.'">元のページに戻る</a>&nbsp;&nbsp;';
}else{

curl_close($ch);

//ページ移動
if($res["Header"]["Page"]["Count"] > $results && !isset($text)){
	if($page > 1){
		$newest = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'">&#171; 最新</a>&nbsp;';
		$newer = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.($page - 1).'">&#139; 前へ</a>';
	}
	if($res["Header"]["Page"]["Count"] > ($page + $results - 1)){
		$older = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.($page + 1).'">次へ &#155;</a>&nbsp;';
		$oldest = '<a href="./index.php?id='.$id.'&sort='.$sort.'&results='.$results.'&page='.$res["Header"]["Page"]["PageCount"].'">最古 &#187;</a>';
	}
	
	if($newer == "" || $older == ""){
		$blinker .= $newest.$newer.' <a href="#top">上へ↑</a> '.$older.$oldest;
	}else{
		$blinker .= $newest.$newer.' <a href="#top">上へ↑</a> '.$older.$oldest;
	}
	$blinker .= '&nbsp;&nbsp;';
}

}

?>
