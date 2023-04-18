<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.trello.com/1/cards?name=trello&desc=test&idList=your_list_id&urlSource=trello.com&&key=your_api_key&token=your_api_token',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Cookie: dsc=2544a16b2ae3ab182ca0cf5320894b183a7fc25ae6017d0248088af0ca972128'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
