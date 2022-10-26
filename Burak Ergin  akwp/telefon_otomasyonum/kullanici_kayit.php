<?
include("baglanti.php");



$sql=" insert into kullanici values('','".$_POST['kadi']."','".md5($_POST['ksifre'])."', ".
	" '".$_POST['kdurum']."','".date("y-m-d")."') ";

mysql_query($sql);

header('location:otomasyon.php?s=kullanici');


?>