<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/css.css">
</head>

<body>
    <div id="dautrang">
        <ul class="dieuhuong">
            <li>
                <a href="../index.php">Trang Chủ</a>
            </li>
            <li>
                <a href="../thi_that/dangnhapthi.php">Thi</a>
            </li>
            <li>
                <a href="../thithu/laydotthithu.php">Luyện Thi Thử</a>
            </li>
            <li id="so2">
                <a href="#">Ôn tập</a>
            </li>
            <li>
                <a href="../taikhoan/xemthongtin.php">Tài khoản</a>
            </li>
            <li>
                <img src="../../img/img1.jpg" alt="" width="40px" height="40px"
                    style="margin-right:10px; border-radius: 50%; transform: translateY(-29.8px);">
                <div>
                    <h4
                        style="font-size: 17px; font-weight:500; margin-bottom:0; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        Họ Tên:
                        <?php if(isset($_SESSION['tenhocsinh'])) echo $_SESSION['tenhocsinh'] ?> </h4>
                    <h4
                        style="font-size: 17px; font-weight:500; padding: bottom 4px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                        MAHS:
                        <?php if(isset($_SESSION['mahocsinh'])) echo $_SESSION['mahocsinh'] ?>
                    </h4>
                    <p style="transform: translate(120px, -50px); margin-left: 80px; margin-right: 120px;"><a href="#"
                            onclick="log_out()" class="thoat"
                            style="color:black; padding-top:5px; padding-bottom:6px;">Đăng xuất!
                            <script>
                            function log_out() {
                                window.location.href = "../../huysession.php";
                            }
                            </script>
                        </a></p>
                </div>
            </li>
        </ul>
    </div>
    <div class="wrapper">
        <div class="logo">
            <img src="image/logo.jpg" alt="">
        </div>
        <div class="menu">
            <ul class = "menu-list">
                <li><a href="onthidiali.php">ÔN THI</a></li>
                <li><a href="lythuyet10.php">LỚP 10</a></li>
                <li><a href="lythuyet11.php">LỚP 11</a></li>
                <li><a href="lythuyet12.php">LỚP 12</a></li>
            </ul>

        </div>
        <div class="banner">
            <img src="image/banner dia li.png" alt="">
        </div>
        <div class="content">
            <div class="td">
                <p><b style="font-size: 25px; color:rgb(135,206,235) ">HỆ THỐNG KIẾN THỨC ÔN THI ĐỊA LÝ ĐẦY ĐỦ VÀ CHI TIẾT</b></p>
            </div>
            <div class="lythuyet">
                <ul>
                    <li><a href="lythuyet10.php">Tổng ôn các kiến thức Địa lý lớp 10 ôn thi THPT quốc gia</a></li>
                    <li><a href="lythuyet11.php">Tổng ôn các kiến thức Địa lý lớp 11 ôn thi THPT quốc gia</a></li>
                    <li><a href="lythuyet12.php">Tổng ôn các kiến thức Địa lý lớp 12 ôn thi THPT quốc gia</a></li>
                </ul>
            </div>
        </div>
        <footer>
        </footer>
    </div>
</body>

</html>