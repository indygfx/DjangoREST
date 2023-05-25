<?php
$query 	= file_get_contents('https://fete.nerdline.online/wp-content/plugins/nms-openagenda/_data/locations_rgv2.json');
$data 	= json_decode($query);
$url = 'https://api.zentrale.rausgegangen.de/v2/locations/?api_key=****';
$token = 'QRq4tdcL8BhCEiXwZQmeDxdhlbSFcEc2';
$headers = ['Content-Type: application/json', 'User-Agent: FETE DEV INDY', 'Authorization: ' . $token];
$url = 'https://api.zentrale.rausgegangen.de/v2/locations/';
//$data = array('api_key' => 'ZzriUzE', 'slug' => 'welcome', 'recipient' => 'root@local.host');
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data['0']),
    )
);

file_get_contents($url, false, stream_context_create($options));