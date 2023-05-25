<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí</title>
    <link rel="stylesheet" href="suadotthi.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <!--start-sidebar-->
    <div class="sidebar">
        <!---->
        <div class="sidebar-brand">
            <h2>
                <span class="lab fa-solid fa-user-shield"></span><span><a href="../../../admin.php">ADMIN</a></span>
            </h2>
        </div>
        <!---->
        <div class="sidebar-menu">
            <ul>
                <!--1-->
                <li>
                    <a href="../quanliphongthi.php" class="active"><span class="las la-igloo"></span><span>Quản
                            Lý</span></a>
                </li>
                <!--3-->
                <li>
                    <a href="../../../thongtinadmin/thongtinadmin.php"><span class="las la-clipboard-list"></span><span>Thông tin admin</span></a>
                </li>
                <!---->
                <li>
                    <a href="../../../../huysession.php"><span class="las la-arrow-alt-circle-right"></span><span>Đăng
                            Xuất</span></a>
                </li>
            </ul>
        </div>
    </div>
    <!--end-sidebar-->

    <!--start-main-content-->
    <div class="main-content">
        <!---->
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>Quản Lý
            </h2>

            <!---->
            <div class="user-wrapper">
                <img src="../../../../img/img1.jpg" alt="" width="40px" height="40px">
                <div>
                    <small>Xin Chào!</small>
                    <h4><?php if(isset($_SESSION['tenadmin'])) echo $_SESSION['tenadmin'] ?></h4>
                </div>
            </div>
        </header>
        <!---->
        <main>
            <div class="cards">
                <div class="card-single">
                    <a href="../../hocsinh/quanlihocsinh.php">
                        <div>
                            <h1><?php if(isset($_SESSION['tonghocsinh'])) echo $_SESSION['tonghocsinh'] ?></h1>
                            <span>Học sinh</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </a>
                </div>
                <!---->
                <div class="card-single">
                    <a href="../../bode/quanlibode.php">
                        <div>
                            <h1><?php if(isset($_SESSION['tongbode'])) echo $_SESSION['tongbode'] ?></h1>
                            <span>Bộ Đề</span>
                        </div>
                        <div>
                            <span class="las la-book"></span>
                        </div>
                    </a>
                </div>
                <!---->
                <div class="card-single">
                    <a href="../../phongthi/quanliphongthi.php">
                        <div>
                            <h1><?php if(isset($_SESSION['tongphongthi'])) echo $_SESSION['tongphongthi'] ?></h1>
                            <span>Phòng thi</span>
                        </div>
                        <div>
                            <span class="las la-warehouse"></span>
                        </div>
                    </a>
                </div>
                <!---->
                <div class="card-single thu2">
                    <a href="#">
                        <div>
                            <h1><?php if(isset($_SESSION['dotthi'])) echo $_SESSION['dotthi'] ?></h1>
                            <span>Đợt thi</span>
                        </div>
                        <div>
                            <span class="las la-calendar"></span>
                        </div>
                    </a>
                </div>

                <div class="card-single">
                    <a href="../../dethi/quanlidethi.php">
                        <div>
                            <h1><?php if(isset($_SESSION['tongdethi'])) echo $_SESSION['tongdethi'] ?></h1>
                            <span>Đề Thi</span>
                        </div>
                        <div>
                            <span class="las la-pager"></span>
                        </div>
                    </a>
                </div>
            </div>
            <!---->
            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Sửa thông tin đợt thi</h3>
                            <div>
                                <button><span class="las la-arrow-left"></span><a href="../quanlidotthi.php"
                                        style="color : white;">quay lại</a></button>

                            </div>
                        </div>
                        <div class="card-body">
                        <?php
                            $conn = new mysqli("localhost","root","","qlthithpt") or die("không thể kết nối với database");
                            if(isset($_GET["madt"]))
                            {
                                //kết nối với database
                                $madot = $_GET["madt"];
                                $_SESSION['madotthi'] = $_GET['madt'];
                                // câu lệnh sql
                                $sql = "SELECT * FROM dotthi WHERE madot = '$madot'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_array())
                                {
                                    $tendot = $row['tendotthi'];
                                    $thoigianmo = $row['thoigianmo'];
                                    $thoigiandong = $row['thoigiandong'];
                                }
                            }
                            ?>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <table>
                                    <tr><td> Mã đợt thi </td><td> <input onKeyPress="return isNumberKey(event)" type="text" value = "<?php if(isset($madot)){ echo $madot; } ?>" name="manew" required/></td></tr>
                                    <tr><td> Tên đợt thi </td><td> <input type="text" value = "<?php if(isset($tendot)){ echo $tendot; } ?>" name="tennew" required/></td></tr>
                                    <tr><td> Thời gian mở </td><td> <input type="text" value = "<?php if(isset($thoigianmo)){ echo $thoigianmo; } ?>" name="tgmonew" required/></td></tr>
                                    <tr><td> Thời gian đóng </td><td> <input type="text" value = "<?php if(isset($thoigiandong)){ echo $thoigiandong; } ?>" name="tgdongnew" required/></td></tr>
                                    <tr style = "text-align:center;"><td colspan="2"><input type="submit" name="nut" id="sub" value="Sửa" /></td></tr>
                                </table>
                            </form>
                            <script language='javascript'>
                            function isNumberKey(evt)
                            {
                                var charCode = (evt.which) ? evt.which : event.keyCode
                                if (charCode > 31 && (charCode < 48 || charCode > 57))
                                    return false;
                                return true; 
                            }
                            </script>
                            <?php
                                if (isset($_POST['nut']))
                                {
                                    $madotcu = $_SESSION['madotthi'];
                                    $madotnew = $_POST['manew'];
                                    $tendot = $_POST['tennew'];
                                    $ngaymo = $_POST['tgmonew'];
                                    $ngaydong = $_POST['tgdongnew'];
                                
                                    if ($ngaymo < $ngaydong)
                                    {
                                        $conn = mysqli_connect("localhost", "root", "", "qlthithpt");
                                
                                        $sqlcmd1="SELECT `madot` FROM `dotthi` WHERE `madot` = '$madotcu'";
                                        $upde = "UPDATE `dotthi` SET `madot`='$madotnew',`tendotthi`='$tendot',`thoigianmo`='$ngaymo',`thoigiandong`='$ngaydong' WHERE `madot` = '$madotcu'";
                                    
                                        $kq1 = mysqli_query($conn, $sqlcmd1);
                                        if (mysqli_fetch_array($kq1))
                                        {
                                            $kq2 = mysqli_query($conn, $upde);
                                            if ($kq2)
                                                echo "<script type='text/javascript'>alert('Sửa đợt thi này thành công!');</script>";
                                        }
                                        else
                                            echo "<script type='text/javascript'>alert('Không tồn tại đợt thi này!');</script>";
                                    }
                                    else
                                        echo "<script type='text/javascript'>alert('Thời gian đóng không hợp lệ!');</script>";
                                }
                            ?>
                        </div>
                    </div>
                </div>

        </main>
    </div>
</body>

</html>