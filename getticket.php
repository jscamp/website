<?php

$code = trim(strtoupper($_GET['code']));

$discounts = array(

	"LATEBIRD" 			=> 50,
	"HACKERSPACESG" 	=> 50,
	"SMARTSPACESG"		=> 50,
	"THEHUBSG"			=> 50,
	"GIRLSINTECHSG"		=> 50,
	"NUSHACKERS"		=> 50,
	"FISG"				=> 50,
	"JFDIASIA"			=> 50,
	"SPIFFY"			=> 30,
	"VIKI"				=> 30,
	"GOOGLESG"			=> 30,
	"PAYPALSG"			=> 30,
	"PWDOORG"			=> 50,
	"GREENWAVEREALITY"	=> 30,
	"WEBGEEKPH"			=> 50,
	"FIID"				=> 50,
	"ADOBEHTML"			=> 30

);

$urls = array(

	50 	=> "https://jscamp.wufoo.com/forms/r7x2s9/def/Field638=".$code,
	30 	=> "https://jscamp.wufoo.com/forms/q7x3a1/def/Field638=".$code,
	0 	=> "https://jscamp.wufoo.com/forms/jscamp-full-pass/"

);

$discount = isset($discounts[$code]) ? $discounts[$code] : 0;
	
$url = isset($urls[$discount]) ? $urls[$discount] : $urls[0];

header("location: ".$url);

exit;
