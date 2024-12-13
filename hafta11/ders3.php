<?php
	include "ders1.php";
	$kayit=$db->exec("INSERT INTO deneme SET ID='10',ad='Mehmet',soyad='Atıcı'");
	if($kayit)
	{
		echo "Kayıt Gerçekleştirildi. ID Değeri: ".$db->lastInsertId();
	}
?>