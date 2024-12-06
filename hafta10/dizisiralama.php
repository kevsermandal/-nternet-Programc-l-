<?php
echo "<h3>Dizilerde Sıralama</h3>";
$iller=array("Ankara"=>6,"İstanbul"=>34,"İzmir"=>35,"Balıkesir"=>10,"Kocaeli"=>41,"Kırklareli"=>39);
echo "<h5>Dizi Elemanlarını Anahtar Değerlerini Koruyarak Büyükten Küçüğe Sıralama</h5>";
echo "<pre>";
asort($iller);
print_r($iller);
echo "</pre>";
echo "<h5>Dizi Elemanlarını Anahtar Değerlerini Koruyarak Büyükten Küçüğe Sıralama</h5>";
echo "<pre>";
arsort($iller);
print_r($iller);
echo "</pre>";

?>