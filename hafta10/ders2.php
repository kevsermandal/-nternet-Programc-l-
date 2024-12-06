<?php
//Dizi Elemanlarını Tek Seferde Çıktı Alma
	/*echo "<h3>İmplode Kullanımı</h3>";
	$programlamadilleri=array("PHP","HTML","CSS","Javascript");
	$duzenle=implode("|",$programlamadilleri);
	echo $duzenle;*/
	
//DİZİ ELEMALARINDAN RASTGELE SEÇİM
	echo "<h3>Diziden Rastgele Eleman Seçme</h3>";
	$sehir=array("Balıkesir","İstanbul","İzmir","Artvin","Giresun","Kastamonu");
	$rastgele=array_rand($sehir);
	echo $sehir[$rastgele];
	
?>