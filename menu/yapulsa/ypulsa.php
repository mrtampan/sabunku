<?php

$no = $_POST["no"];
$loop = $_POST["loop"];
$data = array("phonenumber" => $no);
$post = json_encode($data);
$x = 0;
while($x < $loop) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://gmapi.yapulsa.com:443/api/v1/alphapay/user/add_new_username_only");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-IMEI: 0", "X-APP: Android 2.6.0", "source: Android 2.6.0", "Content-Type: application/json; charset=utf-8"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERAGENT, "okhttp/3.4.1");
curl_exec($ch);
    $x++;
    
}
    echo "Sukses dung";

?>