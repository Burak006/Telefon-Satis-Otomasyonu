<?
include("baglanti.php");



$sql=" insert into musteri values('','".$_POST['madi']."','".$_POST['msoyad']."', ".
	" '".$_POST['fadi']."','".$_POST['eposta']."','".$_POST['tel']."') ";

mysql_query($sql);

header('location:otomasyon.php?s=musteri');


?>