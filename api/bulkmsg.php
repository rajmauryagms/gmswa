<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => '192.168.0.103:8000/chats/send-bulk?id=hello',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'[
    {
        "receiver": "917985023504", 
        "message": {
            "text": "hi! how are you?"
        }
    },
    {
        "receiver": "917570046111",
        "delay": 6000, 
        "message": {
            "text": "i\'m fine, thank you!"
        }
    }
]',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
