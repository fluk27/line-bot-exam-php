<?php


$access_token = 'etm3cPn4oxw/p0hkrsbYx2/rc3G1UuhFWcS37hGymegbT52hHJYlpO2ovFEp7IvsvXSYQqTbLF6MOGyH32ch9HYzZ/XnG4HBgdHHleklq2oWBYWhfuBIT8BNmAJEVKSxMJf2IG8a5Xtnw03w0aLsQAdB04t89/1O/w1cDnyilFU=';

$userId = 'U6e6a50f10c56bd642a22a4d91259b9f0';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

