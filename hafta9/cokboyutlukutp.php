<?php
	$kutuphane=[
	[
		"Kitap Adı:"=>"Nutuk",
		"Kitabın Yazarı:"=>"Mustafa Kemal Atatürk",
		"Yayınevi:"=>"Yapı Kredi Yayınevleri"."<br>"
	],
	[
		"Kitap Adı:"=>"Küçük Prens",
		"Kitabın Yazarı:"=>"Antoine de Saint-Exupery",
		"Yayınevi:"=>"Can Çocuk Yayınları"
	]
	];
	foreach($kutuphane as $kitap)
	{
		foreach($kitap as $anahtar=>$deger)
		{
			echo $anahtar."-".$deger."<br>";
		}
	}



?>