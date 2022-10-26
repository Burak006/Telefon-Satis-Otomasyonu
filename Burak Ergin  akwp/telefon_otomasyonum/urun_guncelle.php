<?

$sql=" select * from  urun where u_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
?>

<div>
	
<form name="form1" method="post" action="urun_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
	
<link href="css/urun.css" type="text/css" rel="stylesheet"/>
	
<div class="u_bilgileri_govde">
		<div class="u_alt_govde">
	<div class="u_bilgileri">Ürün Güncelle</div>
		
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
                <option value="<? echo $veri['kat_id'];?>" <?
				 if($kayit['u_kat_id']==$veri['kat_id']){echo 'selected';} ?>><? echo $veri['kat_adi'];?></option>
                <?
					}
                ?>
            </select>
	</div>	

<div class="hizalama_bitir"></div>
	
	<div class="u_adi">Ürün Adı :</div>
	<div>
        <input class="metin" type="text" name="ad" id="textfield" value="<? echo $kayit['u_adi'];?>">
	</div>	
	
<div class="hizalama_bitir"></div>
		
	<div class="u_fiyat">Ürün Fiyatı :</div>	
	<div>
	<input class="metin" type="text" name="fiyat" id="textfield2" value="<? echo $kayit['u_fiyati'];?>"></div>	

<div class="hizalama_bitir"></div>
	
	<div><input class="guncelle" type="submit" name="button" id="button" value="GÜNCELLE"></div>
	
<div class="hizalama_bitir"></div>
	</div>
</div>	
	
</form>	
	
<div class="hizalama_bitir"></div>
	
</div>

<? }?>


