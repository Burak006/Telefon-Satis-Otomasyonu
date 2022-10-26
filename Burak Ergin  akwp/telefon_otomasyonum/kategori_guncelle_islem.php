<?
include("baglanti.php");

$sql=" update kategori set kat_adi='".$_POST['kategori']."' where kat_id='".$_GET['gun_id']."' ";
 
 

mysql_query($sql) or die (mysql_error());

header('location:otomasyon.php?s=kategori');

?>