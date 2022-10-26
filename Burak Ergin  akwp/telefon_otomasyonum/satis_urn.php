<table width="680" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr>
    <td width="63" align="center" style="color: #3399FF;">Urn.No</td>
    <td width="63" align="center" style="color: #3399FF;">Ürün Kategori</td>
    <td width="63" align="center" style="color: #3399FF;">Ürün Adı</td>
    <td width="63" align="center" style="color: #3399FF;">Ürün Fiyatı</td>
    <td width="51" align="center" style="color: #3399FF;">
	<a href="otomasyon.php?s=satis_mus"><img src="otomasyon_images/geri.png" width="20" height="20"></a></td>
  </tr>
  <?
  	$sql=" select * from urun  ".
		" left join kategori on urun.u_kat_id=kategori.kat_id ".
		" order by u_id desc ";
	$sql_cls=mysql_query($sql)or die(mysql_error());
	while($veri=mysql_fetch_assoc($sql_cls))
	{
		$i++;
			if($i%2==1)
			{$renk="#9999FF";}
			else
			{$renk="#fff";}
  ?>
  <tr bgcolor="<? echo $renk;?>">
    <td style=" width:230px; text-align: center;"><? echo $veri['u_id'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $veri['kat_adi'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $veri['u_adi'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $veri['u_fiyati'];?></td>
    <td style=" width:230px; text-align: center;"><a href="otomasyon.php?s=satis_adet&m_id=<? echo $_GET['m_id'];?>&urn_id=<? echo $veri['u_id'];?>">SEÇ&gt;&gt;</a></td>
  </tr>
  <?
	}
  ?>
</table>
