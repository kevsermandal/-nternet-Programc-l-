<html>
<head>
	<title>SWİTCH CASE YAPISI KULLANIMI</title>
</head>
<body>
<form name="form" action="" method="POST">
<table>
	<tr>
		<td>Sayı Giriniz:</td>
		<td><input type="text" name="gun"> <input type="submit" name="gonder" value="GÖNDER"></td>
	</tr>
</table>
</form>
</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
	$kgun=$_POST["gun"];
	switch($kgun)
	{
		case 1:echo "Bugün Günderden Pazartesi.";
		break;
		case 2:echo "Bugün Günderden Salı.";
		break;
		case 3:echo "Bugün Günderden Çarşamba.";
		break;
		case 4:echo "Bugün Günderden Perşembe.";
		break;
		case 5:echo "Bugün Günderden Cuma.";
		break;
		case 6:echo "Bugün Günderden Cumartesi.";
		break;
		case 7:echo "Bugün Günderden Pazar.";
		break;
	default: echo "Böyle Bir Yok."; 
	}
	
}

?>