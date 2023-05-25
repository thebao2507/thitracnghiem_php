<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="vaott.css">
</head>

<body style="background-color:  #cccccc;">
    <div id="dautrang">
        <ul class="dieuhuong">
            <li>
                <a href="../index.php">Trang Chủ</a>
            </li>
            <li>
                <a href="../thi_that/dangnhapthi.php">Thi</a>
            </li>
            <li id="so2">
                <a href="#">Luyện Thi Thử</a>
            </li>
            <li>
                <a href="../onthi/onthidiali.php">Ôn tập</a>
            </li>
            <li>
                <a href="../taikhoan/xemthongtin.php">Tài khoản</a>
            </li>
            <li>
                <img src="../../img/img1.jpg" alt="" width="40px" height="40px"
                    style="margin-right:10px; border-radius: 50%; transform: translateY(-42.8px);">
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
                    <p style="transform: translate(120px, -59px); margin-left: 80px; margin-right: 120px;"><a href="#"
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
    <div class=" py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="card py-2" style="height:800px; width: 990px; border-radius: 20px;">
                    <div class="card-title">
                        <h4 class="py-3">Bài Làm Trắc Nghiệm</h4>
                    </div>
                    <div class="card-body" style="background-color:#fff; transform:translateY(-29px);">
                        <?php include 'thithu.php' ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card py-2 card-thongtin" style="height:500px; width: 320px; border-radius: 20px;">
                    <div class="card-title">
                        <h4 class="py-3">Thông tin học sinh</h4>
                    </div>
                    <div class="card-body" style="background-color:#fff; transform:translateY(-5px);">
                        <h6 style = "padding: 4px 0px 4px 4px; font-size:18px;" class="card-tenhs">Họ tên:
                        <?php if(isset($_SESSION['tenhocsinh'])) echo $_SESSION['tenhocsinh'] ?></h6>
                        <h6 style = "padding: 4px 0px 4px 4px; font-size:18px;" class="card-mahs">MAHS: <?php if(isset($_SESSION['mahocsinh'])) echo $_SESSION['mahocsinh'] ?></h6>
                        <h6 style = "padding: 4px 0px 4px 4px; font-size:18px;">Phòng thi: <?php if(isset($_SESSION['mphong'])) echo $_SESSION['mphong'] ?> </h6>
                        <h6 style = "padding: 4px 0px 4px 4px; font-size:18px;">Ngày thi: 21/06/2022</h6>
                    </div>
                    <div class="card-title" style = "transform:translateY(-10px);">
                        <h4 class="py-3">Thông tin đề thi</h4>
                    </div>
                    <div class="card-body" style="background-color:#fff; transform:translateY(-8px);">
                        <h6 style = "font-size:18px; padding: 4px 0px 5px 4px;" >Mã đề thi: <?php if(isset($_SESSION['mde'])) echo $_SESSION['mde'] ?> </h6>
                        <h6 style = "font-size:18px; padding: 4px 0px 5px 4px;">Môn thi: địa lý </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>