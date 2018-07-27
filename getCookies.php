<?php
//memanggil file yg diperlukan
include 'config.php';
include 'instagram.php';

// LOG IN
$data = '{"device_id":"'.$device_id.'","guid":"'.$guid.'","username":"'.$username.'","password":"'.$password.'","Content-Type":"application/x-www-form-urlencoded; charset=UTF-8"}';
$sig = GenerateSignature($data);
$data = 'signed_body='.$sig.'.'.urlencode($data).'&ig_sig_key_version=4';
$login = SendRequest('accounts/login/', true, $data, $agent, false);

if(strpos($login[1], "Sorry, an error occurred while processing this request.")) {
    echo "Request failed, there's a chance that this proxy/ip is blocked";
} else {			
	if(empty($login[1])) {
		echo "Empty response received from the server while trying to login";
	} else {			
		// Decode the array that is returned
		$obj = @json_decode($login[1], true);

		if(empty($obj)) {
			echo "Could not decode the response: ".$body;
		} else {
			echo "Cookies saved in cookies.txt";
		}
	}   
}