<html>
<head></head>
<body>
<table>
<h3>Sayının Pozitif-Negatif ve Tek-Çift Olma Durumu Kontrolü</h3>
<form name="form" action="" method="post">
	<tr>
		<td>Sayı Giriniz : </td>
		<td><input type="text" name="sayi"></td>
		<td><input type="submit" name="kontrol" value="Kontrol Et"></td>
	</tr>
</form>
</table>
</body>
</html>


<?php
	if(isset($_POST["kontrol"]))
	{
	$ksayi=$_POST["sayi"];
		if($ksayi>0 && $ksayi%2==0)
		{
			echo "Sayı hem pozitif hem de çifttir.";
		}
		else if($ksayi>0 && $ksayi%2==1)
		{
			echo "Sayı hem pozitif hem de tektir.";
		}
		else if($ksayi<0 && $ksayi%2==0)
		{
			echo "Sayı hem negatif hem de çifttir.";
		}
		else if($ksayi<0 && $ksayi%2==-1)
		{
			echo "Sayı hem negatif hem de tektir.";
		}
	}

?>