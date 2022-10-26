<?
include("baglanti.php");

$sql=" update kullanici set k_adi='".$_POST['kadi']."',k_sifre='".md5($_POST['ksifre'])."',". 
"  k_durum='".$_POST['kdurum']."' where k_id='".$_GET['gun_id']."' ";

mysql_query($sql) or die (mysql_error());

header('location:otomasyon.php?s=kullanici');

?>