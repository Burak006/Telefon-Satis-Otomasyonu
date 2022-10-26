<?

include("baglanti.php");


$sql=" delete from musteri where m_id='".$_GET['sil_id']."' ";

mysql_query($sql)or die(mysql_error());

header('location:otomasyon.php?s=musteri');
?>