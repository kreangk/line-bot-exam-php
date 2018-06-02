<?php


$access_token = 'Kv3HpQDne5CosW0hTmIWNoBtT8CuZFUjeboZFoqzRc6Pth4RyV3+9ER7nJSDxh3Qt1LBAka+Fez0PXn7kZuZi5cN/WgNlZekEv8c4ip+RYIDajue++oxCW5nOC2OJOYH5IEVilyYer1/8u3Yc5znMQdB04t89/1O/w1cDnyilFU=';

$userId = 'U5599ad410011ee8c57de3068fdfa756d';

$groupId = 'Cd6988208621ff6acb9b2be60d320b0e5';

/**
*$url = 'https://api.line.me/v2/bot/profile/'.$userId;

*$url = 'https://api.line.me/v2/bot/group/Cd6988208621ff6acb9b2be60d320b0e5/member/'.$userId;
*$url = 'https://api.line.me/v2/bot/group/C736d844d8deb0e75256f7fcf6b388ff1/members/ids';
*/

$url = 'https://api.line.me/v2/bot/group/'.$groupId.'/member/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

