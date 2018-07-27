<?php
//cURL untuk memanggil dan mengambil hasil API
set_time_limit(0);
ignore_user_abort(1);
	function proccess($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0){
		$url = $ighost ? 'https://i.instagram.com/api/v1/' . $url : $url;
      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 20);
      if($proxy) curl_setopt($ch, CURLOPT_PROXY, $proxy);
      if($userpwd) curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
      if($is_socks5) curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
      if($httpheader) curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
      curl_setopt($ch, CURLOPT_HEADER, 1);
      if($cookie) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
      if ($data):
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
      endif;
      $response = curl_exec($ch);
      $httpcode = curl_getinfo($ch);
      if(!$httpcode) return false; else{
            $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            $body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
            curl_close($ch);
            return array($header, $body);
		}
	}
function ava_hook($bound, $csrf, $file_url) {
		$eol = "\r\n";
		$body = '';
		$body.= '--'.$bound. $eol;
		$body.= 'Content-Disposition: form-data; name="_csrftoken"' . $eol . $eol;
		$body.= $csrf . $eol;
		$body.= '--'.$bound. $eol;
		$body.= 'Content-Disposition: form-data; name="post_pic"; filename="post_pic"'. $eol;
		$body.= 'Content-Type":"application/x-www-form-urlencoded'. $eol;
		$body.= 'Content-Transfer-Encoding: binary'. $eol. $eol;
		$body.= file_get_contents($file_url) . $eol;
		$body.= '--'.$bound .'--' . $eol. $eol;
		return $body; 
	}
function dill($ighost, $useragent, $url, $cookie = 0, $data = 0, $httpheader = array(), $proxy = 0, $userpwd = 0, $is_socks5 = 0){
		$url = $ighost ? 'https://api.instagram.com/v1/' . $url : $url;
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 20);
		if($proxy) curl_setopt($ch, CURLOPT_PROXY, $proxy);
		if($userpwd) curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpwd);
		if($is_socks5) curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		if($httpheader) curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
		curl_setopt($ch, CURLOPT_HEADER, 1);
		if($cookie) curl_setopt($ch, CURLOPT_COOKIE, $cookie);
		if ($data):
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		endif;
		$response = curl_exec($ch);
		$httpcode = curl_getinfo($ch);
		if(!$httpcode) return false; else{
			$header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			$body = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
			curl_close($ch);
			return array($header, $body);
		}
	}
	function generate_useragent($sign_version = '6.22.0'){
		return 'Instagram 10.8.0 Android (18/4.3; 320dpi; 720x1280; Xiaomi; HM 1SW; armani; qcom; en_US)';
	}
	function hook($data) {
		$hash = hash_hmac('sha256', $data, '68a04945eb02970e2e8d15266fc256f7295da123e123f44b88f09d594a5902df');
      return 'ig_sig_key_version=4&signed_body='.$hash.'.'.urlencode($data);
	}
	function generate_device_id($seed){
		$volatile_seed = filemtime(__DIR__);
      return 'android-'.substr(md5($seed.$volatile_seed), 16);
	}
	function get_csrftoken(){
      $fetch = proccess('si/fetch_headers/', null, null);
      $header = $fetch[0];
      if (!preg_match('#Set-Cookie: csrftoken=([^;]+)#', $fetch[0], $token)) {
            return json_encode(array('result' => false, 'content' => 'Missing csrftoken'));
      } else {
            return substr($token[0], 22);
      }
}
	function generate_guid($tipe = 0){
		$uuid = sprintf(
        '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff)
    );

    return $tipe ? $uuid : str_replace('-', '', $uuid);
	}

//GenerateGuid
function GenerateGuid() {
	return sprintf('%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0x0fff) | 0x4000,
        mt_rand(0, 0x3fff) | 0x8000,
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff),
        mt_rand(0, 0xffff));
}

//Generate UserAgent
function GenerateUserAgent() {	
	$resolutions = array('720x1280', '320x480', '480x800', '1024x768', '1280x720', '768x1024', '480x320');
	$versions = array('GT-N7000', 'SM-N9000', 'GT-I9220', 'GT-I9100');
	$dpis = array('120', '160', '320', '240');

	$ver = $versions[array_rand($versions)];
	$dpi = $dpis[array_rand($dpis)];
	$res = $resolutions[array_rand($resolutions)];
	
	return 'Instagram 4.'.mt_rand(1,2).'.'.mt_rand(0,2).' Android ('.mt_rand(10,11).'/'.mt_rand(1,3).'.'.mt_rand(3,5).'.'.mt_rand(0,5).'; '.$dpi.'; '.$res.'; samsung; '.$ver.'; '.$ver.'; smdkc210; en_US)';
}

//Generate Signature
function GenerateSignature($data) {
	return hash_hmac('sha256', $data, '68a04945eb02970e2e8d15266fc256f7295da123e123f44b88f09d594a5902df');
}

//Function get POST data Photo Profile
function GetPostData_profil($filename) {
	if(!$filename) {
		echo "The image doesn't exist ".$filename;
	} else {
		$post_data = array('profile_pic' => '@'.$filename);
		return $post_data;
	}
}

//Function get POST data Upload Image
function GetPostData($filename) {
	if(!$filename) {
		echo "The image doesn't exist ".$filename;
	} else {
		$post_data = array('device_timestamp' => time(), 
							'photo' => '@'.$filename);
		return $post_data;
	}
}

// Memanggil UserAgent
$agent = GenerateUserAgent();

// Memanggil GuID
$guid = GenerateGuid();

// mengSET Device ID
$device_id = "android-".$guid;
