<?php
	//Dizilerde Ekle Çıkar Fonksiyonu
	
	echo "<h3>array_unshift() Kullanımı</h3>";
	$diller=array("PHP","C#");
	array_unshift($diller,"Javascript","Phyton");
	print_r($diller);
	echo "<h3>array_shift() Kullanımı</h3>";
	array_shift($diller);
	print_r($diller);
	echo "<h3>array_push() Kullanımı</h3>";
	array_push($diller,"Vue","Laravel");
	print_r($diller);
	echo "<h3>Array_pop Kullanımı</h3>";
	array_pop($diller);
	print_r($diller);
	echo "<h3>Unset Kullanımı</h3>";
	unset ($diller["2"]);
	print_r($diller);
?>