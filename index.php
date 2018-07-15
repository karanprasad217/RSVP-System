<?php

// Turn off all error reporting
error_reporting(0);
?>
<?php
require 'vendor/autoload.php';

date_default_timezone_set('UTC');
use Aws\DynamoDb\DynamoDbClient;
use Aws\DynamoDb\Exception\DynamoDbException;
$IAM_KEY = 'AKIAIMP6LVXBL2QTMECA';
$IAM_SECRET = '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';
try {
$dynamoc = DynamoDbClient::factory(
      array (
    'region'   => 'ap-south-1',
	'credentials.cache' => false,
    'validation' => true,
    'version'  => 'latest'
			) 
	); //factory
}  //try
catch (Exception $e) {
               
                die("Error: " . $e->getMessage());
        }
?>
<?php echo"<div style='width:20px; height:20px; background:#F00; position:absolute; display:block; top:0; left:0; -webkit-clip-path: polygon(0 0, 0% 100%, 100% 0);clip-path: polygon(0 0, 0% 100%, 100% 0);'></div>"?>
<?php echo"<div style='width:20px; height:20px; background:#F00; position:absolute; display:block; top:0; right:0; -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%);clip-path: polygon(0 0, 100% 0, 100% 100%);'></div>"?>
<?php echo"<div style='width:20px; height:20px; background:#F00; position:absolute; display:block; bottom:0; right:0; -webkit-clip-path: polygon(100% 0, 100% 100%, 0 100%);clip-path: polygon(100% 0, 100% 100%, 0 100%);'></div>"?>
<?php echo"<div style='width:20px; height:20px; background:#F00; position:absolute; display:block; bottom:0; left:0; -webkit-clip-path: polygon(0 100%, 100% 100%, 0 0);clip-path: polygon(0 100%, 100% 100%, 0 0);'></div>"?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="final.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body{
background-color: #fff; 
background-image: 
linear-gradient(90deg, transparent 79px, #abced4 79px, #abced4 81px, transparent 81px),
linear-gradient(#eee .1em, transparent .1em);
background-size: 100% 1.2em;
	}
#main:hover{
	border:solid 1px #000;
	position:absolute;
	-webkit-box-shadow: 0px 0px 10px 3px rgba(255,0,208,1);
-moz-box-shadow: 0px 0px 10px 3px rgba(255,0,208,1);
box-shadow: 0px 0px 10px 3px rgba(255,0,208,1);
		}
input[type=text] {
	margin-top:4px;
	margin-left:4px;
    border: none;
	outline:none;
	height:30px;
	width:200px;
	border-bottom: 2px solid #FFF;
	padding: 0px 20px;
	text-align:center;
	font-family: 'IBM Plex Mono', monospace;
	letter-spacing:8px;
	color:blue;
	border-radius:4px;
	font-weight:700;
	%text-shadow: 2px 2px #FF0000;
}
input[type=text]:hover{
	background:#999;
	color:#FFF;
	border-bottom: 2px solid cyan;
	}
input[type=text]:focus{
	background:#93F;
	color:#FF0;
	border-bottom: 2px solid cyan;
	}
input[type=submit]{
	background:#F00;
	width:40%;
	border:none;
	outline:none;
	padding-bottom:8px;
	letter-spacing:5px;
	color:#FFF;
	margin-left:150px;
	}
input[type=submit]:hover{
	border-bottom:solid 2px #30F;	
	}	
