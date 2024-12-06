<?php
//Dizi Elemanlarını Tersine Çevirme
/*echo "<h3>Dizi Elemanlarını Tersine Çevirme</h3>";
$isim=array("Çisem","Tuğba","Mehmet","Aysun","Bilal");
$ters_cevir=array_reverse($isim);
echo "İlk Hali"."<br>";
echo "<pre>";
print_r($isim);
echo "</pre>";

echo "Ters Hali"."<br>";
echo "<pre>";
print_r($ters_cevir);
echo "</pre>";*/

//DİZİ SAYICILARI
echo "<h3>Dizi Sayıcıları</h3>";
$sayi=array(6,2,4,1,1,3,5,6);
echo "Eleman Sayısı:".count($sayi)."<br>".
"Dizideki elemanların çarpım snucu:".array_product($sayi)."<br>".
"Dizideki elemanların toplam sayısı:".array_sum($sayi)."<br>".
"Dizideki tekrar eden elemanlar:";
print_r(array_count_values($sayi));



?>