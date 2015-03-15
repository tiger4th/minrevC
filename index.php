<?php require("./app_id.php"); ?>
<?php require("./curl.php"); ?>
<!doctype html>
<!--[if lt IE 7 ]><html lang="ja" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]><html lang="ja" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]><html lang="ja" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]><html lang="ja" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="ja" class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
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
<meta name="viewport" content="width=device-width,initial-scale=1">
<title><?php
    if($id==0){
        echo "みんなの新着レビューC - 最安商品の最新口コミ情報";
    }else{
        echo $resC["Current"]["Name"]."の新着レビュー - みんなの新着レビューC";
    }
?></title>
<!-- main JS libs -->
<script src="js/libs/modernizr.min.js"></script>
<script src="js/libs/jquery-1.10.0.js"></script>
<script src="js/libs/jquery-ui.min.js"></script>
<script src="js/libs/bootstrap.min.js"></script>

<!-- Style CSS -->
<link href="css/bootstrap.css" media="screen" rel="stylesheet">
<link href="css/zocial.css" media="screen" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet">
<link href="my.css" media="screen" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- scripts -->
<script src="js/general.js"></script>

<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->

<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />

<script src="https://apis.google.com/js/platform.js" async defer>
  {lang: 'ja'}
</script>
</head>

<body id="top">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-W9BGVV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W9BGVV');</script>
<!-- End Google Tag Manager -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="link is-pc">
    <a href="http://tiger4th.com/">tiger4th.com</a>
</div>

<div class="container container-wide">

<!-- content -->
<div class="content " role="main">
<!-- row -->
<div class="row">
<div class="col-sm-4">
    <!-- Website Menu -->
    <div class="logo">
        <a href="index.php?id=0&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>">
            <img src="./image/logo.png" alt="みんなの新着レビューC"/>
        </a>
    </div>
    <!--/ Website Menu -->
    <br><br>
</div>

<div class="col-sm-8 is-pc">
    <div class="head-ad">
        <!-- admax -->
        <script src="http://adm.shinobi.jp/s/e04d7f2951b36da710136b3c94e3f871"></script>
        <!-- admax -->
    </div>
    <br><br>
</div>
</div>
<!--/ row -->

