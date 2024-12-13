<?php
include "ders1.php";
$kayit=$db->exec("INSERT INTO deneme SET ID='4', ad='Gelişim', soyad='Üniversitesi'");
if($kayit) 
{
	echo "Kayıt İşlemi Başarılı.";
}
else
{
	echo "Kayıt İşlemi Başarısız.";
}
//Veritabanı Prepare Kullanarak Maunel Veri Ekleme
//$sorgu=$db->prepare("INSERT INTO deneme SET ID=?,ad=?,soyad=?");
//$kayit=$sorgu->execute(array("3","Nisa","Karagöz"));
//if($kayit)
//{
//	echo "Kayıt İşlemi Başarılı";
//}
//else
//{
//	echo "Kayıt İşlemi Başarısız";
//}
?>