<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="thongtin.css">
</head>

<body style="background-color:  #cccccc ;">
    <section >
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
                <li>
                    <a href="../onthi/onthidiali.php">Ôn tập</a>
                </li>
                <li id = "so2">
                    <a href="">Tài khoản</a>
                </li>
                <li>
                    <img src="../../img/img1.jpg" alt="" width="40px" height="40px"
                        style="margin-right:10px; border-radius: 50%; transform: translateY(-42.8px);">
                    <div>
                        <h4 style="font-size: 17px; margin-bottom:0; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Họ Tên:
                            <?php if(isset($_SESSION['tenhocsinh'])) echo $_SESSION['tenhocsinh'] ?> </h4>
                        <h4 style="font-size: 17px; padding: bottom 4px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
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
        <div class="container py-4" style = "margin-top: 70px;">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center" style = "height: 472px;">
                            <img src="../assets/img/download.png" alt="avatar" class="rounded-circle img-fluid" style="width: 140px; height: 160px">
                            <h5 class="my-3" style = "padding-top: 15px;"><?php if(isset($_SESSION['tenhocsinh'])) echo $_SESSION['tenhocsinh'] ?></h5>
                            <p class="text-muted mb-1" style = "padding-top: 15px;">Mã học sinh: <?php if(isset($_SESSION['mahocsinh'])) echo $_SESSION['mahocsinh'] ?></p>
                            <p class="text-muted mb-4" style = "padding-top: 15px;">Địa chỉ: <?php if(isset($_SESSION['dchi'])) echo $_SESSION['dchi'] ?></p>
                            <div class="d-flex justify-content-center mb-2" style = "padding-top: 55px;">
                                <form enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                    <input type="file" name="avatar" id="file" class="inputfile" accept=".jpg,.png" />
                                    <label for="file">Chọn avatar</label>
                                    <input style = "padding:10px; border-radius:5px;" type="submit" value="Đổi ảnh" name="submit">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <?php include 'xulythongtin.php' ?>
                        <div class="card-body">
                            <?php 
                            if($row = mysqli_fetch_array($kq))
                            {
                            ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">CCCD</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row['cccd'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">SDT</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row['sdt'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Ngày sinh</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row['ngaysinh'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Giới tính</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row['gioitinh'] ?></p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0"><?php echo $row['email'] ?></p>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3 mb-md-0">
                                <div class="card-title py-2 mb-4 mb-md-0" style = "margin-left: 18px; display:flex; margin-top: 10px; font-size: 2rem;">
                                    <h6 style = "padding-right: 10px;">Xem Điểm</h6>
                                    <h6><a href="xemchitietdiem.php">Xem chi tiết</a></h6>
                                </div>
                                <div class="card-body" style = "margin-left: 6px;">
                                    <?php include 'xulixemlichsu.php' ?>
                                    <?php
                                        while($row = $kqls->fetch_array())
                                        {
                                        ?>
                                            <p class="mb-1" style="font-size: 0.9rem;"><?php echo "ngày  ".$row['ngaythi']."  thời gian  ".$row['thoigian']."  đã đạt số điểm  ".$row['diem']."  với hình thức  ".$row['loaithi']."";  ?></p>
                                        <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>