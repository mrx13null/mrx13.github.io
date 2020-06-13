<!DOCTYPE html>
<?php
session_start();
$a = rand(1, 20);
$b = rand(1, 20);
$c = $a + $b;
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
        <title>SPAM BY HAS</title>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="css/coming-soon.min.css" rel="stylesheet">
    </head>
    <body>
        <style>
            body {
                cursor: none;
            }

            .wrap {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                overflow: hidden;
            }

            #ball {
                width: 50px;
                height: 50px;
                background: none;
                border: 3px solid grey;
                border-radius: 50%;
                position: absolute;
                left: 50%;
                top: 50%;
                margin: -10px 0 0 -10px;
                pointer-events: none;
                z-index: 999999;
            }

            .login1:hover {
            }

            .w3-display-middle {
                border-color: red;
                text-align: center;
            }

            body,h1 {
                font-family: "Raleway", sans-serif
            }

            body, html {
                height: 100%
            }

            .bgimg {
                background-image: url('');
                min-height: 100%;
                background-position: center;
                background-size: cover;
            }
        </style>
        <body onload="followMouse();">
            <div class="wrap">
                <div id="ball"></div>
            </div>
            <script type="text/javascript">

                var $ = document.querySelector.bind(document);
                var $on = document.addEventListener.bind(document);

                var xmouse, ymouse;
                $on('mousemove', function(e) {
                    xmouse = e.clientX || e.pageX;
                    ymouse = e.clientY || e.pageY;
                });

                var ball = $('#ball');
                var x = void 0
                  , y = void 0
                  , dx = void 0
                  , dy = void 0
                  , tx = 0
                  , ty = 0
                  , key = -1;

                var followMouse = function followMouse() {
                    key = requestAnimationFrame(followMouse);

                    if (!x || !y) {
                        x = xmouse;
                        y = ymouse;
                    } else {
                        dx = (xmouse - x) * 0.2;
                        dy = (ymouse - y) * 0.2;
                        if (Math.abs(dx) + Math.abs(dy) < 0.1) {
                            x = xmouse;
                            y = ymouse;
                        } else {
                            x += dx - 2.5;
                            y += dy - 2.5;
                        }
                    }
                    ball.style.left = x + 'px';
                    ball.style.top = y + 'px';
                };
            </script>
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="mp4/bg.mp4" type="video/mp4">
            </video>
            <div class="masthead">
                <div class="masthead-bg"></div>
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 my-auto">
                            <div class="masthead-content text-white py-5 py-md-0">
                                <h1 class="mb-3">Spam SMS !</h1>
                                <p class="mb-5">
                                    Đây là một trương trình spam
										SMS được 
                                   <strong> HAS </strong>tạo ra.
                                </p>
								 <p class="mb-5">
                                    Học toán nào  <strong>
									<?php
									
									echo "  $a + $b = ";
									$c = $a + $b;
									$_SESSION["captcha1"]=$c;
									//echo $_SESSION["captcha1"];

									?>
									</strong>
                                    
                                </p>
                                <div class="input-group input-group-newsletter">
                                    <form action="spam.php" method="POST">
										<input name="captcha" style='width:160%;'  class="form-control" placeholder="Enter captcha..." aria-label="Enter captcha..." aria-describedby="basic-addon" required>
                                        <br>
                                        <input name="phone" style='width:160%;'  class="form-control" placeholder="Enter Phone..." aria-label="Enter Phone..." aria-describedby="basic-addon" required>
                                        <br>
                                        <input name="code" style='width:160%;'  class="form-control" placeholder="Enter Code..." aria-label="Enter Code..." aria-describedby="basic-addon" required>
                                        <br>
                                        <div class="input-group-append">
                                            <button  id='btn' class="btn btn-secondary" type="submit">Start spam</button>
                                    </form>
                                </div>
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
