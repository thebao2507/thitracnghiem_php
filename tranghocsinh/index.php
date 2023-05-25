<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thi Trắc Nghiệm</title>
    <link rel="stylesheet" href="assets/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <div class="main">
        <!--slider-->
        <div class="slider">
            <div class="sliders">
                <!--radio-->
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <!--img-->
                <div class="slide first">
                    <img src="./assets/img/study5.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img/study7.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img/study6.jpg" alt="">
                </div>
                <!--auto-->
                <div class="nav-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                </div>
            </div>
            <!---->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
            </div>
        </div>
        <!----->
        <!--phần header-->
        <div id="header">
            <ul class="nav">
                <li>
                    <a href="">Trang Chủ</a>
                </li>
                <li>
                    <a href="thi_that/dangnhapthi.php">Thi</a>
                </li>
                <li>
                    <a href="thithu/laydotthithu.php">Luyện Thi Thử</a>
                </li>
                <li>
                    <a href="onthi/onthidiali.php">Ôn tập</a>
                </li>
                <li>
                    <a href="taikhoan/xemthongtin.php">Tài khoản</a>
                </li>
                <li>
                    <img src="../img/img1.jpg" alt="" width="40px" height="40px" style="padding-right: 10px; padding-left: 10px; border-radius: 50%; transform: translateY(-24px);">
                    <div>
                        <h4 style="font-size: 17px; font-weight:500; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Họ Tên:
                            <?php if(isset($_SESSION['tenhocsinh'])) echo $_SESSION['tenhocsinh'] ?> </h4>
                        <h4 style="font-size: 17px; font-weight:500; padding: bottom 4px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            MAHS:
                            <?php if(isset($_SESSION['mahocsinh'])) echo $_SESSION['mahocsinh'] ?>
                        </h4>
                        <p style="transform: translate(120px, -46px); margin-left: 80px; margin-right: 120px;"><a href="#" onclick="log_out()" class= "exit" style="color:black; padding-top:5px; padding-bottom:5px;">Đăng xuất!
                            <script>
                                function log_out(){
                                    window.location.href = "../huysession.php";
                                }
                                
                            </script>
                        </a></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!--footer-->
    <div id="footer">
        <p id="senten">Liên Hệ chúng tôi</p>
        <div class="footer-item-1">
            <p>Mạng Xã Hội</p>
            <ul class="social">
                <li>
                    <a href="">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-instalod"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-brands fa-instagram-square"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-screen-users"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="footer-item-2">
            <p>Thông Tin Liên Hệ</p>
            <ul class="infor">
                <li>
                    <a href="">
                        <i class="fa-solid fa-phone"> +1 1 1 1 1 1 1 1 1 1</i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-envelope">  abcnwquw@gmail.com</i>
                    </a>
                </li>
            </ul>
        </div>
    </div>


    <script type="text/javascript">
        var count = 1;
        setInterval(function() {
            document.getElementById('radio' + count).checked = true;
            count++;
            if (count > 3) {
                count = 1;
            }
        }, 3000)
    </script>
</body>

</html>