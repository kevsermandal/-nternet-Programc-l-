<?php
$json_ben=
'{
	"isim":"Kevser",
	"soyisim":"Mandal",
	"memleket":"Giresun"
}';
$veri=json_decode($json_ben);
echo $veri->isim."<br>".
$veri->soyisim."<br>".
$veri->memleket;
?>