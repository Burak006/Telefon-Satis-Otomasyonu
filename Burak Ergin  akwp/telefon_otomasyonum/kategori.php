
<form id="form1" name="form1" method="post" action="kategori_kayit_islem.php">
	
<div class="k_bilgileri_govde">
	
<link href="css/kategori.css" type="text/css" rel="stylesheet"/>

	<div class="k_bilgileri">Kategori Kayıt <? if($_GET['msg']==1){?><div style="color:#F00">Kayıt İşlemi Gerçekleştirildi</div><? }?></div>

<div class="hizalama_bitir"></div>
	
	<div class="k_adi">Kategori Adı :</div>
	<div><label for="textfield"></label>
         <input class="liste_kategori" type="text" name="kategori" id="textfield" />
	</div>
	
<div class="hizalama_bitir"></div>
	
	<div><input  class="kaydet" type="submit" name="button" id="button" value="KAYDET" /></div>
	
<div class="hizalama_bitir"></div>
	
		
		<div class="basliklar">

        <div class="urun_kodu">Kategori Kodu</div>
        <div class="kat_adi">Kategori Adı</div>
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
	  	$sql= " select * from kategori order by kat_id desc ";
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
        <td style="width: 65px; text-align: center;"><? echo $kayitlar['kat_id'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['kat_adi'];?></td>
		<td style="width: 100px; text-align: center;">
		<a href="kategori_sil.php?sil_id=<? echo $kayitlar['kat_id'];?>">Sil</a>
	&nbsp;<a href="otomasyon.php?s=kategori_guncelle&g_id=<? echo $kayitlar['kat_id'];?>">Güncelle</a>
		</td>
      </tr>
      <? }?>
	  </table>
	</td>
 </tr>
	
</div>
	
</form>
  
