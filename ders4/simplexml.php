<?php
$veri=simplexml_load_file("personel.xml");
/*echo "<pre>";
print_r($veri);
echo "</pre>";
foreach($veri->personel as $item)
{
	echo "Personel Adı: ".$item->adsoyad."<br>"."Personelin Depatmanı: ".$item->departman."<br>"."<hr>";
}*/

$personel=$veri->addchild("personel");
$personel->addchild("adsoyad","Harun Emir Sandal");
$personel->addchild("departman","Makine Ustası");
//echo $veri->asXML();
foreach($veri->personel as $item)
{
	echo "Personel Adı: ".$item->adsoyad."<br>"."Personelin Depatmanı: ".$item->departman."<br>"."<hr>";
}

?>