<?php



require "vendor/autoload.php";

$access_token = 'Kv3HpQDne5CosW0hTmIWNoBtT8CuZFUjeboZFoqzRc6Pth4RyV3+9ER7nJSDxh3Qt1LBAka+Fez0PXn7kZuZi5cN/WgNlZekEv8c4ip+RYIDajue++oxCW5nOC2OJOYH5IEVilyYer1/8u3Yc5znMQdB04t89/1O/w1cDnyilFU=';

$channelSecret = '40d44f32a7320831e1b5e08f424c9480';

$pushID = 'U5599ad410011ee8c57de3068fdfa756d';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







