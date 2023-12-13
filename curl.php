<?php

$curl = curl_init();

// $url    = 'http://alt.office.gilitransfers.com/api/get-fast-boat-order';
$url    = 'https://api.sandbox.gilitransfers.com/wishes/messages';
curl_setopt_array($curl, array(
    CURLOPT_URL => $url,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_RETURNTRANSFER => true,
));

$response       = curl_exec($curl);
// $result         = json_decode($response, true);
curl_close($curl);
return $response;

?>
