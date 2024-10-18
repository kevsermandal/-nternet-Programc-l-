<?php
//Manuel Hesap Makinesi
echo "<h3>Basit Hesap Makinesi</h3>"."<br>";
	$sayi1=35;
	$sayi2=5;
	$toplama=$sayi1+$sayi2;
	$cikartma=$sayi1-$sayi2;
	$carp=$sayi1*$sayi2;
	$bol=$sayi1/$sayi2;
	$mod=$sayi1%$sayi2;
	$us=$sayi1**$sayi2;
	echo "1.sayının değeri:".$sayi1."<br>";
	echo "2.sayının değeri:".$sayi2."<br>";
	echo "Toplama İşleminin Sonucu:".$toplama."<br>";
	echo "Çıkartma İşleminin Sonucu:".$cikartma."<br>";
	echo "Çarpma İşleminin Sonucu:".$carp."<br>";
	echo "Bölme İşleminin Sonucu:".$bol."<br>";
	echo "Mod Alma İşleminin Sonucu:".$mod."<br>";
	echo "Üs Alma İşleminin Sonucu:".$us;
?>