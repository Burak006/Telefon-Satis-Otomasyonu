<?

include("baglanti.php");

$sql=" insert into urun values('','".$_POST['kat']."','".$_POST['ad']."','".$_POST['fiyat']."') ";

mysql_query($sql)or die(mysql_error());

header('location:otomasyon.php?s=urun');


?>