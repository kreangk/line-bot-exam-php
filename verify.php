<?php
$access_token = 'Kv3HpQDne5CosW0hTmIWNoBtT8CuZFUjeboZFoqzRc6Pth4RyV3+9ER7nJSDxh3Qt1LBAka+Fez0PXn7kZuZi5cN/WgNlZekEv8c4ip+RYIDajue++oxCW5nOC2OJOYH5IEVilyYer1/8u3Yc5znMQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
