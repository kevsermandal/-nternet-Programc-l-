<?php
include "ders1.php";
$guncelleme=$db->exec("UPDATE deneme SET ad='Kevser' WHERE soyad='karagöz'");
if($guncelleme)
{
	echo "Güncelleme Başarılı.";
}
else
{
	echo "Güncelleme Başarısız.";
}
//VERİTABANI PREPARE İLE VERİ GÜNCELLEME
$sorgu=$db->prepare("UPDATE deneme SET ad=?,soyad=?");
$guncelleme=$sorgu->execute(array("Kevser","Atıcı"));
if($guncelleme)
{
	echo "Güncelleme Başarılı.";
}
else
{
	echo "Güncelleme Başarısız.";
}
?>