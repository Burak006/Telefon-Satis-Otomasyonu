


<table width="680" border="1" align="center" cellpadding="1" cellspacing="1">
	
  <tr>
    <td width="63" align="center" style="color: #3399FF;">Müş. No</td>
    <td width="262" align="center" style="color: #3399FF;">Firma Adı</td>
    <td width="222" align="center" style="color: #3399FF;">Adı</td>
    <td width="175" align="center" style="color: #3399FF;">Soyadı</td>
    <td width="51" align="center" style="color: #3399FF;">
	<a href="otomasyon.php?s=satis"><img src="otomasyon_images/geri.png" width="20" height="20"></a></td>
  </tr>
	
  <?
  $sql="select * from musteri order by m_firma desc";
  $sql_cls=mysql_query($sql)or die(mysql_error());
  while($kayit=mysql_fetch_assoc($sql_cls))
  {
	  $i++;
			if($i%2==1)
			{$renk="#9999FF";}
			else
			{$renk="#fff";}
  ?>
  <tr bgcolor="<? echo $renk;?>">
    <td style=" width:230px; text-align: center;"><? echo $kayit['m_id'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $kayit['m_firma'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $kayit['m_adi'];?></td>
    <td style=" width:230px; text-align: center;"><? echo $kayit['m_soyadi'];?></td>
    <td style=" width:230px; text-align: center;"><a href="otomasyon.php?s=satis_urn&m_id=<? echo $kayit['m_id']?>">SEÇ &gt;&gt;</a></td>
  </tr>
  <?
  }
  ?>
  
</table>
