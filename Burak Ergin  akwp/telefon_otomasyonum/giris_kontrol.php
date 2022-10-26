<?

session_start();
include("baglanti.php");
if(($_POST['kadi']!="")&&($_POST['ksifre']!=""))
{
	$sql=" select * from kullanici where k_adi='".$_POST['kadi']."' ".
		" and k_sifre='".md5($_POST['ksifre'])."' and k_durum=1 ";
	
	$sql_calis=mysql_query($sql)or die(mysql_error());
	if(mysql_num_rows($sql_calis)>0)
	{
		$_SESSION['giris']="ok";
		header('location:otomasyon.php');
	}
	else
	{
		header('location:index.php?hata=2');
	}
}
else
{
	header('location:index.php?hata=1&c=5&d=otomasyon&k=true');
}

/*session_start();

if(($_POST['kadi']!="")&&($_POST['ksifre']!=""))
{
	if(($_POST['kadi']=="q")&&($_POST['ksifre']=="q"))
	{
		$_SESSION['giris']="ok";
		header('location:otomasyon.php');
	}
	else
	{
		header('location:index.php?hata=2');
	}
}
else
{
 	header('location:index.php?hata=1&a=hitit&k=true');
}*/

?>