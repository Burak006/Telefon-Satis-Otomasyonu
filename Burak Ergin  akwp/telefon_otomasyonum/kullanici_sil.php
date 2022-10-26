<?

include("baglanti.php");


$sql=" delete from kullanici where k_id='".$_GET['sil_id']."' ";

mysql_query($sql)or die(mysql_error());

header('location:otomasyon.php?s=kullanici');
?>