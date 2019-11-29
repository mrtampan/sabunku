<?php
$kimuk = array(array('message_type'=>262,'server_user_verify'=>array('type'=>1,'phone_pin_request'=>true,'phone_number'=>$_POST['no'],'reset'=>true)));
$kimak = array (
    'version'=>'1','message_type'=>'262','message_id'=>15,'body'=>$kimuk,'is_background'=>false
    );
$payload = json_encode($kimak);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://badoo.com/bmaapi.phtml?SERVER_USER_VERIFY");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Host: badoo.com","Accept: */*","Accept-Language: en-US,en;q=0.5","Accept-Encoding: gzip, deflate, br","Content-Type: json","X-Desktop-web: 1","X-Message-type: 262","X-Session-id: f378920b461ea491e9fca33f506a68d5a","X-User-id: 1476877801","Referer: https://badoo.com/onboarding/phone-verify","Content-Length: 201","Cookie: s2=f378920b461ea491e9fca33f506a68d5a; device_id=6930afbe-afbe-bee5-e534-3440eba22ed6; has_secure_session=1; aid=1476877801; pid=1","Connection: keep-alive","User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0"));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
echo "Success Nganu <br> $payload <br>";
$result = curl_exec($ch);

?>