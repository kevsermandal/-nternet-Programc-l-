<?php
	/*$bilgiler=array("Eğitim Bilgileri: ","Ön Lisans: "=>"Gelişim Üniversitesi","Deneyim:","Deneyim: "=>"Çalışmadım","Programlama Dilleri:","PHP","HTML5","CSS","PHYTON");
		echo "<pre>";
		print_r($bilgiler);
		echo "</pre>";*/
		
	/*HAFANIN GÜNLERİNİ YAZDIRMA*/
	$gunler=array("Pazartesi","salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
	echo "<h3>Haftanın Güneri</h3>";
	for($i=0; $i<count($gunler); $i++)
	{
		echo $gunler[$i]."<br>";
	}
?>