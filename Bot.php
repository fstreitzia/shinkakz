<?php
@ini_set("output_buffering", "Off");
@ini_set('implicit_flush', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('max_execution_time',1200);
header( 'Content-type: text/html; charset=utf-8' );

//memanggil file yg diperlukan
include 'config.php';
include 'instagram.php';

$ua = generate_useragent();
		$devid = generate_device_id(true);
        $post_login = json_encode([
            'phone_id' => generate_guid(true),
            '_csrftoken' => get_csrftoken(),
            'username' => $username,
            'guid' => generate_guid(true),
            'device_id' => generate_device_id(true),
            'password' => $password,
            'login_attempt_count' => 0
      ]);
        $login = proccess(1, $ua, 'accounts/login/', 0, hook($post_login));
		$data = json_decode($login[1]);
		if($data->status<>ok)
			print 'Username/Password Salah! (Login Gagal)<br>';
		else{
			preg_match_all('%Set-Cookie: (.*?);%',$login[0],$d);$cookie = '';
			for($o=0;$o<count($d[0]);$o++)$cookie.=$d[1][$o].";";
			print 'Login Sukses<br>';
		}



// Configurasi BotKomen
$botKOMEN = False; //'true' untuk ON 'false' untuk OFF
$comment_text = "Kangen mantan gan? sama gue juga:("; //isi komentar

//***************** Mengambil Feed Timeline  ****************************************
echo "Searching Post TimeLine for like <br/>";
$feed = proccess(1, $ua, 'feed/timeline/?min_id=', $cookie);
$obj = json_decode($feed[1]);
foreach ($obj->items as $items) {
	$has_liked = $items->has_liked;
	if($has_liked == False) {
		//************* Like/Unlike Media ****************
		$media_id = $items->id;
		$user = " @". $items->user->username;
		$action = 'like'; //like, unlike
		$data = '{"media_id":"'.$media_id.'"}';
		$sig = GenerateSignature($data);
		$new_data = 'signed_body='.$sig.'.'.urlencode($data).'&ig_sig_key_version=4';
		// $like = SendRequest('media/'.$media_id.'/'.$action.'/', true, $new_data, $agent, true);
		$like = proccess(1, $ua, 'media/'.$media_id.'/'.$action.'/', $cookie, $new_data);
		//********************************************
		echo "Ngelike Status Artis @" . $items->user->username . " ./RabizaEcsel<br/>";
	} else {
		echo "Ngelike Status Artis @" . $items->user->username . " ./RabizaEcsel<br/>";
	}
	if($botKOMEN = False){
		$comment_text = $comment_text . $user;
		$data = '{"comment_text":"'.$comment_text.'"}';
		$sig = GenerateSignature($data);
		$new_data = 'signed_body='.$sig.'.'.urlencode($data).'&ig_sig_key_version=4';
		$post_comment =proccess(1, $ua, 'media/'.$media_id.'/comment/', $cookie, $new_data);
		$obj3 = json_decode($post_comment[1]);
		print_r($post_comment);
		if ($obj3->status == "ok") {
			echo "Komen Berhasil<br/>";
			sleep(2); //Takut kena blokir komen :v
		} else {
			echo "Gagal komen<br/>";
		}
	}
	flush();
	ob_flush();
}
//****************************************************************************
echo "Sukses Semua Bro!<br/>";
echo "-Powered By HilihKhintil-";
