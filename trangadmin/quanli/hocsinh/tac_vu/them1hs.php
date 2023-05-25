<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí</title>
    <link rel="stylesheet" href="them.css">
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
                    <a href="../quanlihocsinh.php" class="active"><span class="las la-igloo"></span><span>Quản Lý</span></a>
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
                    <a href="">
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
                            <h3>Nhập Thông Tin Học Sinh Mới</h3>
                            <div>
                                <button><span class="las la-arrow-left"></span><a href="../quanlihocsinh.php" style = "color : white;">quay lại</a></button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <table>
                                    <tr><td> Mã học sinh </td><td> <input onKeyPress="return isNumberKey(event)" type="text" placeholder="Nhập mã học sinh" name="ma" required/></td></tr>
                                    <tr><td> Tên học sinh </td><td> <input type="text" placeholder="Nhập tên học sinh" name="ten" required/></td></tr>
                                    <tr><td> Ngày sinh </td><td><input type="date" name = "ngaysinh" placeholder="Nhập ngày sinh" required></td></tr>
                                    <tr><td> Giới tính </td>
				                        <td style = "display : flex;"><div style = "padding-right: inherit;"><input type="radio" name = "gioitinh" value="nam" >Nam</div>
                                            <div><input type="radio" name = "gioitinh" value="nữ" >Nữ</div></td></tr>
                                    <tr><td>CCCD </td><td> <input onKeyPress="return isNumberKey(event)" type="text" name="cccd" placeholder="Nhập số CCCD"/></td></tr>
                                    <tr><td>Số điện thoại </td><td> <input onKeyPress="return isNumberKey(event)" type="text" name="sdt" placeholder="Nhập số điện thoại"/></td></tr>
                                    <tr><td>Email </td><td><input type="email" name = "email" placeholder="Nhập email" ></td></tr>
                                    <tr><td>Địa chỉ </td><td> <input type="text" placeholder="Nhập địa chỉ" name="dchi" /></td></tr>
                                    <tr><td>Mã phòng (số) </td><td> <input onKeyPress="return isNumberKey(event)" type="text" placeholder="Nhập mã phòng" name="mphong" required/></td></tr>
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
                    if (isset($_POST['ma']))
                    {
                        $mahs = $_POST['ma'];
	                    $tenhs = $_POST['ten'];
	                    $nS = $_POST['ngaysinh'];
                        $gT = $_POST['gioitinh'];
	                    $cccd = $_POST['cccd'];
	                    $sdt = $_POST['sdt'];
                        $mail = $_POST['email'];
	                    $dc = $_POST['dchi'];
                        $mP = $_POST['mphong'];
                        // kết nối data
                        $conn = new mysqli("localhost", "root", "", "qlthithpt");
	                    //  mysqli_query($conn,"set names 'utf8'");

                        $sqlcmd1="INSERT INTO `hocsinh`(`mahs`, `tenhs`, `ngaysinh`, `gioitinh`, `cccd`, `sdt`, `email`, `diachi`, `maphong`) 
                                VALUES ('$mahs','$tenhs','$nS','$gT','$cccd','$sdt','$mail','$dc','$mP')";
                        $ktmaphong = "select * from phong where maphong ='".$mP."'";
                        $lenhkttrung="select * from hocsinh where mahs ='".$mahs."'";
                        if($d=mysqli_fetch_array(mysqli_query($conn,$ktmaphong)))
                        {
                            $kqkttrung = mysqli_query($conn,$lenhkttrung);
                            if($dong=mysqli_fetch_array($kqkttrung))
                            {
                                ?> <script type='text/javascript'> alert("Mã học sinh này đã tồn tại, vui lòng nhập lại!");</script> <?php
                            }
                            else
                            {
                                if ($result1=mysqli_query($conn, $sqlcmd1))
                                {
                                    ?> <script type='text/javascript'> alert("thêm học sinh này thành công!");</script> <?php
                                    
                                }
                            }
                        }
                        else
                        {
                            ?> <script type='text/javascript'> alert("Phòng thi này không có sẵn!");</script> <?php
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