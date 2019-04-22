<?php



require "vendor/autoload.php";

$access_token = 'xgSfHeINj8YpcpM4KuWCu367JHMYru2cxC9kxY9iXQG';

$channelSecret = '+2ZQJoMcXfR38L+IQZDFR58776PYOOOa2tldpbsixa5EtU0piBoYY4bIXnFEbDA6vXSYQqTbLF6MOGyH32ch9HYzZ/XnG4HBgdHHleklq2prFBDEccNDhqfFb6cDNZN+/GjLglgK4o956d1YdQVMUQdB04t89/1O/w1cDnyilFU=';

$pushID = 'U6e6a50f10c56bd642a22a4d91259b9f0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







