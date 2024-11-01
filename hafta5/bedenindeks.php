<?php
if(isset($_POST["hesapla"]))
{
	$kadi=$_POST["ad"];
	$ksoyad=$_POST["soyad"];
	$kcins=$_POST["cinsiyet"];
	$kdyili=2024-$_POST["dyili"];
	$kboy=$_POST["boy"];
	$kkilo=$_POST["kilo"];
	$bki=$kboy/($kkilo*$kkilo);
	echo "Merhaba ".$kadi." ".$ksoyad."<br>".
	"Yaşınız: ".$kdyili."<br>".
	"Beden Kitle İndeksi Ölçüleriniz: ".$bki."<br>";
	if($bki<18)
	{
		echo "Zayıf Kategorisindesiniz.";
	}
	else if($bki>19 && $bki<25)
	{
		echo "Normal Kategorisindesiniz.";
	}
	else if($bki>26 && $bki<29)
	{
		echo "Aşırı Kİlolu Kategorisindesiniz.";
	}
	else
	{
		echo "Obez Kategorisindesiniz.";
	}
}


?>