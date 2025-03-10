<?php
include("baglan.php");
if(isset($_POST["giris"]))
{
	$kadi=$_POST["adi"];
	$ksifre=$_POST["sifre"];
	$sorgu=$db->query("SELECT * FROM kullaniciler WHERE adi='$kadi' and sifre='$ksifre'",PDO::FETCH_ASSOC);
	if($sorgu->rowCount()>0)
	{
		session_start();
		$ad_soyad=$sorgu->fetch();
		$_SESSION["kadi"]=$kadi;
		$_SESSION["sifre"]=$ksifre;
		echo "<h3>Hoşgeldiniz ".$ad_soyad["ad_soyad"]. "Sayfamı ziyaret ettiğiniz için teşekkür ederim."."</h3>"."<br>"."<a href='cikis.php'>Çıkış Yap</a>";
	}
	else
	{
		echo "<h3>Hatalı Giriş Yaptınız. Anasayfaya Yönlendiriliyorsunuz.</h3>";
		header("refresh:4; url=form.php");
	}
}
?>