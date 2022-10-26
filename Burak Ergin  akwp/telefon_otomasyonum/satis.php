
<link href="css/satis.css" type="text/css" rel="stylesheet"/>

<div class="satis_govde">
	
<a href="otomasyon.php?s=satis_mus"><div class="satis_yap">SATIŞ YAP</div></a>
  
<table width="680" border="1" align="center" cellpadding="1" cellspacing="1">
    <tr>
		<td width="154" align="center" style="color: #3399FF;">Firma Adı</td>
        <td width="245" align="center" style="color: #3399FF;">Müş.Adı</td>
        <td width="154" align="center" style="color: #3399FF;">Müş.Soyadı</td>
		<td width="154" align="center" style="color: #3399FF;">Kategori</td>
		<td width="154" align="center" style="color: #3399FF;">Ürün Adı</td>
		<td width="154" align="center" style="color: #3399FF;">Adet</td>
		<td width="154" align="center" style="color: #3399FF;">Fiyatı</td>
		<td width="154" align="center" style="color: #3399FF;">Tutar</td>
		<td width="154" align="center" style="color: #3399FF;">Tarih</td>
        <td width="156" align="center" style="color: #3399FF;">İşlemler</td>
	</tr>
      <?
	  $i=0;
	  $tutar=0;
	  	$sql= " select * from satis ".
			  " left join musteri on satis.s_mus_id=musteri.m_id ".
			  " left join urun on satis.s_urun_id=urun.u_id ".
			  " left join kategori on urun.u_kat_id=kategori.kat_id ".
			  " order by s_id desc ";
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
		<td style=" width:270px; text-align: center;"><? echo $kayit['m_firma'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['m_adi'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['m_soyadi'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['kat_adi'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['u_adi'];?></td>  
		<td style=" width:270px; text-align: center;"><? echo $kayit['s_adet'];?></td>
		<td style=" width:270px; text-align: center;"><? echo $kayit['u_fiyati'];?></td>
<td style=" width:270px; text-align: center;"><? echo $tutar=$kayit['u_fiyati']*$kayit['s_adet'];?></td>
		<td style=" width:270px; text-align: center;"><? echo substr($kayit['s_tarih'],2,2),"/";?>
		<? echo substr($kayit['s_tarih'],5,2),"/";?><? echo substr($kayit['s_tarih'],0,4),"/";?></td>
		  
        <td style=" width:190px; text-align: center;"><a href="satis_sil.php?sil_id=<? echo $kayit['s_id'];?>">Sil</a></td>
      </tr>
      <? 
	  	} 
	  ?>
      
    </table>
	
</div>