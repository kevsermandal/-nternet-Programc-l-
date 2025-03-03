<?php
session_start();
if($_SESSION["kullaniciadi"]=="admin"&& 
$_SESSION["kullanicisifre"]==123456)
{
	echo "<h4>Hoşgeldiniz. Sayın".$_SESSION["kullaniciadi"]."</h4>"."<br>".
	"<a href='ozelsayfa.php'>Özel Sayfa </a> | <a href='cikis.php'>Çıkış Yap</a>"; 
}
else
{
	header("Location:giris.php");
}
?>