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
                <p><b style = "font-size: 25px; color:rgb(135,206,235) ">HỆ THỐNG KIẾN THỨC ÔN THI ĐỊA LÝ ĐẦY ĐỦ VÀ CHI TIẾT</b></p>
                <table  style="background-color:while" alight = "center" boder = "1">
                    <tr><td><b style = "font-size: 25px; color:rgb(135,206,235) ">ĐỊA LÍ 12</b></td>
                        <tr><td> &emsp;&emsp;A-Địa Lí Việt Nam</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1201.html" target="_blank">Bài 1: Việt Nam trên đường đổi mới và hội nhập</td> 
                        <tr><td> &emsp;&emsp;B-Địa lí tự nhiên</td>
                            <tr><td> &emsp;&emsp;&emsp;Vị trí địa lí và lịch sử phát triển lãnh thổ</td></tr>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1202.html" target="_blank">Bài 2: Vị trí địa lí, phạm vi lãnh thổ</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1203.html" target="_blank">Bài 3: Thực hành: Vẽ lược đồ Việt Nam</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1204.html" target="_blank">Bài 4: Lịch sử hình thành và phát triển lãnh thổ</td> 
                            <tr><td> &emsp;&emsp;&emsp;Đặc điểm chung của tự nhiên</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1205.html" target="_blank">Bài 5: Đất nước nhiều đồi núi</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1206.html" target="_blank">Bài 6: Thiên nhiên chịu ảnh hưởng sâu sắc của biển</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1207.html" target="_blank">Bài 7: Thiên nhiên nhiệt đới ẩm gió mùa</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1208.html" target="_blank">Bài 8: Thiên nhiên phân hóa đa dạng</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1209.html" target="_blank">Bài 9: Thực hành: đọc bản đồ địa hình, điền vào lược đồ trống một số dãy núi và đỉnh núi</td>     
                            <tr><td> &emsp;&emsp;&emsp;Vấn đề sử dụng và bảo vệ tự nhiên</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1210.html" target="_blank">Bài 10: Sử dụng và bảo vệ tài nguyên thiên nhiên</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1211.html" target="_blank">Bài 11: Bảo vệ môi trường và phòng chống thiên tai</td> 
                        <tr><td> &emsp;&emsp;C-Địa lí dân cư</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1212.html" target="_blank">Bài 12: Đặc điểm dân số và phân bố dân cư ở nước ta</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1213.html" target="_blank">Bài 13: Lao động và việc làm
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1214.html" target="_blank">Bài 14: Đô thị hóa</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1215.html" target="_blank">Bài 15: Thực hành: Vẽ biểu đồ và phân tích sự phân hóa về thu nhập bình quân theo đầu người giữa các vùng</td>  
                        <tr><td> &emsp;&emsp;D-Địa Lí kinh tế</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1216.html" target="_blank">Bài 16: Chuyển dịch cơ cấu kinh tế</td>
                        <tr><td> &emsp;&emsp;E-Địa Lí các ngành kinh tế</td> 
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1217.html" target="_blank">Bài 17: Đặc điểm nền nông nghiệp nước ta</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1218.html" target="_blank">Bài 18: Cơ cấu ngành công nghiệp</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1219.html" target="_blank">Bài 19: Vấn đề phát triển ngành giao thông vận tải và thông tin liên lạc</td>
                        <tr><td> &emsp;&emsp;F-Địa lí các vùng kinh tế</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1220.html" target="_blank">Bài 20: Vấn đề khai thác thế mạnh ở Trung du và miền núi Bắc Bộ</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1221.html" target="_blank">Bài 21: Vấn đề phát triển kinh tế - xã hội ở Bắc Trung Bộ</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1222.html" target="_blank">Bài 22: Vấn đề khai thác ở thế mạnh Tây Nguyên</td>
                        <tr><td> &emsp;&emsp;G-Địa lí địa phương</td>
                            <tr><td> &emsp;&emsp;&emsp;<a href="bai1223.html" target="_blank">Bài 23:Tìm hiểu địa lí tỉnh, thành phố</td>  
            
                </table>
            </div>
        </div>
        <div id= "phancuoi3">

        </div>
    </div>   
</body>
</html>