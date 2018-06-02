<?php

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('Kv3HpQDne5CosW0hTmIWNoBtT8CuZFUjeboZFoqzRc6Pth4RyV3+9ER7nJSDxh3Qt1LBAka+Fez0PXn7kZuZi5cN/WgNlZekEv8c4ip+RYIDajue++oxCW5nOC2OJOYH5IEVilyYer1/8u3Yc5znMQdB04t89/1O/w1cDnyilFU=', $textMessageBuilder);
if ($response->isSucceeded()) {
    echo 'Succeeded!';
    return;
}

// Failed
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
    
