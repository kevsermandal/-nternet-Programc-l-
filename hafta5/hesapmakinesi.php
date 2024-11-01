<html>
<head>
	<title>Switch ile Hesap Makinesi</title>
</head>
<body>
<form>
	<table>
		<tr>
			<td>1.Sayıyı Giriniz:</td>
			<td><input type="text" name="sayi1"></td>
		</tr>
		<tr>
			<td>2.Sayıyı Giriniz:</td>
			<td><input type="text" name="sayi2"></td>
		</tr>
		<tr>
			<td>İşlem Tipini Seçiniz</td>
			<td><select name="secim">
				<option value="topla">Toplama</option>
				<option value="cıkar">Çıkartma</option>
				<option value="carp">Çarpma</option>
				<option value="bol">Bölme</option>
			</select></td>
		</tr>
		<tr>
			<td><input type="submit" name="islem" value="İŞLEM YAP"></td>
		</tr>
	</table>
</form>
</body>
</html>

<?php
	if(isset($_POST["islem"]))
	{
		$ksayi1=$_POST["sayi1"];
		$ksayi2=$_POST["sayi2"];
		$ksecim=$_POST["secim"];
		switch($ksecim)
		{
			case "topla":
			$topla=$ksayi1+$ksayi2;
			echo "Toplama İşeminin Sonucu: ".$topla;
			break;
			
			case "cıkar":
			$cıkar=$ksayi1-$ksayi2;
			echo "Çıkartma İşeminin Sonucu: ".$cıkar;
			break;
			
			case "carp":
			$carp=$ksayi1*$ksayi2;
			echo "Çarpma İşeminin Sonucu: ".$carp;
			break;
			
			case "bol":
			$bol=$ksayi1/$ksayi2;
			echo "Bölme İşeminin Sonucu: ".$bol;
			break;
		default:echo;	
		}
	}
?>