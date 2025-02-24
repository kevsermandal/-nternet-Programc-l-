<?php
//Yeni txt dökümanı oluşturma.
//touch("webtasarim2.txt");
//Deneme kalsörünün içerisine dosya oluşturma.
//touch("deneme/yeni_dosya.txt");

/*touch("ogrenci.txt");
$belge=fopen("ogrenci.txt","w+");
fwrite($belge,"Adım Soyadım: Kevser Mandal,\tOkul:Gelişim Üniversitesi,\nProgramlama Dilleri:PHP");
echo "Belge üzerinde metin eklendi";
fclose($belge)*/

$dosya=fopen("ogrenci.txt","r");
while(!feof($dosya))
{
	echo fgets($dosya)."<br>";
}
?>