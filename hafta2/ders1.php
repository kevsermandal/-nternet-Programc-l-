<?php
//Gettype Uygulama
$degisken=true;
$degisken2=3;
$degisken3=5.6;
$degisken4="Kevser";
$degisken5=array("red","blue","yellow");
$degisken6=new stdClass;
$degisken7=NULL;
$degisken8="30";

echo gettype($degisken)."<br>".
	gettype	($degisken2)."<br>".
	gettype($degisken3)."<br>".
	gettype($degisken4)."<br>".
	gettype($degisken5)."<br>".
	gettype($degisken6)."<br>".
	gettype($degisken7)."<br>".
	gettype($degisken8)."<br>";

?>