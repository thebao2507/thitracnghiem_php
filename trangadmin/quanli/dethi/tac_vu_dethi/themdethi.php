<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí</title>
    <link rel="stylesheet" href="themdet.css">
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
                <div class="card-single">
                    <a href="../../dotthi/quanlidotthi.php">
                        <div>
                            <h1><?php if(isset($_SESSION['dotthi'])) echo $_SESSION['dotthi'] ?></h1>
                            <span>Đợt thi</span>
                        </div>
                        <div>
                            <span class="las la-calendar"></span>
                        </div>
                    </a>
                </div>

                <div class="card-single thu2">
                    <a href="#">
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
                            <h3>Nhập Thông Tin đề thi Mới</h3>
                            <div>
                                <button><span class="las la-arrow-left"></span><a href="../quanlidethi.php" style = "color : white;">quay lại</a></button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <table>
                                    <tr><td> Mã đề thi </td><td> <input onKeyPress="return isNumberKey(event)" type="text" placeholder="Nhập mã đề thi" name="madet" required/></td></tr>
                                    <tr><td> Tên đề thi </td><td> <input type="text" placeholder="Nhập tên đề thi" name="tendet" required/></td></tr>
                                    <tr><td>Loại đề </td>
				<td><input type="radio" name = "loaide" value="Thi thật" required>Thi thật 
					<input type="radio" name = "loaide" value="Thi thử" >Thi thử </td></tr>
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
                    if (isset($_POST['madet']))
                    {
                        $made = $_POST['madet'];
                        $tende = $_POST['tendet'];
                        $loai = $_POST['loaide'];
                    
                        $conn = mysqli_connect("localhost", "root", "", "qlthithpt");
                    
                        $sqlcmd1="INSERT INTO `dethi`(`made`, `tende`, `loaide`) VALUES ('$made','$tende', '$loai')";
                        $lenhkttrung="select made from dethi where made ='".$made."'";
                        $kqkttrung = mysqli_query($conn,$lenhkttrung);
                        if($dong=mysqli_fetch_array($kqkttrung))
                        {
                            echo "<script type='text/javascript'>alert('Mã đề này đã tồn tại, vui lòng nhập mã đề khác!');</script>";
                        }
                        else
                        {
                            if ($result1=mysqli_query($conn, $sqlcmd1))
                            {
                                $tron = "SELECT * FROM cauhoi ORDER BY RAND () LIMIT 40";
                                
                                $kqtron = mysqli_query($conn, $tron);
                                while($row1 = mysqli_fetch_array($kqtron))
                                {
                                    $sqlcmd2 = "INSERT INTO `cauhoithi`(`macht`, `made`, `mabode`, `noidung`, `hinhanh`, `a`, `b`, `c`, `d`, `dapan`) 
                                    VALUES ('".$row1['mach']."','".$made."','".$row1['mabode']."','".$row1['noidung']."','".$row1['hinhanh']."','".$row1['a']."','".$row1['b']."','".$row1['c']."','".$row1['d']."','".$row1['dapan']."')";
                                    $sql=mysqli_query($conn, $sqlcmd2) or die("Không thể thực hiện câu truy vấn");
                                }
                                echo "<script type='text/javascript'>alert('Tạo thành công đề thi này!');</script>";
                                //header ('location: loadbode.php');
                            }
                            else
                                echo ("<b> Thêm đề này không thành công! </b>");
                        }
                    }
                ?>
                        </div>
                    </div>
                </div>

        </main>
        </div>
</body>

</html>