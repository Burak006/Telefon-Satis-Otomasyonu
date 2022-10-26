
<div>
	
<form name="form1" method="post" action="urun_ekle_islem.php">
<link href="css/urun.css" type="text/css" rel="stylesheet"/>
	
<div class="u_bilgileri_govde">
	
	<div class="u_alt_govde">	
	
	<div class="u_bilgileri">Ürün Kayıt</div>
		
<div class="hizalama_bitir"></div>
		
	<div class="u_kategori">Kategori :</div>
	<div>
		<select class="liste_kategori" name="kat" id="select">
            	<?
					$sql="select * from kategori order by kat_adi asc";
					$sql_cls=mysql_query($sql);
					while($veri=mysql_fetch_assoc($sql_cls))
					{
                ?>
                	<option value="<? echo $veri['kat_id'];?>"><? echo $veri['kat_adi'];?></option>
                <?
					}
                ?>
            </select>
	</div>	

<div class="hizalama_bitir"></div>
	
	<div class="u_adi">Ürün Adı :</div>
	<div>
		<label for="textfield"></label>
        <input class="metin" type="text" name="ad" id="textfield">
	</div>	
	
<div class="hizalama_bitir"></div>
		
	<div class="u_fiyat">Ürün Fiyatı :</div>	
	<div><input class="metin" type="text" name="fiyat" id="textfield2"></div>	

<div class="hizalama_bitir"></div>
	
	<div><input class="guncelle" type="submit" name="button" id="button" value="KAYDET"></div>
	
<div class="hizalama_bitir"></div>
	</div>
</div>	
	
</form>	
	
<div class="hizalama_bitir"></div>
	
	
		
		<div class="basliklar">

        <div class="urun_kodu">Ürün Kodu</div>
        <div class="kat_adi">Kategori Adı</div>
        <div class="urun_adi">Ürün Adı</div>
        <div class="urun_fiyat">Ürün Fiyatı</div>
        <div class="islemler">İşlemler</div>
			
		</div>
	
<div class="hizalama_bitir"></div>	
		
	<tr>
   	 <td>
		<table width="650" border="1" cellspacing="1" cellpadding="1">
      
      <style>
	  	.satir1{background-color:#9999FF;}
		.satir2{background-color:#fff;}
	  </style>
      <? 
	  $i=0;
	  	$sql= " SELECT * FROM urun ".
			  " left join kategori on urun.u_kat_id=kategori.kat_id ".
			  " order by u_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayitlar=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$cls="satir1";}
			else
			{$cls="satir2";}
	  ?>
      <tr class="<? echo $cls;?>">
        <td style="width: 65px; text-align: center;"><? echo $kayitlar['u_id'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['kat_adi'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['u_adi'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['u_fiyati']."₺";?></td>
		<td style="width: 100px; text-align: center;">
		<a href="urun_sil.php?sil_id=<? echo $kayitlar['u_id'];?>">Sil</a>
	&nbsp;<a href="otomasyon.php?s=urun_guncelle&g_id=<? echo $kayitlar['u_id'];?>">Güncelle</a></td>
      </tr>
      <? }?>
	  </table>
	</td>
 </tr>
		
	
</div>




