<html>
<head>
	<title>For Döngüsü</title>
</head>
<body>
	<form name="form" action="" method="POST">
	<table>
		<tr>
			<td>1.Sayıyı Giriniz: <input type="text" name="sayi1"></td>
		</tr>
		<tr>
			<td>2.Sayıyı Giriniz: <input type="text" name="sayi2"></td>
		</tr>
		<tr>
			<td>Seçim Ypınız:
				<select name="secim">
					<option value="ucebolum">İki sayı arasında 3'e bölünen sayılar</option>
					<option value="besbolum">İki sayı arasında 5'e bölünen sayılar</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="gonder" value="GÖNDER"></td>
		</tr>
	</table>
	</form>
</body>
</html>

<?php
	if(isset($_POST["gonder"]))
	{
		$ksayi1=$_POST["sayi1"];
		$ksayi2=$_POST["sayi2"];
		$ksecim=$_POST["secim"];
	
	switch($ksecim)
	{
		case "ucebolum":
			if($ksayi1>$ksayi2)
			{
				$enb=$ksayi1;
				$enk=$ksayi2;
			}
			else
			{
				$enb=$ksayi2;
				$enk=$ksayi1;
			}
			for($i=$enk; $i<=$enb; $i++)
			{
				if($i%3==0)
				{
					echo "3'e Bölünen Sayılar: ".$i."<br>";
				}
			}
			
			case "besbolum":
			if($ksayi1>$ksayi2)
			{
				$enb=$ksayi1;
				$enk=$ksayi2;
			}
			else
			{
				$enb=$ksayi2;
				$enk=$ksayi1;
			}
			for($i=$enk; $i<=$enb; $i++)
			{
				if($i%5==0)
				{
					echo "5'e Bölünen Sayılar: ".$i."<br>";
				}
			}
			break;
	}
	}


?>