<?php
if($resC["Current"]["Level"] >= 1){
	echo "<h3><span class='sm'>".$resC["Current"]["Name"]."</span></h3><span class='xs'> (".$res["Header"]["Page"]["Count"].")</span><br /><hr color='#aaaaaa'>";
}

foreach($resC["Category"] as $item){ 
	if(isset($item["Name"])){
		if($id==0){echo '<img src="./image/'.$item["Id"].'.gif" height="10" width="10" alt="'.$item["Name"].'" /> ';}
		echo '<a href="./index.php?id='.$item["Id"].'&sort='.$sort.'&results='.$results.'"><span class="sm">'.$item["Name"].'</span></a><br />';
	}
}

if(isset($_GET['id']) && $_GET['id'] > 1){
	echo '<br /><a href="./index.php?id='.$resC["Parent"]["Id"].'&sort='.$sort.'&results='.$results.'"><span class="sm">上のカテゴリに戻る</span></a><br />';
}
?>