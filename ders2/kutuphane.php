<?php
$db=new PDO("mysql:host=localhost; dbname=durum; charset=utf8","root","");
if(isset($_POST["ekle"]))
{
	$kcilt=$_POST["cilt_no"];
	$kyazar=$_POST["yazar_adi"];
	$kyayin=$_POST["yayin_evi"];
	if($db)
	{
		echo "Veritabanı bağlantısı gerçekleşti."."<br>";
	}
	
	$ekle=$db->exec("INSERT INTO durum (cilt_no,yazar_adi,yayinevi) VALUES ('$kcilt','$kyazar','$kyayin')");
	if($ekle)
	{
		echo "Kayıt Ekleme Başarılı.";
	}
	else
	{
		echo "Kayıt Ekleme Başarısız.";
	}
}

?>