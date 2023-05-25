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
                <a href="">Ôn tập</a>
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
    <div class = "wrapper">
        <div class = "logo">
            <img src="image/logo.jpg" alt="">
        </div>
        <div class = "menu">
            <ul class = "menu-list">
                <li><a href="onthidiali.php">ÔN THI</a></li>
                <li><a href="lythuyet10.php">LỚP 10</a></li>
                <li><a href="lythuyet11.php">LỚP 11</a></li>
                <li><a href="lythuyet12.php">LỚP 12</a></li>
            </ul>
        </div>
        <div class = "banner">
                <img src="image/banner dia li.png" alt="">
        </div>
        <div class = "content">
            <div class = "td">
                <p><b style = "font-size: 25px; color:rgb(135,206,235); width:1100px;">HỆ THỐNG KIẾN THỨC ÔN THI ĐỊA LÝ ĐẦY ĐỦ VÀ CHI TIẾT</b></p>
                <table  style="background-color:while; width:1100px;" alight = "center" boder = "1">
                    <tr><td><b style = "font-size: 25px; color:rgb(135,206,235) ">ĐỊA LÍ 11</b></td>
                        <ul>
                        <tr><td> &emsp;&emsp;A - Khái quát nền kinh tế - xã hội thế giới</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1101.html" target="_blank">Lý thuyết Bài 1: Sự tương quan về trình độ phát triển kinh tế - xã hội của các nhóm nước. Cuộc cách mạng khoa học và công nghệ hiện đại</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1102.html" target="_blank">Lý thuyết Bài 2: Xu hướng toàn cầu hóa, khu vực hóa kinh tế</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1103.html" target="_blank">Lý thuyết Bài 3: Một số vấn đề mang tính chất toàn cầu</td>     
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1104.html" target="_blank">Lý thuyết Bài 4: Một số vấn đề của châu lục và khu vực</td>    
                        <tr><td> &emsp;&emsp;B - Địa lí khu vực và quốc gia</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1105.html" target="_blank">Lý thuyết Bài 5: Hợp chủng quốc Hoa Kì</td>   
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1106.html" target="_blank">Lý thuyết Bài 6: Liên minh châu Âu (EU)</td>   
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1107.html" target="_blank">Lý thuyết Bài 7: Liên bang Nga</td>   
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1108.html" target="_blank">Lý thuyết Bài 8: Nhật Bản</td>   
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1109.html" target="_blank">Lý thuyết Bài 9: Cộng hòa nhân dân Trung Hoa (Trung Quốc)</td>   
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1110.html" target="_blank">Lý thuyết Bài 10: Khu vực Đông Nam Á</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1111.html" target="_blank">Lý thuyết Bài 11: Ô-xtrây-li-a</td>    
                        </ul>
                </table>
        </div> 
        <div id = "phancuoi2">
        </div>
    </div>
</body>
</html>