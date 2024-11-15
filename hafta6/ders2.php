<html>
<head>
	<title>For Döngüsü</title>
</head>
<body>
	<form name="form" action="" method="POST">
	<table>
		<tr>
			<td>Sayı Giriniz: <input type="text" name="sayi"> <input type="submit" name="gonder" value="GÖNDER"></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php
	if(isset($_POST["gonder"]))
	{
		$ksayi=$_POST["sayi"];
		if($ksayi<0)
		{
			echo "Negatif Sayıların Faktoriyeli Bulunmaz."."<br>";
		}
		else
		{
			$faktoriyel=1;
			for($i=1; $i<=$ksayi; $i++)
			{
				//$faktoriyel=$faktoriyel*$i;
				$faktoriyel*=$i;
			}
			echo $ksayi." Sayının Faktoriyeli: ".$faktoriyel;
		}
	}


?>