/* cyrillic-ext */
@font-face {
  font-family: 'IBM Plex Mono';
  font-style: normal;
  font-weight: 400;
  src: local('IBM Plex Mono'), local('IBMPlexMono'), url(https://fonts.gstatic.com/s/ibmplexmono/v2/-F63fjptAgt5VM-kVkqdyU8n1iIq129k.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'IBM Plex Mono';
  font-style: normal;
  font-weight: 400;
  src: local('IBM Plex Mono'), local('IBMPlexMono'), url(https://fonts.gstatic.com/s/ibmplexmono/v2/-F63fjptAgt5VM-kVkqdyU8n1isq129k.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'IBM Plex Mono';
  font-style: normal;
  font-weight: 400;
  src: local('IBM Plex Mono'), local('IBMPlexMono'), url(https://fonts.gstatic.com/s/ibmplexmono/v2/-F63fjptAgt5VM-kVkqdyU8n1iAq129k.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'IBM Plex Mono';
  font-style: normal;
  font-weight: 400;
  src: local('IBM Plex Mono'), local('IBMPlexMono'), url(https://fonts.gstatic.com/s/ibmplexmono/v2/-F63fjptAgt5VM-kVkqdyU8n1iEq129k.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'IBM Plex Mono';
  font-style: normal;
  font-weight: 400;
  src: local('IBM Plex Mono'), local('IBMPlexMono'), url(https://fonts.gstatic.com/s/ibmplexmono/v2/-F63fjptAgt5VM-kVkqdyU8n1i8q1w.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*for comment*/
/* latin */
@font-face {
  font-family: 'Faster One';
  font-style: normal;
  font-weight: 400;
  src: local('Faster One'), local('FasterOne-Regular'), url(https://fonts.gstatic.com/s/fasterone/v8/H4ciBXCHmdfClFb-vWhf-LyYhw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/*for hindo*/
/* devanagari */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  src: local('Teko Regular'), local('Teko-Regular'), url(https://fonts.gstatic.com/s/teko/v7/LYjNdG7kmE0gfaJ9pRtB.woff2) format('woff2');
  unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
}
/* latin-ext */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  src: local('Teko Regular'), local('Teko-Regular'), url(https://fonts.gstatic.com/s/teko/v7/LYjNdG7kmE0gfa19pRtB.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Teko';
  font-style: normal;
  font-weight: 400;
  src: local('Teko Regular'), local('Teko-Regular'), url(https://fonts.gstatic.com/s/teko/v7/LYjNdG7kmE0gfaN9pQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v7/6xKtdSZaM9iE8KbpRA_hJFQNcOM.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v7/6xKtdSZaM9iE8KbpRA_hJVQNcOM.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: local('Quicksand Regular'), local('Quicksand-Regular'), url(https://fonts.gstatic.com/s/quicksand/v7/6xKtdSZaM9iE8KbpRA_hK1QN.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
.go { transition: all .2s cubic-bezier(0,1.22,.94,-0.51); }
.go:hover { transform: scale(1.3); }
.tooltip1{
    background: black !important;
    font-size:13px;
    height:1%;
    width:6%;
    padding:15px !important;
    color:#fff !important; 
    z-index: 100;
    border: 2px solid white;
	font-weight:700;
	font-family: 'Josefin Sans', sans-serif;
	cursor:crosshair;
}
/* latin */
@font-face {
  font-family: 'Libre Barcode 128 Text';
  font-style: normal;
  font-weight: 400;
  src: local('Libre Barcode 128 Text Regular'), local('LibreBarcode128Text-Regular'), url(https://fonts.gstatic.com/s/librebarcode128text/v5/fdNv9tubt3ZEnz1Gu3I4-zppwZ9CWZ16Z0w5QVrS6Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<div id="jaddu" hidden="hidden"></div>
<div id="main" style="background:#F00; width:85%; height:40px; left:1.5px; position:absolute; top:45%; margin-top:-10px; ">
<?php
$code = array("85043379", "05864926", "80448097", "70536707","26518097","49097459","04097459","55624609","90223607","65064007","03343607","46023219","40536707","10041669","65670987","26130768","25695158","40467698");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['jackass']) && in_array($_POST['jackass2'], $code)){
$needy = $_POST['jackass'];
session_start();
//$_SESSION['user_start'] = time();
$_SESSION['boring'] = $needy;
}
else {
	$error="You are an unlucky person. <b>Nothing</b> can be done.";
	}
}
?>

<form method="post" name="Horn">
<input id="che1" name="jackass" type="text" maxlength="10" spellcheck="false" autocomplete="off" autocorrect="off" required="required" placeholder="Message_Title" />
<input id="che2" name="jackass2" type="text" maxlength="8" spellcheck="false" autocomplete="off" autocorrect="off" required="required" placeholder="Chutiaap"/>
<script type="text/javascript">
document.write('<input type="submit" id="clic" value="Click Me" onclick="return horn();"  name="subi" />');
</script>
</form>
</div>
<script type="text/javascript">
    function horn()
    {
        var aa=document.forms["Horn"]["jackass"].value;
        var bb=document.forms["Horn"]["jackass2"].value;
        if (aa==null || aa=="",bb==null || bb=="")
        {
            //alert("you are in");
			document.getElementById("bull").src="bullr.svg";
			var t = document.createTextNode("Fill Me Neatly Or Your Arse Is Gone");
			document.getElementById("para").appendChild(t);
            return false;
        }
    }
</script>
<script>
var ab ='j';
$("#che1").keyup(function(){
	var tx = $("#che1").val();
    if(ab != $("#che1").val().substr(0, 1)){
		alert("Sorry! You were not invited!!");
		}
});
</script>
<script>
var ac = '2';
$("#che1").keyup(function(){
	var tx = $("#che1").val();
    var res = tx.charAt(8);
	if (res == ac ){
		alert("Sorry! You were not invited!!");
		}
});
</script>

<script>
document.onkeydown = fkey;
document.onkeypress = fkey;
document.onkeyup = fkey;

var wasPressed = false;

function fkey(e){
        e = e || window.event;
       if( wasPressed ) return; 

        if (e.keyCode == 116) {
             window.location.href = 'http://localhost/temic/party/index.php';
            wasPressed = true;
        }
 }
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#jaddu").load('http://13.126.4.113/fill.php')
}, 1000);
});
</script>
<script>
$(document).ready(function(){
setInterval(function(){
$("#jaggo").load('http://13.126.4.113/forme.php')
}, 1000);
});
</script>
<p style="margin-left:1100px;font-family: 'Quicksand', sans-serif; font-weight:500;"><?php echo $error; ?></p>
<div><center>
<img src="bull.svg" width="100" height="100" id="bull" class="go" style="margin-top:10px;" title="bellow bellow">
<!--<div id="bygo" hidden="">--><p id="para" style="font-family: 'Libre Barcode 128 Text', cursive; font-size:70px; margin-top:5px;" ></p><!--</div>-->
<!--<script>
$("#clic").on("click", function (e) {
	$("#bygo").fadeIn();
	});
</script>-->
</center>
</div>
<?php
$iterator = $dynamoc->getIterator('Query', array(
    'TableName'     => 'partysage',
    'KeyConditions' => array(
        'UserId' => array(
            'AttributeValueList' => array(
                array('S' => $needy)
            ),
            'ComparisonOperator' => 'EQ'
        )
    )
));
// Each item will contain the attributes we added
foreach ($iterator as $item) {
   /* // Grab the time number value
    echo "Likes :".$item['Likes']['N'] . "\n"."<br \>";
	echo "Dislikes :".$item['DisLikes']['N'] . "\n"."<br \>";
	echo "Views :".$item['Views']['N'] . "\n"."<br \>";
	*/
}
?>
<center>
<img src="bull1.svg" width="500" height="450" style="margin-top:-35px;"/>
<img src="bull2.svg" width="500" height="450" style="margin-top:-35px;"/>
</center>
<div style="top:0px; position:absolute; font-family: 'Teko', sans-serif; font-size:50px; letter-spacing:2px;">
<b> मस्ती करेंगे on : <b style="color:#0C3;">4</b><sup style="font-size:18px;">th</sup> of April 😂</b>
</div>
<div style="margin-left:483px; margin-top:-96px;">
<img src="spe1.svg" width="200" height="200" onmouseover="iwant(this);" onMouseOut="you(this);"  />
<p id="main2" style="z-index:+100;position:absolute; font-size:18px; font-weight:400;  border:solid 2px red; height:70px; width:130px;padding:5px; padding-bottom:5px; margin-top:-125px; margin-left:30px; font-family: 'Faster One', cursive;"><?php echo $item['Message']['S'] . "\n"; ?></p>
</div>
<div id="jaggo" style="margin-left:1330px; margin-top:-700px;"></div>
<script>
function iwant(element) {
    element.setAttribute("src", "spe2.svg");
}
function you(element){
	element.setAttribute("src", "spe1.svg");
	}	
</script>
</body>
</html>
