<?php
//DİZİ BİRLEŞTRME
	//echo "<h3>Dizi Elemanlarını Birleştirme</h3>";
	//$marmara_bolge=array("Balıkesir","İstanbul","Bursa");
	//$ege_bolge=array("İzmir","Aydın","Manisa");
	//$tum_iller=array_merge($marmara_bolge,$ege_bolge);
	//echo "<pre>";
	//print_r($tum_iller);
	//echo "</pre>";
	
//DİZİDEKİ ORTAK ELEMANI BULMA
	echo "<h3>Dizideki Ortak Elemanı</h3>";
	$dizi1=array("Araba","Kalem","Ev");
	$dizi2=array("Araba","kalem","masa");
	$dizi3=array("Kalem","Araba","Sandalye");
	$dizi4=array("Masa","Kalem","Araba");
	$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
	echo "<pre>";
	print_r($ortak_bul);
	echo "</pre>";
?>