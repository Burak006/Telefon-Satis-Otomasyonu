<?

$sql=" select * from  kategori where kat_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
?>

<form id="form1" name="form1" method="post" action="kategori_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
	
<div class="k_bilgileri_govde">
	
<link href="css/kategori.css" type="text/css" rel="stylesheet"/>

	<div class="k_bilgileri">Kategori Güncelle <? if($_GET['msg']==1){?>
	<div style="color:#F00">Güncelleme İşlemi Gerçekleştirildi</div><? }?></div>

<div class="hizalama_bitir"></div>
	
	<div class="k_adi">Kategori Adı :</div>
	<div><label for="textfield"></label>
         <input class="liste_kategori" type="text" name="kategori" id="textfield" value="<? echo $kayit['kat_adi'];?>" />
	</div>
	
<div class="hizalama_bitir"></div>
	
	<div><input  class="kaydet" type="submit" name="button" id="button" value="GÜNCELLE" /></div>
	
<div class="hizalama_bitir"></div>
	
</div>
	
</form>

  <? }?>
