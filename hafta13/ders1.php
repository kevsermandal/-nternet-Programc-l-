<html>
<head></head>
<body>
	<form name="form" action="" method="POST">
		<table width="500px" border="1px solid black">
		<tr>
			<td>Adınız:</td>
			<td><input type="text" name="ad"></td>
		</tr>
		<tr>
			<td>Soyadınız:</td>
			<td><input type="text" name="soyad"></td>
		</tr>
		<tr>
			<td>TC Kimlik: </td>
			<td><input type="text" name="tc"></td>
		</tr>
		<tr>
			<td>Cinsiyetiniz:</td>
			<td><input type="radio" name="cins" value="Kadın">Kadın<input type="radio" name="cins" value="Erkek">Erkek</td>
		</tr>
		<tr>
			<td>Maaş:</td>
			<td><input type="text" name="maas"></td>
		</tr>
		<tr>
			<td>Çocuk Sayısı:</td>
			<td><input type="radio" name="cocuks" value="1">1<input type="radio" name="cocuks" value="2">2<input type="radio" name="cocuks" value="3'den fazla">3'den fazla</td>
		</tr>
		<tr colspan="4">
			<td><input type="submit" name="ekle" value="EKLE">
			<input type="submit" name="sil" value="SİL">
			<input type="submit" name="guncelle" value="GÜNCELLE">
			<input type="submit" name="liste" value="LİSTELE"></td>
		</tr>
		</table>
	
	</form>

</body>
</html>

<?php
$db=new PDO("mysql:host=localhost;dbname=isci_maas;charset=utf8","root","");
if(isset($_POST["ekle"]))
{
	$kad=$_POST["ad"];
	$ksoyad=$_POST["soyad"];
	$ktc=$_POST["tc"];
	$kcins=$_POST["cins"];
	$kmaas=$_POST["maas"];
	$kcocuks=$_POST["cocuks"];
	$sonmaas=0;
if($kcocuks==1)
{
	$sonmaas=$kmaas+500;
}
else if($kcocuks==2)
{
	$sonmaas=$kmaas+600;
}
else if($kcocuks==3)
{
	$sonmaas=$kmaas+700;
}

if($db)
{
	echo "Veritabanı Bağlantısı Gerçekleşti"."<br>";
}

$ekle=$db-> exec("INSERT INTO durum(tc,ad,soyad,cinsiyet,maas,cocuksayi,tmaas) VALUES('$ktc','$kad','$ksoyad','$kcins','$kmaas','$kcocuks','$sonmaas')");
if($ekle)
{
	echo "Kayıt Ekleme Başarılı.";
}
else
{
	echo "Kayıt Ekleme Başarısız.";
}
if($kcocuks==1)
{
	$sonmaas=$kmaas+500;
}
else if($kcocuks==2)
{
	$sonmaas=$kmaas+600;
}
else if($kcocuks==3)
{
	$sonmaas=$kmaas+700;
}

if($db)
{
	echo "Veritabanı Bağlantısı Gerçekleşti"."<br>";
}
$degis=$db-> exec("UPDATE durum SET tc='$ktc',ad='$kad',soyad='$ksoyad',cinsiyet='$kcins',maas='$kmaas',cocuksayi='$kcocuks',tmaas='$sonmaas' WHERE tc='$ktc'");
if($guncelle)
{
	echo "Kayıt Güncellemesi Başarılı.";
}
else
{
	echo "Kayıt Güncellemesi Başarısız.";
}
}
?>