

<link href="css/satis.css" type="text/css" rel="stylesheet"/>

<div class="satis_govde">
	
<form name="form1" method="post" action="satis_yap.php?m_id=<? echo $_GET['m_id'];?>&urn_id=<? echo $_GET['urn_id']?>">
	
	<div class="adet"><b>Adet :</b></div>
  		<label for="textfield"></label>
  		
  		<input class="text" type="text" name="adet" id="textfield">
	
  		<input class="sat" type="submit" name="button" id="button" value="SATIŞ YAP">
	
	<a href="otomasyon.php?s=satis_urn">
		<div class="geri"><img src="otomasyon_images/geri.png" width="20" height="20"></div></a>
	
	<div class="hizalama_bitir"></div>
</form>
	
</div>
