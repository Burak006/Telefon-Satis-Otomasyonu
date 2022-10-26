<link href="css/ana.css" type="text/css" rel="stylesheet"/>

<div class="govde">
	<div class="ana_baslik"><b>Otomasyona Hoşgeldiniz.</b></div>
	
<div class="hizalama_bitir"></div>
	
	<div class="ana_baslik"><b>Var Olan Ürünlerin Listesi</b></div>
	
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
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['u_id'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['kat_adi'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['u_adi'];?></td>
        <td style="width: 85px; text-align: center;"><? echo $kayitlar['u_fiyati']."₺";?></td>
		<td style="width: 100px; text-align: center;">
		<a href="urun_sil.php?sil_id=<? echo $kayitlar['u_id'];?>">Sil</a>
	&nbsp;<a href="otomasyon.php?s=urun_guncelle&g_id=<? echo $kayitlar['u_id'];?>">Güncelle</a></div>
      </tr>
      <? }?>
	  </table>
	</td>
 </tr>
	

</div>