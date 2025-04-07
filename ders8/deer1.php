<?php
//Base64 ile şifreleme
$sifre="GelisimUniversitesi34";
$sifrelendi=base64_encode($sifre);
$sifre_cozuldu=base64_decode($sifrelendi);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>".
	"Şifrenin Çözümlenmiş Hali: ".$sifre_cozuldu."<br>";	
//gzcompress ile şifreleme
echo "<h4>String ifade boyutu küçültme.</h4>";
$yazi="Lorem Ipsum is simply dummy text of the printing and typesetting industry.
 Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
 when an unknown printer took a galley of type and scrambled it to make a type specimen book.
 It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. 
 It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
 desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
$kucultme=gzcompress($yazi);
echo "Orijnal Boyut: ".$yazi."<br>"."Sıkıştırılmış Boyut: ".strlen($kucultme)."<br>"; 
 //şifreleme
echo "<h4>Şifreleme</h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=gzcompress($sifre);
$sifre_cozuldu=gzcompress($sifrelendi);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>".
	"Şifrenin Çözümlenmiş Hali: ".$sifre_cozuldu."<br>";
//urldecode kullanımı
echo "<h4>Urldecode ve Urldecode Kullanımı</h4>";
$sifre="Gelişim Üniversitesi Meslek Yüksek Okulu";
$sifrelendi=urldecode($sifre);
$sifre_cozuldu=urldecode($sifrelendi);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>".
	"Şifrenin Çözümlenmiş Hali: ".$sifre_cozuldu."<br>";
//MD5 Kullanımı
echo "<h4>MD5 Kullanımı</h4>";
$sifre="GelisimUniversitesi34";
$ekle="Avcılar";
$sifrelendi=md5($sifre);
$sifrelendi2=md5($ekle);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>".
	"İfade Eklenmiş Şifre: ".$sifrelendi2."<br>";
//SHA1 Kullanımı
echo "<h4>SHA1 Kullanımı</h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=sha1($sifre);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>";
$guvenlisifre=sha1(md5($sifre));
echo "Güvenli Şifre Oluşturmanın Yolu: ".$guvenlisifre."<br>";
//CRC32 Kullanımı
echo "<h4>CRC32 Kullanımı</h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=crc32($sifre);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>";
//HASH Kullanımı
echo "<h4>HASH Kullanımı</h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=hash('sha256',$sifre);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>";
//CRYPT ile Şifreleme
echo "<h4>Crypt ile Şifreleme</h4>";
error_reporting();

//Basit Kullanımı
$sifre="GelisimUniversitesi34";
//$sifrelendi=crypt($sifre);
echo "Basit Kullanım ile Şifreleme: ".$sifrelendi."<br>";

//CRYT_STD_DES KULLANIMI
if(CRYPT_STD_DES)
{
	$sifrelendi=crypt($sifre,"Ge");
	echo "Standart DES Şifrelemesi: ".$sifrelendi."<br>";
}
if(CRYPT_EXT_DES)
{
	$sifrelendi=crypt($sifre,"Gelisim");
	echo "Gelişmiş DES Şifrelemesi: ".$sifrelendi."<br>";
}
if(CRYPT_MD5)
{
	$sifrelendi=crypt($sifre,'GelisimUnive$');
	echo "MD5 Şifrelemesi: ".$sifrelendi."<br>";
}
if(CRYPT_BLOWFISH)
{
	$sifrelendi=crypt($sifre,'2a$GelisimUniversite$');
	echo "BLOWFISH Şifrelemesi: ".$sifrelendi."<br>";
}
if(CRYPT_SHA256)
{
	$sifrelendi=crypt($sifre,'5$GelisimUniversite$');
	echo "SHA256 Şifrelemesi: ".$sifrelendi."<br>";
}
if(CRYPT_SHA512)
{
	$sifrelendi=crypt($sifre,'6$GelisimUniversite$');
	echo "SHA512 Şifrelemesi: ".$sifrelendi."<br>";
}


//PASSWOED_HASH Kullanımı
echo "<h4>PASSWOED_HASH Kullanımı</h4>";
$sifre="GelisimUniversitesi34";
$sifrelendi=password_hash($sifre,PASSWORD_DEFAULT);
echo "Girilen Şifre: ".$sifre."<br>".
	"Şifrelenmiş Veri: ".$sifrelendi."<br>";
?>