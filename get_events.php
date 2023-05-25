<?php 
$output = '';
$query 	= file_get_contents('https://fete.nerdline.online/wp-content/plugins/nms-openagenda/_data/events_rgv2.json');
$data 	= json_decode($query);

$url = 'https://api.zentrale.rausgegangen.de/v2/events/?api_key=******';

//$data1 = array('api_key' => 'ZzriUzE', 'slug' => 'welcome', 'recipient' => 'root@local.host');
$data = array('slug'=>'nms-neukollner-blechblasensemble');

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);
header('Content-Type: application/json; charset=utf-8');
print $response;