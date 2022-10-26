
<div>
	
<form name="form1" method="post" action="kullanici_kayit.php">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
	<div class="kul_govde">
		
	<div class="k_bilgileri">Kullanıcı Kayıt</div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_adi">Kullanıcı Adı :</div>
	<div><input class="liste_kategori" type="text" name="kadi" id="textfield"></div>
	
<div class="hizalama_bitir"></div>	
	
	<div class="k_sifre">Kullanıcı Şifre :</div>
	<div><input class="liste_kategori" type="text" name="ksifre" id="textfield2"></div>

<div class="hizalama_bitir"></div>	

	<div class="k_durum">Kullanıcı Durum :</div>
	<div><label for="select"></label>
		<select class="combobox" name="kdurum" id="select">
          	<option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
	</div>
<div class="hizalama_bitir"></div>
		
	<div><input class="kaydet" type="submit" name="button" id="button" value="KAYDET"></div>
		
<div class="hizalama_bitir"></div>		
</div>
	
<div class="hizalama_bitir"></div>
</form>
	
		<div class="tablo_baslik">
			<div class="kul_kodu">Kul. No</div>
			<div class="kul_adi">Kullanıcı Adı</div>
			<div class="k_durum2">Kullanıcı Durum</div>
			<div class="islemler">İşlemler</div>
		</div>
	
<div class="hizalama_bitir"></div>
<tr>
    <td><table width="650" align="center" border="1" cellspacing="1" cellpadding="1">
     
      <?
	  $i=0;
	  	$sql=" select * from kullanici order by k_id desc ";
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
        <td style=" width:120px; text-align: center;"><? echo $i;?></td>
        <td style=" width:270px; text-align: center;"><? echo $kayit['k_adi'];?></td>
        <td style=" width:250px; text-align: center;"><? if($kayit['k_durum']==1){?><span style="color:#090">Aktif</span><? }else{?>Pasif<? }?></td>
        <td style=" width:190px; text-align: center;"><a href="kullanici_sil.php?sil_id=<? echo $kayit['k_id'];?>">Sil</a>
	&nbsp;<a href="otomasyon.php?s=kullanici_guncelle&g_id=<? echo $kayit['k_id'];?>">Güncelle</a></td>
      </tr>
      <? 
	  	} 
	  ?>
      
    </table></td>
  </tr>

</div>






