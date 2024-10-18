<html>
<head>
	<meta charset="utf-8">
	<title>Kullanıcı Formu</title>
</head>
	<body>
		<form name="form" action="" method="post">
			<table>
				<tr>
					<td>ADI:</td>
					<td><input type="text" name="adi"></td>
				</tr>
				<tr>
					<td>SOYAD:</td>
					<td><input type="text" name="soyad"></td>
				</tr>
				<tr>
					<td><input type="submit" name="gonder" value="KAYDET"></td>
				</tr>
			</table>
		</form>
	</body>
</html>

<?php
	if(isset($_POST["gonder"]))
	{
		$kadi=$_POST["adi"];
		$ksoyadi=$_POST["soyad"];
		echo "Merhaba ".$kadi." ".$ksoyadi;
	}

?>