<!-- row -->
<div class="row">
<div class="col-sm-4">
    <div class="widget-container boxed category">
        <?php if ($id == 0) { ?>
        <h1 class="widget-title" onClick="toggleList()">商品カテゴリ<i class="fa fa-bars fa-lg toggle-list"></i></h1>
        <div class="inner list-group">
            <a class="list-group-item" href="index.php?id=1&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-laptop fa-fw"></i>パソコン・周辺機器</a>
            <a class="list-group-item" href="index.php?id=2&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-hdd-o fa-fw"></i>PCパーツと自作パソコン</a>
            <a class="list-group-item" href="index.php?id=3&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-desktop fa-fw"></i>AV機器</a>
            <a class="list-group-item" href="index.php?id=4&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-plug fa-fw"></i>生活家電</a>
            <a class="list-group-item" href="index.php?id=5&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-floppy-o fa-fw"></i>PCソフト</a>
            <a class="list-group-item" href="index.php?id=6&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-film fa-fw"></i>ブルーレイ・DVDソフト</a>
            <a class="list-group-item" href="index.php?id=7&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-gamepad fa-fw"></i>ゲームソフト</a>
            <a class="list-group-item" href="index.php?id=9&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-car fa-fw"></i>カー用品</a>
            <a class="list-group-item" href="index.php?id=10&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-tint fa-fw"></i>美容・コスメ</a>
            <a class="list-group-item" href="index.php?id=15&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-medkit fa-fw"></i>ヘルスケア</a>
            <a class="list-group-item" href="index.php?id=16&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-camera fa-fw"></i>デジカメ・カメラ</a>
            <a class="list-group-item" href="index.php?id=17&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-clock-o fa-fw"></i>時計・ ブランド</a>
            <a class="list-group-item" href="index.php?id=18&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-headphones fa-fw"></i>オーディオ機器</a>
            <a class="list-group-item" href="index.php?id=23&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-puzzle-piece fa-fw"></i>ホビー</a>
            <a class="list-group-item" href="index.php?id=24&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-bell-o fa-fw"></i>楽器</a>
            <a class="list-group-item" href="index.php?id=26&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-child fa-fw"></i>ベビー・キッズ用品</a>
            <a class="list-group-item" href="index.php?id=28&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-spoon fa-fw"></i>キッチン用品</a>
            <a class="list-group-item" href="index.php?id=29&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-paw fa-fw"></i>ペット用品</a>
            <a class="list-group-item" href="index.php?id=30&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-tablet fa-fw"></i>スマホ・タブレット</a>
            <a class="list-group-item" href="index.php?id=32&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-futbol-o fa-fw"></i>スポーツ用品</a>
            <a class="list-group-item" href="index.php?id=33&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-fire fa-fw"></i>アウトドア</a>
            <a class="list-group-item" href="index.php?id=50&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-glass fa-fw"></i>酒・ドリンク</a>
            <a class="list-group-item" href="index.php?id=51&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-cutlery fa-fw"></i>食品</a>
            <a class="list-group-item" href="index.php?id=60&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-scissors fa-fw"></i>日用品</a>
            <a class="list-group-item" href="index.php?id=99&sort=<?php echo $sort; ?>&results=<?php echo $results; ?>"><i class="fa fa-briefcase fa-fw"></i>全般</a>
        </div>
        <?php } else {
            echo '<h1 class="widget-title" onClick="toggleList()">'.$resC["Current"]["Name"].'<i class="fa fa-bars fa-lg toggle-list"></i></h1>';
            echo '<div class="inner list-group">';
            foreach($resC["Category"] as $item){ 
                if(isset($item["Name"])){
                    echo '<a class="list-group-item" href="index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'">'.$item["Name"].'</a>';
                }
            }
            if(isset($_GET['id']) && $_GET['id'] > 0){
                echo '<a class="list-group-item" href="index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'"><i class="fa fa-angle-up"></i>上のカテゴリに戻る</a>';
                echo '<a class="list-group-item" href="index.php?id=0&sort='.$sort.'&results='.$results.'"><i class="fa fa-angle-double-up"></i>トップに戻る</a>';
            }
            echo '</div>';
        } ?>
    </div>

    <div class="center is-pc">
        <script charset="utf-8" type="text/javascript">
        amzn_assoc_ad_type = "responsive_search_widget";
        amzn_assoc_tracking_id = "tiger4th-22";
        amzn_assoc_marketplace = "amazon";
        amzn_assoc_region = "JP";
        amzn_assoc_placement = "";
        amzn_assoc_search_type = "search_widget";
        amzn_assoc_width = "auto";
        amzn_assoc_height = "auto";
        amzn_assoc_default_search_category = "";
        amzn_assoc_default_search_key = "<?php if ($id != 0) {echo $resC["Current"]["Name"];} ?>";
        amzn_assoc_theme = "light";
        amzn_assoc_bg_color = "FFFFFF";
        </script>
        <script src="//z-fe.amazon-adsystem.com/widgets/q?ServiceVersion=20070822&Operation=GetScript&ID=OneJS&WS=1&MarketPlace=JP"></script>
    </div>
    <div id="sidead" class="is-pc">
        <div class="center">
            <script type="text/javascript"><!--
            amazon_ad_tag = "tiger4th-22"; amazon_ad_width = "300"; amazon_ad_height = "250"; amazon_ad_link_target = "new";//--></script>
            <script type="text/javascript" src="http://ir-jp.amazon-adsystem.com/s/ads.js"></script>
        </div>
        <div class="center">
            <script src="http://adm.shinobi.jp/s/ab3a57b40919a17ed0e71bbe47f40963"></script>
        </div>
        <div class="center">
            <script src="http://adm.shinobi.jp/s/9679f0879a90170461bd057d347411d1"></script>
        </div>
    </div>
</div>

<div class="col-sm-8">

<!-- row -->
<div class="row">
<div class="col-sm-12">
    <div class="widget-container widget-search styled boxed line-left bread">
        <div class="inner">
<?php
if ($id == 0) {
    echo "<span>価格比較サイトconeco.netから最新のレビューをお届け！</span>";
} else {
    echo '<a href="index.php?id=0&sort='.$sort.'&results='.$results.'"><span>トップ</span></a>';
    if($resC["Current"]["Level"] >= 3){
        echo '<span> &gt; ... </span>';
    }
    if($resC["Current"]["Level"] >= 2){
        echo '<span> &gt; </span><div class="item" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'" itemprop="url"><span itemprop="title">'.$resC["Parent"]["Name"].'</span></a></div>';
    }
    echo '<span> &gt; </span><div class="item" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'" itemprop="url"><span itemprop="title">'.$resC["Current"]["Name"].'</span></a></div>';
}
?>
        </div>
    </div>
</div>
</div>
<!--/ row -->

