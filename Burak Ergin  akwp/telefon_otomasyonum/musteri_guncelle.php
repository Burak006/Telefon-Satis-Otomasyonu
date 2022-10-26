<?

$sql=" SELECT * FROM  musteri WHERE m_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
?>
<div>
	
<form name="form1" method="post" action="musteri_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
	
<link href="css/musteri.css" type="text/css" rel="stylesheet"/>
	
	<div class="kul_govde">
		
	<div class="k_bilgileri">Müşteri Güncelle</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_adi">Müşteri Adı :</div>
	<div><input class="liste_kategori" type="text" name="madi" id="textfield" value="<? echo $kayit['m_adi'];?>"></div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Müşteri Soyadı :</div>
	<div><input class="liste_kategori" type="text" name="msoyad" id="textfield2" value="<? echo $kayit['m_soyadi'];?>"></div>

<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Firma Adı :</div>
	<div><input class="liste_kategori" type="text" name="fadi" id="textfield3" value="<? echo $kayit['m_firma'];?>"></div>
		
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">E-Posta :</div>
	<div><input class="liste_kategori" type="text" name="eposta" id="textfield4" value="<? echo $kayit['m_mail'];?>"></div>
		
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Telefon :</div>
	<div><input class="liste_kategori" type="text" name="tel" id="textfield5" value="<? echo $kayit['m_tel'];?>"></div>
		
		
<div class="hizalama_bitir"></div>	

		
	<div><input class="kaydet" type="submit" name="button" id="button" value="GÜNCELLE"></div>
		
<div class="hizalama_bitir"></div>		
</div>
	

</form>
	
<div class="hizalama_bitir"></div>
	
	
</div>

<? }?>




