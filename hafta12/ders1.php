<html>
<head></head>
<body>
<table>
	<form name="form" action="" method="POST">
		<tr>
			<td>TC Kimlik:</td>
			<td><input type="text" name="tc"></td>
		</tr>
		<tr>
			<td>Adı:</td>
			<td><input type="text" name="ad"></td>
		</tr>
		<tr>
			<td>Soyad:</td>
			<td><input type="text" name="soyad"></td>
		</tr>
		<tr>
			<td colspan="3">
				<input type="submit" name="kaydet" value="KAYDET">
				<input type="submit" name="guncelle" value="GÜNCELLE">
				<input type="submit" name="sil" value="SİL">
			</td>
		</tr>
	</form>
</table>
</body>
</html> 

<?php
	$db=new PDO("mysql:host=localhost; dbname=ornek; charset=utf8","root","");
	if(isset($_POST["kaydet"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$kaydet=$db->exec("INSERT INTO ogrencidurum(tc,ad,soyad)VALUES('$ktc','kad','ksoyad')");
			if($kaydet)
			{
				echo "Kayıt ekleme başarılı.";
			}
			else
			{
				echo "Kayıt ekleme başarısız.";
			}
		}
	}
	if(isset($_POST["guncelle"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$guncelle=$db->exec("UPDATE ogrencidurum SET ad='$kad',soyad='$ksoyad' WHERE tc='ktc'");
			if($guncelle)
			{
				echo "Güncelleme başarılı.";
			}
			else
			{
				echo "Güncelleme başarısız.";
			}
		}
	}
	if(isset($_POST["sil"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$sil=$db->exec("DELETE FROM ogrencidurum WHERE ad='$kad'");
			if($sil)
			{
				echo "Silme işlemi başarılı.";
			}
			else
			{
				echo "Silme işlemi başarısız.";
			}
		}
	}


?>