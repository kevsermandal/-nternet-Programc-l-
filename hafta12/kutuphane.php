<html>
<head></head>
<body>
<table border="1px slid black" width="400" cellpadding="5">
	<form name="form" action="" method="POST">
		<tr>
			<td>Türü:</td>
			<td><select name="tur">
				<option value="roman">ROMAN</option>
				<option value="hikaye">HİKAYE</option>
				<option value="masal">MASAL</option>
				<option value="fabl">FABL</option>
				<option value="makale">MAKALE</option>
			</select></td>
		</tr>
		<tr>
			<td>Adı:</td>
			<td><input type="text" name="ad"></td>
		</tr>
		<tr>
			<td>Yazar Adı:</td>
			<td><input type="text" name="yad"></td>
		</tr>
		<tr>
			<td>Yayınevi:</td>
			<td><input type="text" name="yayin"></td>
		</tr>
		<tr>
			<td>Sayfa Sayısı:</td>
			<td><input type="text" name="sayfasayi"></td>
		</tr>
		<tr>
			<td>Özet:</td>
			<td><input type="text" name="ozet"></td>
		</tr>
		<tr>
			<td colspan="4">
				<input type="submit" name="kaydet" value="KAYDET">
				<input type="submit" name="guncelle" value="GÜNCELLE">
				<input type="submit" name="sil" value="SİL">
				<input type="submit" name="liste" value="LİSTELE">
			</td>
		</tr>
	</form>
</table>
</body>
</html> 

<?php
	$db=new PDO("mysql:host=localhost; dbname=kutuphane; charset=utf8","root","");
	if(isset($_POST["kaydet"]))
	{
		$kturu=$_POST["tur"];
		$kad=$_POST["ad"];
		$kyadi=$_POST["yad"];
		$kyayin=$_POST["yayin"];
		$kssayi=$_POST["sayfsayi"];
		$kozet=$_POST["ozet"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$kaydet=$db->exec("INSERT INTO durum(tur,ad,yazarad,yayinevi,sayfasayi,ozet)VALUES('$kturu','$kad','$kyadi','$kyayin','$kssayi''$kozet')");
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
		$kturu=$_POST["tur"];
		$kad=$_POST["ad"];
		$kyadi=$_POST["yad"];
		$kyayin=$_POST["yayin"];
		$kssayi=$_POST["sayfsayi"];
		$kozet=$_POST["ozet"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$guncelle=$db->exec("UPDATE durum SET tur='$kturu',ad='$kyadi',yayin='$kyayin',sayfasayi='$kssayi',ozet='$kozet' WHERE ad='$kad'");
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
		$kturu=$_POST["tur"];
		$kad=$_POST["ad"];
		$kyadi=$_POST["yad"];
		$kyayin=$_POST["yayin"];
		$kssayi=$_POST["sayfsayi"];
		$kozet=$_POST["ozet"];
		
		if($db)
		{
			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$sil=$db->exec("DELETE FROM durum WHERE ad='$kad'");
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
	
	if(isset($_POST["liste"]))
	{
		$kturu=$_POST["tur"];
		$kad=$_POST["ad"];
		$kyadi=$_POST["yad"];
		$kyayin=$_POST["yayin"];
		$kssayi=$_POST["sayfsayi"];
		$kozet=$_POST["ozet"];
		

			echo "Veritabaanı bağlantısı gerçekleşti."."<br>";
			$liste=$db->query("SELECT * FROM durum");
			while($gelenveri=$liste->fetch())
			{
				echo "Adı:".$gelenveri["$kad"]."Türü:".$gelenveri["$ktur"]."Yazar Adı:".$gelenveri["$kyadi"]."Yayınevi:".$gelenveri["$kyayin"]."Sayfa Sayısı:".$gelenveri["$kssayi"]."Özet:".$gelenveri["$kozet"];
			}

	}
?>