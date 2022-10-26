<?
session_start();

include("guvenlik.php");

include("baglanti.php");

if(isset($_GET['s']))//s=musteri
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="ana";
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Otomasyon php</title>
<link rel="shortcut icon" href="otomasyon_images/log.png">
<link href="css/otomasyon.css" type="text/css" rel="stylesheet"/>	
</head>

<body>
	<div class="otomasyon_ana_div">
	<!--banner başlangıç-->	
<div class="banner"><img src="otomasyon_images/banner_yedek.png" width="1220px" height="200px"></div>
	<!--banner bitiş-->		
<div class="hizalama_bitir"></div>
		
		<!--menü başlangıç-->
		<div class="menuler_govde">
			
			<a href="otomasyon.php"><div class="menuler">
				<img src="otomasyon_images/home.png" width="50px" height="50px">
				<br>Ana Sayfa</div></a>
			
			<a href="otomasyon.php?s=kullanici"><div class="menuler">
				<img src="otomasyon_images/kullanici.png" width="50px" height="50px">
				<br>Kullanıcı İşlemleri</div></a>
			
			<a href="otomasyon.php?s=musteri"><div class="menuler">
				<img src="otomasyon_images/m_islemleri2.png" width="50px" height="50px">
				<br>Müşteri İşlemleri</div></a>
			
			<a href="cikis.php"><div class="cikis">
				<img src="otomasyon_images/cikis.png" width="30px" height="30px"></div></a>
			
<div class="hizalama_bitir"></div>	
			
			<a href="otomasyon.php?s=kategori"><div class="menuler">
				<img src="otomasyon_images/kategori.png" width="50px" height="50px">
				<br>Kategori İşlemleri</div></a>
			
			<a href="otomasyon.php?s=urun"><div class="menuler">
				<img src="otomasyon_images/urunler.png" width="50px" height="50px">
				<br>Ürün İşlemleri</div></a>
			
			<a href="otomasyon.php?s=satis"><div class="menuler">
			<img src="otomasyon_images/satis2.png" width="50px" height="50px">
			<br>Satış İşlemleri</div></a>
			
		</div>
		<!--menü bitiş-->
		

		<!--body başlangıç-->

		<div class="body">
		<? 
			include($sayfa.".php");
		?>
		</div>
		
	<!--body bitiş-->
		
<div class="hizalama_bitir"></div>	
	</div>
</body>
</html>