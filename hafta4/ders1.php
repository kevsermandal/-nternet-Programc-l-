<?php
	/*
		$sayi=7;
		echo "Tanımlanmış Sayı Değeri : ".$sayi."<br>";
		if($sayi>3 && $sayi<10)
		{
			echo "Sayı Değeri 3'ten büyük 10'dan küçükütür.";
		}
	*/
	
	/*
		$ad="Kevser";
		echo "Tanımlanan Kullanıcı Adı : ".$ad."<br>";
		$sifre=1234;
		echo "Tanımlanan Şifre : ".$sifre."<br>";
		if($ad=="Kevser" && $sifre==1234) 
		{
			echo "Kullanıcı Adınız ve Şifreniz Doğrudur.";
		}
		else
		{
			echo "Kullanıcı Adınız ve Şifreniz Yanlıştır.";
		}
	*/
	
	//TERNARY YAPISI 3'LÜ OPERATÖR.
	$sayi=50;
	echo "Tanımlanmış Sayı Değeri : ".$sayi."<br>";
	echo ($sayi>10)?"Sayı 10'dan Büyük":"Sayı 10'dan Küçüktür";
?>