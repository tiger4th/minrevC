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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link href="css/zocial.css" media="screen" rel="stylesheet">
<link href="style.css" media="screen" rel="stylesheet">
<link href="my.css" media="screen" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!--[if lt IE 9]><script src="js/respond.min.js"></script><![endif]-->
<!--[if gte IE 9]>
<style type="text/css">
    .gradient {filter: none !important;}
</style>
<![endif]-->

<link rel="shortcut icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
<link rel="icon" href="./image/favicon.ico" type="image/vnd.microsoft.icon" />
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

<div class="link is-pc">
    <a href="https://tiger4th.com/">tiger4th.com</a>
</div>

<div class="container container-wide">

<!-- content -->
<div class="content " role="main">
<!-- row -->
<div class="row">
<div class="col-sm-4">
    <!-- Website Menu -->
    <div class="logo">
        <a href="/c/">
            <img src="./image/logo.png" alt="みんなの新着レビューC"/>
        </a>
    </div>
    <!--/ Website Menu -->
    <br><br>
</div>

<?php if (!$sp) { ?>
<div class="col-sm-8 is-pc">
    <div class="head-ad">
        <!-- admax -->
        <script src="https://adm.shinobi.jp/s/e04d7f2951b36da710136b3c94e3f871"></script>
        <!-- admax -->
    </div>
    <br><br>
</div>
<?php } ?>
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
    <?php if (!$sp) { ?>
    <div id="sidead" class="is-pc">
        <div class="center">
            <script type="text/javascript"><!--
            amazon_ad_tag = "tiger4th-22"; amazon_ad_width = "300"; amazon_ad_height = "250"; amazon_ad_link_target = "new";//--></script>
            <script type="text/javascript" src="https://ir-jp.amazon-adsystem.com/s/ads.js"></script>
        </div>
        <div class="center">
            <script src="https://adm.shinobi.jp/s/ab3a57b40919a17ed0e71bbe47f40963"></script>
        </div>
        <div class="center">
            <script src="https://adm.shinobi.jp/s/9679f0879a90170461bd057d347411d1"></script>
        </div>
    </div>
    <?php } ?>
</div>

<div class="col-sm-8">

<!-- row -->
<div class="row">
<div class="col-sm-12">
    <div class="widget-container widget-search styled boxed line-left bread">
        <div class="inner" itemscope itemtype="https://schema.org/BreadcrumbList">
<?php
if ($id == 0) {
    echo "<span>価格比較サイトconeco.netから最新のレビューをお届け！</span>";
} else {
    $i = 1;
    echo '<div class="item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="index.php?id=0&sort='.$sort.'&results='.$results.'" itemprop="item"><span itemprop="name">トップ</span></a><meta itemprop="position" content="'.$i.'" /></div>';
    $i++;
    if ($resC["Current"]["Level"] >= 3) {
        echo '<span> &gt; ... </span>';
    }
    if ($resC["Current"]["Level"] >= 2) {
        echo '<span> &gt; </span><div class="item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'" itemprop="item"><span itemprop="name">'.$resC["Parent"]["Name"].'</span></a><meta itemprop="position" content="'.$i.'" /></div>';
        $i++;
    }
    echo '<span> &gt; </span><div class="item" itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'" itemprop="item"><span itemprop="name">'.$resC["Current"]["Name"].'</span></a><meta itemprop="position" content="'.$i.'" /></div>';
}
?>
        </div>
    </div>
</div>
</div>
<!--/ row -->

<?php if($notice != ""){ ?>
    <div class="comment-list styled clearfix">
        <ol>
            <li class="comment">
                <div class="comment-body boxed">
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
                            <h3 class="link-author"><?php echo $item["Review"]["Summary"]; ?></h3>
                        </div>
                        <div class="comment-entry">
                            <p class="summary"><i class="fa fa-thumbs-o-up"></i><?php echo $item["Review"]["Pros"]; ?></p>
                            <p class="summary"><i class="fa fa-thumbs-o-down"></i><?php echo $item["Review"]["Cons"]; ?></p>
                            <p class="description"><?php
                                echo $item["Review"]["Description"];
                                if (strlen($item["Review"]["Description"]) >= 300) { echo '...';}
                            ?></p>
                            <h2 class="name"><?php echo $item["Item"]["Name"]; ?></h2>
                            <div class="buttons">
                                <a href="https://ck.jp.ap.valuecommerce.com/servlet/referral?sid=3185576&pid=883213932&vc_url=<?php echo rawurlencode('https://search.shopping.yahoo.co.jp/search?ei=UTF-8&p='.$item["Item"]["ShortName"]); ?>" class="zocial yahoo" target="_blank">ヤフーで探す</a>
                                <a href="https://hb.afl.rakuten.co.jp/hgc/13efd072.29187a8c.13efd073.0c4e5a0e/?pc=<?php echo rawurlencode('https://search.rakuten.co.jp/search/mall/'.$item["Item"]["ShortName"]); ?>" class="zocial rakuten" target="_blank">楽天で探す</a>
                                <a href="https://www.amazon.co.jp/gp/search?ie=UTF8&camp=247&creative=1211&index=aps&keywords=<?php echo $item["Item"]["ShortName"]; ?>&linkCode=ur2&tag=tiger4th-22" class="zocial amazon" target="_blank">Amazonで探す</a>
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

<div class="footer-right">
    <a href="#top" class="anchor"><img src="./image/top.png" width="70px" loading="lazy" /></a>

    <a href="https://www.amazon.co.jp/?tag=tiger4th-22" class="zocial amazon associate" target="_blank">Amazon.co.jpアソシエイト</a>

    <img src="https://ad.jp.ap.valuecommerce.com/servlet/gifbanner?sid=3185576&pid=883213932" height="1" width="1" Border="0" loading="lazy">

    <br><br>
    <span>&copy; 2010-<?php echo date("Y"); ?> <a href="https://tiger4th.com/">tiger4th.com</a></span>
</div>
</div>
</div>
<!--/ row -->

</div>
<!--/ content -->

</div>
<!--/ container -->

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/general.js"></script>
</body>
</html>
