<?php
//Gettype Ekran Görüntüsü
// "\" kaçış operatörüdür.
//"gettype" verinin türünü gösterir.
// "var_dump" ile hem durunu hemde içinde ki yazan veriyi görebiliyoruz.
/*$sayi=55;
echo"<b>Birinci Değişkenin Adı;\$sayi</b>"."<br>".
"Değeri:".$sayi."<br>".
"Türü:".gettype($sayi)."<br><br>";

$ad="Kevser";
echo "<b>İkinci Değişken Adı;\$ad</b>"."<br>".
"Değeri:".$ad."<br>".
"Türü:".gettype($ad)."<br><br>";

$ondalik=5.1234;
echo "<b>Üçüncü Değişken Adı;\$ondalik</b>"."<br>".
"Değeri:".$ondalik."<br>".
"Türü:".gettype($ondalik)."<br><br>";

$mantiksal=1;
echo "<b>Dördüncü Değişken Adı;\$mantiksal</b>"."<br>".
"Değeri:".$mantiksal."<br>".
"Türü:".gettype($mantiksal)."<br>";*/

/*$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";

$b=32;
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";

$c=true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";*/

//PHP Sabitleri
echo "<h2>PHP SABİTLERİ</h2>"."<br>".
"Kodun Bulunduğu Yer:".(__LINE__)."<br>".
"Dosyanın Bulunduğu Yer:".(__FILE__)."<br>".
"Sunucudaki PHP Versiyonu:"."phpversion()"."<br>".
"Sunucudaki İşletim Sistemi:".(PHP_OS)."<br>".
"Dosyanın Bulunduğu Dizin:".(__DIR__);

?>