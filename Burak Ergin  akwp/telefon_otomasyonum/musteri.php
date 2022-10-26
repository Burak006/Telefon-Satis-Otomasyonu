
<div>
	
<form name="form1" method="post" action="musteri_kayit.php">
	
<link href="css/musteri.css" type="text/css" rel="stylesheet"/>
	
	<div class="kul_govde">
		
	<div class="k_bilgileri">Müşteri Kayıt</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_adi">Müşteri Adı :</div>
	<div><input class="liste_kategori" type="text" name="madi" id="textfield"></div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Müşteri Soyadı :</div>
	<div><input class="liste_kategori" type="text" name="msoyad" id="textfield2"></div>

<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Firma Adı :</div>
	<div><input class="liste_kategori" type="text" name="fadi" id="textfield3"></div>
		
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">E-Posta :</div>
	<div><input class="liste_kategori" type="text" name="eposta" id="textfield4"></div>
		
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Telefon :</div>
	<div><input class="liste_kategori" type="text" name="tel" id="textfield5"></div>
		
		
<div class="hizalama_bitir"></div>	

		
	<div><input class="kaydet" type="submit" name="button" id="button" value="KAYDET"></div>
		
<div class="hizalama_bitir"></div>		
</div>
	
</form>
<div class="hizalama_bitir"></div>
	
<tr>
    <td>
		<table width="680" align="center" border="1" cellspacing="1" cellpadding="1">
    <tr>
        <td width="63" align="center" style="color: #3399FF;">Müş.No</td>
        <td width="245" align="center" style="color: #3399FF;">Müş.Adı</td>
        <td width="154" align="center" style="color: #3399FF;">Müş.Soyadı</td>
        <td width="154" align="center" style="color: #3399FF;">Firma Adı</td>
		<td width="154" align="center" style="color: #3399FF;">E-Posta</td>
		<td width="154" align="center" style="color: #3399FF;">Telefon</td>
        <td width="156" align="center" style="color: #3399FF;">İşlemler</td>
	</tr>
      <?
	  $i=0;
	  	$sql=" select * from musteri order by m_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#9999FF";}
			else
			{$renk="#fff";}
      ?>
      <tr bgcolor="<? echo $renk;?>">
        <td style=" width:230px; text-align: center;"><? echo $i;?></td>
        <td style=" width:270px; text-align: center;"><? echo $kayit['m_adi'];?></td>
        <td style=" width:270px; text-align: center;"><? echo $kayit['m_soyadi'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['m_firma'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['m_mail'];?></td>
		  <td style=" width:270px; text-align: center;"><? echo $kayit['m_tel'];?></td>  
        <td style=" width:190px; text-align: center;"><a href="musteri_sil.php?sil_id=<? echo $kayit['m_id'];?>">Sil</a>
	&nbsp;<a href="otomasyon.php?s=musteri_guncelle&g_id=<? echo $kayit['m_id'];?>">Güncelle</a></td>
      </tr>
      <? 
	  	} 
	  ?>
      
    </table></td>
  </tr>

</div>






