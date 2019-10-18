<?php

$mob 		=  $_GET['from'];
$text 		=  $_GET['body'];
$datetime 	=  $_GET['dt'];

$service_url = "http://webhook.site/b3f507ae-9d79-46b7-b703-d56d829c425e?msisdn=".urlencode($mob)."&text=".urlencode($text)."&datetime=".urlencode($datetime);

$curl = curl_init($service_url);
$curl_post_data_json = json_encode($curl_post_data);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$curl_response = curl_exec($curl);
curl_close($curl);
echo 'Inserted';
?>