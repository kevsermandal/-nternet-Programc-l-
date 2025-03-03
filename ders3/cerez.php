<?php
setcookie("cerez","Kevser",time()+(60*60*24*365));
	if(isset($_COOKIE["cerez"]))
	{
		echo "Çerezin Adı: ".$_COOKIE["cerez"];
	}
	else
	{
		echo "Böyle Bir Çerez Yoktur.";
	}
?>