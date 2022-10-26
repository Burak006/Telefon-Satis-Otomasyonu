<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Otomasyon Paneli</title>
<link href="css/admin_giris.css" type="text/css" rel="stylesheet"/>
</head>

<body>
	<form id="form1" name="form1" method="post" action="giris_kontrol.php">
  <div>
	
		<div class="giris_yap_ana_div">
			
	<div class="admin_giris_logo"><img src="otomasyon_images/log.png" width="50" height="50"></div>
			
	<div class="hizalama_bitir"></div>
			
				<div class="giris_yapin">OTOMASYONA GİRİŞ YAP</div>
			
	<div class="hizalama_bitir"></div>	
			<div class="hata_mesaji">
				<?
            if(isset($_GET['hata']))
			{
				if($_GET['hata']==1)
				{
					echo 'Girilen Bilgiler Yanlış!!!';
				}
				else
				{
					echo 'Eksik Bilgi Girildi!!!';
				}
			}
			?>
			</div>
	<div class="hizalama_bitir"></div>
			
		<div class="kullanici"><input type="text" name="kadi" class="kullanici_text"  
		 placeholder="Kullanıcı Adı"/></div>
			
	<div class="hizalama_bitir"></div>		
			
		<div class="sifre"><input type="password" name="ksifre" class="sifre_text"  
		 placeholder="Şifre"/></div>	
			
	<div class="hizalama_bitir"></div>		
		
		<div class="giris_yap_buton">
			<input type="submit" name="button" id="button" value="GİRİŞ" />
		</div>
			
		</div>
	
	
	</div>
</form>
	
</body>
</html>