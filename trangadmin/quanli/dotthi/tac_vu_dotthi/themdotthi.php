<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí</title>
    <link rel="stylesheet" href="themdotthi.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
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
                    <a href="../quanlidotthi.php" class="active"><span class="las la-igloo"></span><span>Quản Lý</span></a>
                </li>
                <!--3-->
                <li>
                    <a href="../../../thongtinadmin/thongtinadmin.php"><span class="las la-clipboard-list"></span><span>Thông tin admin</span></a>
                </li>
                <!---->
                <li>
                    <a href="../../../../huysession.php"><span class="las la-arrow-alt-circle-right"></span><span>Đăng Xuất</span></a>
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
                            <h3>Nhập Thông Tin đợt thi Mới</h3>
                            <div>
                                <button><span class="las la-arrow-left"></span><a href="../quanlidotthi.php" style = "color : white;">quay lại</a></button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <table>
                                    <tr><td> Mã đợt thi </td><td> <input onKeyPress="return isNumberKey(event)" type="text" placeholder="Nhập mã đợt thi" name="madot" required/></td></tr>
                                    <tr><td> Tên đợt thi </td><td> <input type="text" placeholder="Nhập tên đợt thi" name="tendot" required/></td></tr>
                                    <tr><td> Ngày mở </td><td> <input type="text" placeholder="YYYY-MM-DD HH:MI:SS" name="begin" required/></td></tr>
                                    <tr><td> Ngày đóng </td><td> <input type="text" placeholder="YYYY-MM-DD HH:MI:SS" name="end" required/></td></tr>
                                    <tr align="center"><td colspan="2"><input type="submit" name="nut" id="sub" value="Thêm" /></td></tr>
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
                    if (isset($_POST['madot']))
                    {
                        $madot = $_POST['madot'];
                        $tendot = $_POST['tendot'];
                        $ngaymo = $_POST['begin'];
                        $ngaydong = $_POST['end'];
                    
                        if ($ngaymo < $ngaydong)
                        {
                            $conn = mysqli_connect("localhost", "root", "", "qlthithpt");
                    
                            $sqlcmd1="INSERT INTO `dotthi`(`madot`, `tendotthi`, `thoigianmo`, `thoigiandong`) 
                                        VALUES ('$madot','$tendot','$ngaymo','$ngaydong')";
                            $lenhkttrung="select * from dotthi where madot ='".$madot."'";
                            $kqkttrung = mysqli_query($conn,$lenhkttrung);
                            if($dong=mysqli_fetch_array($kqkttrung))
                            {
                                echo "<script type='text/javascript'>alert('Mã đợt này đã tồn tại, vui lòng nhập mã khác!');</script>";
                            }
                            else
                            {
                                if ($result1=mysqli_query($conn, $sqlcmd1))
                                {
                                    echo "<script type='text/javascript'>alert('Thêm đợt thi này thành công!');</script>";
                                }
                            }
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