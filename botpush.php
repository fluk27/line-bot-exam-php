<?php



require "vendor/autoload.php";

$access_token = 'etm3cPn4oxw/p0hkrsbYx2/rc3G1UuhFWcS37hGymegbT52hHJYlpO2ovFEp7IvsvXSYQqTbLF6MOGyH32ch9HYzZ/XnG4HBgdHHleklq2oWBYWhfuBIT8BNmAJEVKSxMJf2IG8a5Xtnw03w0aLsQAdB04t89/1O/w1cDnyilFU=
';

$channelSecret = 'fd2831d734e43f8c2a2c150e0dea1336';

$pushID = 'U6e6a50f10c56bd642a22a4d91259b9f0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







