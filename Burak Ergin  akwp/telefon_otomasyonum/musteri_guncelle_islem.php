<?
include("baglanti.php");

$sql=" update musteri set m_adi='".$_POST['madi']."', m_soyadi='".$_POST['msoyad']."', ".
"  m_firma='".$_POST['fadi']."' , m_mail='".$_POST['eposta']."', ".
"  m_tel='".$_POST['tel']."' where m_id='".$_GET['gun_id']."' ";

mysql_query($sql) or die (mysql_error());

header('location:otomasyon.php?s=musteri');

?>