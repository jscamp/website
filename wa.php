<?php

$countrycode = 65;
$wlanmac = "CC:08:E0:BE:99:08";
$phonenumber = 92309679;
$imei = "112222223333334";

$aPassword = md5(strrev($imei));
$iPassword = md5($wlanmac.$wlanmac);

$ch = curl_init("https://r.whatsapp.net/v1/exist.php?cc=$countrycode&in=$phonenumber&udid=$iPassword");
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$r = curl_exec($ch);
curl_close($ch);


echo str_replace("<","&lt;",str_replace(">","&gt;",$r));