<div class="row">
    <?php if (isset($res["Header"]["Page"]["Size"]) && $res["Header"]["Page"]["Size"] > 0) { ?>
    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed ul-number">
                <li class="first last"><span class="a-number"><span><?php echo number_format($res["Header"]["Page"]["Count"]); ?>件中<br><?php echo number_format($page * $results - $results + 1); ?>～<?php echo number_format(($page - 1) * $results + $res["Header"]["Page"]["Size"]); ?>件目</span></span></li>
            </ul>
        </div>
    </div>
    <?php } ?>

    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed">
                <li class="first parent"><a href="#" hidefocus="true" style="outline: none;"><i class="icon-menu icon-menu4"></i><span>表示順</span></a>
                    <ul>
                        <li class="first"><a href="index.php?id=<?php echo $id; ?>&sort=date&results=<?php echo $results; ?>" hidefocus="true" style="outline: none;">新着</a></li>
                        <li class=""><a href="index.php?id=<?php echo $id; ?>&sort=rating&results=<?php echo $results; ?>" hidefocus="true" style="outline: none;">高評価優先</a></li>
                        <li class="last"><a href="index.php?id=<?php echo $id; ?>&sort=-rating&results=<?php echo $results; ?>" hidefocus="true" style="outline: none;">低評価優先</a></li>
                    </ul>
                </li>
                <li><div class="ribbon">
                    <span>
                        <strong>
                            <?php
                                if ($sort == "date") {
                                    echo "<br>新着順";
                                } elseif ($sort == "rating") {
                                    echo "高評価優先";
                                } elseif ($sort == "-rating") {
                                    echo "低評価優先";
                                }
                            ?>
                        </strong>
                    </span>
                </div></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="user-menu">
            <ul class="dropdown clearfix boxed">
                <li class="first parent"><a href="#" hidefocus="true" style="outline: none;"><i class="icon-menu icon-menu6"></i><span>表示数</span></a>
                    <ul>
                        <li class="first"><a href="index.php?id=<?php echo $id; ?>&sort=<?php echo $sort; ?>&results=10" hidefocus="true" style="outline: none;">10件</a></li>
                        <li class="last"><a href="index.php?id=<?php echo $id; ?>&sort=<?php echo $sort; ?>&results=20" hidefocus="true" style="outline: none;">20件</a></li>
                    </ul>
                </li>
                <li><div class="ribbon">
                    <span>
                        <strong>
                            <br>
                            <?php
                                if ($results == 10) {
                                    echo "10件";
                                } elseif ($results == 20) {
                                    echo "20件";
                                }
                            ?>
                        </strong>
                    </span>
                </div></li>
            </ul>
        </div>
    </div>
</div>

<?php if($notice != ""){ ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
                    <div class="comment-arrow"></div>
                    <div class="comment-avatar">
                    </div>
                    <div class="comment-text">
                        <div class="comment-author clearfix">
                            <a class="link-author"><?php echo $notice; ?></a>
                        </div>
                        <div class="comment-entry">
                            <br>
                            <a href="http://minrev.main.jp/c/"><p class="name">トップに戻る</p></a>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ol>
    </div>
<?php } else { ?>
<?php foreach($res["ItemInfo"] as $item){ ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
                    <div class="comment-arrow"></div>
                    <div class="comment-avatar">
                        <div class="avatar"><a href="<?php echo $item["Item"]["Url"]; ?>" target="_blank"><img src="<?php echo $item["Item"]["ImageUrl"]; ?>"/></a></div>
                        <br>
                        <p><?php if($item["Item"]["LowestPrice"] > 0){ echo "&yen;".number_format($item["Item"]["LowestPrice"])."～"; } ?></p>
                    </div>
                    <div class="comment-text">
                        <div class="rating"><!--
                            <?php for ($i=0; $i < $item["Review"]["OverallRating"]; $i++) { ?>
                                --><span class="star on"></span><!--
                            <?php } ?>
                            --><!--
                            <?php for ($i=0; $i < 5 - $item["Review"]["OverallRating"]; $i++) { ?>
                                --><span class="star off"></span><!--
                            <?php } ?>
                        --></div>
                        <p class="time"><?php
                            $time = substr($item["Review"]["Created"], 0, 19);
                            $time = str_replace('-', '/', $time);
                            $time = str_replace('T', ' ',$time);
                            echo $time; 
                        ?></p>
                        <div class="clearfix"></div>
                        <div class="comment-author clearfix">
                            <a href="<?php echo $item["Review"]["Url"]; ?>" class="link-author" target="_blank"><h3><?php echo $item["Review"]["Summary"]; ?></h3></a>
                        </div>
                        <div class="comment-entry">
                            <p class="summary"><i class="fa fa-thumbs-o-up"></i><?php echo $item["Review"]["Pros"]; ?></p>
                            <p class="summary"><i class="fa fa-thumbs-o-down"></i><?php echo $item["Review"]["Cons"]; ?></p>
                            <p class="description"><?php
                                echo $item["Review"]["Description"];
                                if(strlen($item["Review"]["Description"]) >= 300){
                                    echo '... <a href='.$item["Review"]["Url"].' target="_blank">続きを読む</a>';
                                }
                            ?></p>
                            <a href="<?php echo $item["Item"]["Url"]; ?>" target="_blank"><h2 class="name"><?php echo $item["Item"]["Name"]; ?></h2></a>
                            <div class="buttons">
                                <a href="http://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=<?php echo $item["Item"]["ShortName"]; ?>&linkCode=ur2&tag=tiger4th-22" class="zocial amazon" target="_blank">Amazonで探す</a>
                                <a href="http://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3185576&pid=883213932&vc_url=<?php echo rawurlencode('http://search.shopping.yahoo.co.jp/search?ei=UTF-8&p='.$item["Item"]["ShortName"]); ?>" class="zocial yahoo" target="_blank">Yahoo!で探す</a>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>
            </li>
        </ol>
    </div>
<?php } ?>
<?php } ?>

