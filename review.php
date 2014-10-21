<?php //if($res["ResultSet"]["totalResultsReturned"] > 0){ ?>
<?php if(!isset($tweet)){ ?>

<table summary="設定"><tr>
<td><span class="sm">表示順：<?php
if ($sort == "date") {echo "新着";}
else {echo '<a href="index.php?id='.$id.'&sort=date&results='.$results.'">新着</a>';}
if ($sort == "rating") {echo "&nbsp;&nbsp;高評価新着";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort=rating&results='.$results.'">高評価新着</a>';}
if ($sort == "-rating") {echo "&nbsp;&nbsp;低評価新着";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort=-rating&results='.$results.'">低評価新着</a>';}
?></span></td>

<td>&nbsp;&nbsp;&nbsp;</td>
<td><span class="sm">表示数：<?php
if ($results == 10) {echo "10件";}
else {echo '<a href="index.php?id='.$id.'&sort='.$sort.'&results=10&page='.($page * 2 - 1).'">10件</a>';}
if ($results == 20) {echo "&nbsp;&nbsp;20件";}
else {echo '&nbsp;&nbsp;<a href="index.php?id='.$id.'&sort='.$sort.'&results=20&page='.ceil($page / 2).'">20件</a>';}
?></span></td>
</tr></table><br />

<?php foreach($res["ItemInfo"] as $item){ ?>
<?php if ($nb == 2) { ?>
<table summary="レビューテーブル">
<tr>
 <td><a href=<?php echo $item["Item"]["Url"]; ?> target="_blank"><img src="<?php echo $item["Item"]["ImageUrl"]; ?>" border="0" alt="<?php echo $item["Item"]["Name"]; ?>" /></a><br /><center><span class="sm"></span></center></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="レビュー">
   <tr><td></td><td></td><td><img src="./image/<?php echo $item["Review"]["OverallRating"]; ?>.00.gif" height="8" alt="<?php echo $item["Review"]["OverallRating"]; ?>点" /></td><td></td></tr>
   <tr>
    <td></td>
    <td></td><td><a href="<?php echo $item["Review"]["Url"]; ?>" target="_blank"><?php echo $item["Review"]["Summary"]; ?></a><br /><?php
     echo '<img src="./image/good.gif" alt="o" /> '.$item["Review"]["Pros"].'<br>';
     echo '<img src="./image/bad.gif" alt="x" /> '.$item["Review"]["Cons"].'<br>';
     echo $item["Review"]["Description"];
     if(strlen($item["Review"]["Description"]) >= 300){
      echo '... <a href='.$item["Review"]["Url"].' target="_blank">続きを読む</a>';
     }
    ?><br /><span class="xs"><a href=<?php echo $item["Item"]["Url"]; ?> target="_blank"><?php echo $item["Item"]["Name"]; ?></a><?php
     if($item["Review"]["Purchase"]["Price"] >= 0){
      echo "&nbsp;&yen;".number_format($item["Review"]["Purchase"]["Price"]);
     }
    ?></span></td><td></td>
   </tr>
   <tr><td></td><td></td><td align="right"><span class="xs"><?php
    $time = $item["Review"]["Created"];
    $time = str_replace('-', '/', $time);
    echo $time; 
   ?></span></td><td></td></tr>
  </table>
 </td>
</tr>
</table>
<br />
<?php }else{ ?>
<table summary="レビューテーブル">
<tr>
 <td><a href=<?php echo $item["Item"]["Url"]; ?> target="_blank"><img src="<?php echo $item["Item"]["ImageUrl"]; ?>" border="0" alt="<?php echo $item["Item"]["Name"]; ?>" /></a><br /><center><span class="sm"><?php
     if($item["Item"]["LowestPrice"] <= 0){
      echo "販売終了";
     }else{
      echo "&yen;".number_format($item["Item"]["LowestPrice"])."～";
     }
 ?></span></center></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="レビュー">
   <tr><td></td><td><img src="./image/a.png" alt="" /></td><td bgcolor="#ffffd7"><img src="./image/<?php echo $item["Review"]["OverallRating"]; ?>.00.gif" height="8" alt="<?php echo $item["Review"]["OverallRating"]; ?>点" /></td><td><img src="./image/b.png" alt="" /></td></tr>
   <tr>
    <td><img src="./image/e.png" alt="" /></td>
    <td bgcolor="#ffffd7"></td><td bgcolor="#ffffd7"><a href="<?php echo $item["Review"]["Url"]; ?>" target="_blank"><?php echo $item["Review"]["Summary"]; ?></a><br /><?php
     echo '<img src="./image/good.gif" alt="o" /> '.$item["Review"]["Pros"].'<br>';
     echo '<img src="./image/bad.gif" alt="x" /> '.$item["Review"]["Cons"].'<br>';
     echo $item["Review"]["Description"];
     if(strlen($item["Review"]["Description"]) >= 300){
      echo '... <a href='.$item["Review"]["Url"].' target="_blank">続きを読む</a>';
     }
    ?><br /><span class="xs"><a href=<?php echo $item["Item"]["Url"]; ?> target="_blank"><?php echo $item["Item"]["Name"]; ?></a><?php
     if($item["Review"]["Purchase"]["Price"] >= 0){
      echo "&nbsp;&yen;".number_format($item["Review"]["Purchase"]["Price"]);
     }
    ?></span></td><td bgcolor="#ffffd7"></td>
   </tr>
   <tr><td></td><td><img src="./image/d.png" alt="" /></td><td bgcolor="#ffffd7" align="right"><span class="xs"><?php
    $time = $item["Review"]["Created"];
    $time = str_replace('-', '/', $time);
    echo $time; 
   ?></span></td><td><img src="./image/c.png" alt="" /></td></tr>
  </table>
 </td>
</tr>
</table>
<br />
<?php } ?>
<?php } ?>

<?php } else {?>

<table border="0" cellpadding="0" cellspacing="5" summary="テキストテーブル">
<?php foreach($tweet as $item){ ?>
<tr>
 <td><img src="<?php echo $item["image"]; ?>" border="0" alt="<?php
  $file = explode('/', $item["image"]);
  $alt  = explode('.', $file[2]);
  echo $alt[0]; 
 ?>" /></td>
 <td>
  <table border="0" cellpadding="0" cellspacing="0" summary="テキスト">
   <tr><td></td><td><img src="./image/a.png" alt="" /></td><td bgcolor="#ffffd7"></td><td><img src="./image/b.png" alt="" /></td></tr>
   <tr>
    <td><img src="./image/e.png" alt="" /></td>
    <td bgcolor="#ffffd7"></td><td bgcolor="#ffffd7"><?php echo $item["text"]; ?></td><td bgcolor="#ffffd7"></td>
   </tr>
   <tr><td></td><td><img src="./image/d.png" alt="" /></td><td bgcolor="#ffffd7" align="right"><?php if(isset($item["time"])){echo "<span class='xs'>".$item["time"]."</span>";} ?></td><td><img src="./image/c.png" alt="" /></td></tr>
  </table>
 </td>
</tr>
<?php } ?>

</table>
<?php }?>



