<?php
try
{
$db=new PDO("mysql:localhost;dbname=web;charset=utf8","root","");
echo "Kayıt Başarılı";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

?>