<div class="undernavi">
    <div class="new"><?php echo $newest."&nbsp;&nbsp;".$newer; ?></div>
    <div class="old"><?php echo $older."&nbsp;&nbsp;".$oldest; ?></div>
</div>
<div class="clearfix"></div>

<div class="footer-right">
    <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://minrev.main.jp/c/" data-text="みんなの新着レビューC">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <div class="fb-like" data-href="http://minrev.main.jp/c/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>

    <a href="http://b.hatena.ne.jp/entry/http://minrev.main.jp/c/" class="hatena-bookmark-button" data-hatena-bookmark-title="みんなの新着レビューC" data-hatena-bookmark-layout="standard-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
    <script type="text/javascript" src="https://b.st-hatena.com/js/bookmark_button.js" charset="utf-8" async="async"></script>

    <div class="g-plusone" data-size="medium" data-href="http://minrev.main.jp/c/"></div>
    
    <span class="is-pc">
    <!-- AddThis Button BEGIN -->
    <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pubid=ra-4e3ab77310f2fc55"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a>
    <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e3ab77310f2fc55"></script>
    <!-- AddThis Button END -->
    </span>

    <br>
    <a href="#top" class="anchor"><img src="./image/top.png" width="70px"/></a>

    <a href="http://apidoc.coneco.net/" target="_blank" title="webservices by coneco.net Web Services"><img src="http://img.coneco.net/images/webservices_by_coneco2.gif" width="180" height="16" alt="webservices by coneco.net Web Services" style="margin:15px 15px 0px 15px"></a>

    <a href="http://www.amazon.co.jp/?tag=tiger4th-22" class="zocial amazon associate" target="_blank">Amazon.co.jpアソシエイト</a>

    <img Src="http://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3185576&pid=883213932" height="1" width="1" Border="0">

    <br><br>
    <span>Copyright &copy; <?php echo date("Y"); ?> <a href="http://tiger4th.com/">tiger4th.com</a> All Rights Reserved.</span>
</div>
</div>
</div>
<!--/ row -->

</div>
<!--/ content -->

</div>
<!--/ container -->

<?php if (!$sp) { ?>
<!-- share -->
<div class="share is-pc">
    <p>
        <a href="#top" class="anchor"><img src="./image/top.png" width="70px"/></a>
    </p>
    <p>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://minrev.main.jp/c/" data-text="みんなの新着レビューC" data-count="vertical">Tweet</a>
    </p>
    <p>
        <div class="fb-like" data-href="http://minrev.main.jp/c/" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>
    </p>
    <p>
        <a href="http://b.hatena.ne.jp/entry/http://minrev.main.jp/c/" class="hatena-bookmark-button" data-hatena-bookmark-title="みんなの新着レビューC" data-hatena-bookmark-layout="vertical-balloon" data-hatena-bookmark-lang="ja" title="このエントリーをはてなブックマークに追加"><img src="https://b.st-hatena.com/images/entry-button/button-only@2x.png" alt="このエントリーをはてなブックマークに追加" width="20" height="20" style="border: none;" /></a>
    </p>
    <p>
        <div class="ninja_onebutton">
            <script type="text/javascript">
            //<![CDATA[
            (function(d){
            if(typeof(window.NINJA_CO_JP_ONETAG_BUTTON_f5aaf6564c6827526c4857336d8ab33d)=='undefined'){
                document.write("<sc"+"ript type='text\/javascript' src='http:\/\/omt.shinobi.jp\/b\/f5aaf6564c6827526c4857336d8ab33d'><\/sc"+"ript>");
            }else{
                window.NINJA_CO_JP_ONETAG_BUTTON_f5aaf6564c6827526c4857336d8ab33d.ONETAGButton_Load();}
            })(document);
            //]]>
            </script><span class="ninja_onebutton_hidden" style="display:none;"></span><span style="display:none;" class="ninja_onebutton_hidden"></span>
        </div>
    </p>
</div>
<!--/ share -->
<?php } ?>
</div>
</body>
</html>
