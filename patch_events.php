<?php
	$data = '
			{
				"id": "ad10314a-abc2-487a-9551-dce3b1220ce8",
				"title": "Neuköllner Blechblasensemble",
				"slug": "nms-neukollner-blechblasensemble",
				"picture": "https://rausgegangen.s3.amazonaws.com/bCuhGkkOQDe9MCb1PROk_O2KMLYGTZOwy5PjWPrLw_c7b826b684c140a9a9c60bced2a1fb97.base.image.jpg",
				"category": "b4da25a8-0c55-4035-bcd3-813d33af9a27",
				"city": "berlin",
				"organizer_description": null,
				"location": "de2a71ac-a05a-4102-bb53-9c3d48f345a3",
				"price": null,
				"min_price": null,
				"max_price": null,
				"price_description": null,
				"ticket_url": null,
				"video_url": null,
				"published": false,
				"shows": [],
				"mapping_id": null
			}
			';
	$url = "https://api.zentrale.rausgegangen.de/v2/events/?api_key=*****";
	$headers = array('Content-Type: application/json');
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
	$response = curl_exec($curl);
	curl_close($curl);
	
header('Content-Type: application/json; charset=utf-8');
print $response;