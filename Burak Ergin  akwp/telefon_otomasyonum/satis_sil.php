<?

include("baglanti.php");


$sql=" delete from satis where s_id='".$_GET['sil_id']."' ";

mysql_query($sql)or die(mysql_error());

header('location:otomasyon.php?s=satis');
?>