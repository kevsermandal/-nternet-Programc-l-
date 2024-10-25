<?php
	if(isset($_POST["kaydet"]))
	{
		$kadi=$_POST["adi"];
		$ksoyadi=$_POST["soyadi"];
		$kvize=$_POST["vize"];
		$kfinal=$_POST["final"];
		$kproje=$_POST["proje"];
		$ort=($kvize*0.5)+($kfinal*0.25)+($kproje*0.25);
		echo "Merhaba ".$kadi." ".$ksoyadi."<br>".
		"Vize Notu: ".$kvize."<br>".
		"Final Notu: ".$kfinal."<br>".
		"Proje Notu: ".$kproje."<br>".
		"Ortalama: ".$ort."<br>";
		if($ort>40 && $kproje>=40)
		{
			echo "Tebrikler ".$ort."Ortalama ile Dersi Tamamladınız.";
		}
		else
		{
			echo "Maalesef ".$ort."Ortalama ile Dersi Tamamlayamadınız.";
		}
	}


?>