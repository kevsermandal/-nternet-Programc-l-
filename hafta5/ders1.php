<html>
<head>
<meta charset="UTF-8">
	<title>Beden Kitle İndeksi Hsaplama</title>
 </head>
<body>
<form name="form" action="bedenindeks.php" method="POST">
<h3>VÜCUT KİTLE İNDEKSİ HESAPLAMA</h3>
	<table>
		<tr>
			<td>Adınız:</td>
			<td><input type="text" name="ad"></td>
		</tr>
		<tr>
			<td>Soyadınız:</td>
			<td><input type="text" name="soyad"></td>
		</tr>
		<tr>
			<td>Cinsiyet:</td>
			<td><input type="radio" name="cinsiyet">Kadın
			<input type="radio" name="cinsiyet">Erkek</td>
		</tr>
		<tr>
			<td>Doğum Yılı:</td>
			<td><select name="dyili">
				<option value="2005">2005</option>
				<option value="2006">2006</option>
				<option value="2007">2007</option>
				<option value="2008">2008</option>
				<option value="2009">2009</option>
				<option value="2010">2010</option>
				<option value="2011">2011</option>
				<option value="2012">2012</option>
				<option value="2013">2013</option>
				<option value="2014">2014</option>
			
			</select></td>
		</tr>
		<tr>
			<td>Boyunuz:</td>
			<td><input type="text" name="boy"> m (Örn:1.74m)</td>
		</tr>
		<tr>
			<td>Kilonuz:</td>
			<td><input type="text" name="kilo"> kg (Örn:63kg)</td>
		</tr>
		<tr>
			<td><input type="submit" name="hesapla" value="KAYDET"></td>
		</tr>
	</table>
</form>
</body>
</html> 