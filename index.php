<?php require("./app_id.php"); ?>
<?php require("./curl.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content="レビュー,新着,コネコ,coneco,ショッピング,価格比較,商品<?php
if($id!=0){
	echo ",".str_replace("・", ",", $resC["Current"]["Name"]);
}
?>" />
<meta name="description" content="<?php
if($id==0){
	echo "価格比較サイトconeco.netから最新のレビューをお届けします。";
}else{
	echo "価格比較サイトconeco.netから".$resC["Current"]["Name"]."の最新口コミ情報をお届けします。";
}
?>" />
<meta http-equiv="content-Style-type" content="text/css" />
<meta http-equiv="content-Script-type" content="text/javascript" />
<title><?php
if($id==0){
	echo "みんなの新着レビューC - 最安商品の最新口コミ情報";
}else{
	echo $resC["Current"]["Name"]."の新着レビュー - みんなの新着レビューC";
}
?></title>
<link rel="stylesheet" type="text/css" href="./style.css" />
<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20423739-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div align="right"><span class="sm">
<a name="top" id="top">&nbsp;</a>
<?php echo '<a href="http://tiger4th.com/">tiger4th.com</a>'; ?>
&nbsp;&nbsp;
</span></div>

<div id="wrapper">
<div id="header">
<div id="boxlogo" align="center">
<?php echo '<a href="./index.php?id=0&sort='.$sort.'&results='.$results.'"><img src="./image/logo.png" height="75" border="0" alt="みんなの新着レビューC" /></a>'; ?>
</div>

<div id="ad">
<script type="text/javascript" src="http://i.yimg.jp/images/auct/blogparts/shp_review_bp.js?rss=2&rcl=0&cid=2502&aty=yid&affid=FD.RWZqlDqeHYKdLMFcQUA--&pt=5&appid=PV4HEDKxg675dy7DXmu9TR8RSxSq75NeUXTcTid5cWXGa5epw19jO1q4exBWeqQsif97"></script>
</div>

</div>

<div id="pan">
<?php
if($id==0){
	echo "<h1><span class='sm'>価格比較サイトconeco.netから最新のレビューをお届け！</span></h1>";
}else{
	echo '<a href="./index.php?id=0&sort='.$sort.'&results='.$results.'"><span class="sm">トップ</span></a>';
	if($resC["Current"]["Level"] >= 3){
		echo '<span class="sm"> &#155; ... </span>';
	}
	if($resC["Current"]["Level"] >= 2){
		echo '<span class="sm"> &#155; </span><a href="./index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'"><span class="sm">'.$resC["Parent"]["Name"].'</span></a>';
	}
	echo '<span class="sm"> &#155; </span><h1><span class="sm">'.$resC["Current"]["Name"].'</span></h1>';
}
?>
</div>


<div id="container">
<div id="contents">
<div class="boxhead" align="left">
<div id="subject">
<h2><span class="mdw">新着レビュー</span></h2>
</div>
<div id="page">
&nbsp;<span class="smw"><?php
if(isset($res["Header"]["Page"]["Count"]) && $res["Header"]["Page"]["Count"] > 0 && !isset($tweet)){
 echo number_format($res["Header"]["Page"]["Count"])."件中 ".number_format($page * $results - $results + 1)."～".number_format($page * $results)."件目";
} ?></span>
<?php echo '<a href="http://ic.edge.jp/page2feed/http://minrev.main.jp/c/index.php?id='.$id.'&nb=2" target="_blank"><img src="./image/rss.png" border="0" alt=" RSS" style="vertical-align: middle;" /></a>'; ?>
</div>
</div>

<div class="box" align="left">
<?php require("./review.php"); ?>
</div>

<p id="undernavi"><span class="sm">
<?php echo $blinker; ?>
</span></p>


</div>
</div>

<div id="sidebar" align="center">
<div class="boxhead" align="left">
<h2><span class="mdw">商品カテゴリ</span></h2>
</div>
<div class="box" align="left">
<?php require("./category.php"); ?>
</div>
<br />

<div class="boxhead" align="left">
<h2><span class="mdw">リンク</span></h2>
</div>
<div class="box" align="center">
<a href="http://minrev.main.jp/"><img src="./image/banner.png" border="0" alt="みんなの新着レビュー" /></a>
</div>
<div class="box" align="center">
<a href="http://tiger4th.com/yamazon/"><img src="./image/yamazon.png" border="0" alt="yamazon" /></a>
</div>
<div class="box" align="center">
<a href="http://tiger4th.com/drabuzz/"><img src="./image/drabuzz.png" border="0" alt="drabuzz" /></a>
</div>
<br />

<div class="coneco_ranking_widget" title="category_id=<?php
 if($resC["Current"]["Level"] >= 3){
  echo $resC["Parent"]["Id"];
 }else{
  echo $resC["Current"]["Id"];
 }
?>;count=5"></div>
<script type="text/javascript" src="http://www.coneco.net/widget/coneco_widget.js" charset="utf-8"></script>
<div style="text-align:center;font-size:10px;width:160px;margin-left:auto;margin-right:auto;">
<a href="http://www.coneco.net/" target="_blank">価格比較サイト「coneco.net」</a>
</div>
<br />

<div class="box2">
<!-- admax -->
<script type="text/javascript" src="http://adm.shinobi.jp/s/ab3a57b40919a17ed0e71bbe47f40963"></script>
<!-- admax -->
</div>
<br />

<?php if($results >= 20){ ?>
<div class="box2">
<!-- admax -->
<script type="text/javascript" src="http://adm.shinobi.jp/s/9679f0879a90170461bd057d347411d1"></script>
<!-- admax -->
</div>
<br />
<?php } ?>

<!-- AddThis Button BEGIN -->
<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4e3ab77310f2fc55"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
<!-- AddThis Button END -->
<?php require("./js/addthis.js"); ?>

<br />

</div>

<div id="footer">
<p><span class="sm">Copyright &copy; <?php echo date("Y"); ?> <a href="http://tiger4th.com/">tiger4th.com</a> All Rights Reserved.</span></p>
</div>

</div>

<script src="http://f1.nakanohito.jp/lit/index.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">try { var lb = new Vesicomyid.Bivalves("114566"); lb.init(); } catch(err) {} </script>
</body>
</html>