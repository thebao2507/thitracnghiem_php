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
    <div class="wrapper">
        <div class="logo">
            <img src="image/logo.jpg" alt="">
        </div>
        <div class="menu">
            <ul class="menu-list">
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

                <table style="background-color:while" alight="center" boder="1">
                    <tr>
                        <td><b style="font-size: 25px; color:rgb(135,206,235) ">ĐỊA LÍ 10</b></td>
                        <tr>
                            <td>&emsp;<b style="font-size: 20px; color:rgb(135,206,235) ">Phần 1: Địa lí tự nhiên</b></td>
                            <tr>
                                <td> &emsp;&emsp;Chương 1: Bản đồ</td>
                                <tr>
                                    <td> &emsp;&emsp;&emsp;<a href="bai1001.html" target="_blank">Bài 1: Các phép chiếu hình bản đồ cơ bản</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1002.html" target="_blank">Bài 2: Một số phương pháp biểu hiện các đối tượng địa lí trên bản đồ</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1003.html" target="_blank">Bài 3: Sử dụng bản đồ trong học tập và đời sống</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1004.html" target="_blank">Bài 4: Thực hành: Xác định một số phương pháp biểu hiện các đối tượng địa lí trên bản đồ</td>
                            <tr><td> &emsp;&emsp;Chương 2: Vũ trụ. Hệ quả các chuyển động của Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1005.html" target="_blank">Bài 5: Vũ Trụ. Hệ Mặt Trời và Trái Đất. Hệ quả của chuyển động tự quay quanh trục của Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1006.html" target="_blank">Bài 6: Hệ quả chuyển động xung quanh Mặt Trời của Trái Đất</td>
                            <tr><td> &emsp;&emsp;Chương 3: Cấu trúc của Trái Đất. Các quyển của lớp vỏ địa lí</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1007.html" target="_blank">Bài 7: Cấu trúc của Trái Đất. Thạch quyển. Thuyết kiến tạo mảng</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1008.html" target="_blank">Bài 8: Tác động của nội lực đến địa hình bề mặt Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1009.html" target="_blank">Bài 9: Tác động của ngoại lực đến địa hình bề mặt Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1010.html" target="_blank">Bài 10: Khí quyển. Sự phân bố nhiệt độ không khí trên Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1011.html" target="_blank">Bài 11: Sự phân bố khí áp. Một số loại gió chính</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1012.html" target="_blank">Bài 12: Ngưng đọng hơi nước trong khí quyển. Mưa</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1013.html" target="_blank">Bài 13: Thủy quyển. Một số nhân tố ảnh hưởng đến chế độ nước sông. Một số sông lớn trên Trái Đất</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1014.html" target="_blank">Bài 14: Sóng. Thủy triều. Dòng biển</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1015.html" target="_blank">Bài 15: Thổ nhưỡng quyển. Các nhân tố hình thành thổ nhưỡng</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1016.html" target="_blank">Bài 16: Sinh quyên. Các nhân tố ảnh hưởng tới sự phát triển và phân bố của sinh vật</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1017.html" target="_blank">Bài 17: Sự phân bố của sinh vật và đất trên Trái Đất</td>
                            <tr><td> &emsp;&emsp;Chương 4: Một số quy luật của lớp vỏ địa lí</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1018.html" target="_blank">Bài 18: Lớp vỏ địa lí. Quy luật thống nhất và hoàn chỉnh của lớp vỏ địa lí </td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1019.html" target="_blank">Bài 19: Quy luật địa đới và quy luật phi địa đới</td>
                        <tr><td>&emsp;<b style = "font-size: 20px; color:rgb(135,206,235) ">Phần 2: Địa lí kinh tế - xã hội</b></td>
                            <tr><td> &emsp;&emsp;Chương 5: Địa lí dân cư</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1020.html" target="_blank">Bài 20: Dân số và sự gia tăng dân số</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1021.html" target="_blank">Bài 21: Cơ cấu dân số</td>
                                <tr><td> &emsp;&emsp;&emsp;<a href="bai1022.html" target="_blank">Bài 22: Phân bố dân cư. Các loại hình quần cư và đô thị hóa</td>
                </table>
            </div>
        </div>
        <div id = "phancuoi">
        </div>
    </div>
</body>
</html>