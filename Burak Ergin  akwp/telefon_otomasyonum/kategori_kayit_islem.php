<?
include("baglanti.php");

$sql=" insert into kategori values('','".$_POST['kategori']."') ";

mysql_query($sql);

header('location:otomasyon.php?s=kategori&msg=1');

?>