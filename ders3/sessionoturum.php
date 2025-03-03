<?php
/*session_start();
$_SESSION["mesaj"]="Gelişim Üniversitesine Hoşgeldiniz";
echo $_SESSION["mesaj"];*/

$_SESSION["dizi"]=array(
	"kullanici_id"=>123,
	"kullanici_adi"=>"Gelişim Üniversitesi",
	"kullanici_mail"=>"kevsermandal@gelisim.edu.tr",
	"kullanici_telefon"=>"0(505) 296 2879"
);
echo $_SESSION["dizi"]["kullanici_mail"]."<br>";
print_r($_SESSION["dizi"]);
?>