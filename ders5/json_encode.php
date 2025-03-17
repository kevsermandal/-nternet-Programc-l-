<?php
//Anahtar değerleri olmayan diziyi json dizisine çevirme.
$diller=array("PHP","C#","Java");
$json_dizisi=json_encode($diller);
echo $json_dizisi."<br>";

//Anahtar değerleri olan bir diziyi json dizisi haline çevirme
$Araba_Markası=array("araba1"=>"Mercedes","araba2"=>"BMW","araba3"=>"Volvo");
$json_nesnesi=json_encode($Araba_Markası);
echo $json_nesnesi."<br>";
?>