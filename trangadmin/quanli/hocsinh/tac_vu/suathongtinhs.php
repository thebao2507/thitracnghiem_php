<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lí</title>
    <link rel="stylesheet" href="suathongtin.css">
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
                    <a href="../quanlihocsinh.php">
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
                    <a href="../../quanlidethi.php">
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
                            <h3>Sửa thông tin cho học sinh</h3>
                            <div>
                                <button><span class="las la-arrow-left"></span><a href="../quanlihocsinh.php" style = "color : white;">quay lại</a></button>
                                
                            </div>
                        </div>
                        <div class="card-body">
                            <?php
                            $conn = new mysqli("localhost","root","","qlthithpt") or die("không thể kết nối với database");
                            if(isset($_GET["mahs"]))
                            {
                                //kết nối với database
                                $mahocsinh = $_GET["mahs"];
                                // câu lệnh sql
                                $sql = "SELECT * FROM hocsinh WHERE mahs = '$mahocsinh'";
                                $result = $conn->query($sql);
                                while($row = $result->fetch_array())
                                {
                                 //   $mahocsinh = $row['mahs'];
                                    $tenhocsinh = $row['tenhs'];
                                    $ngaysinhhs = $row['ngaysinh'];
                                    $gioitinhhs = $row['gioitinh'];
                                    $cancuochs = $row['cccd'];
                                    $sodienthoai = $row['sdt'];
                                    $emailhs = $row['email'];
                                    $diachihs = $row['diachi'];
                                    $mphs = $row['maphong'];
                                }
                            }
                            ?>
                            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                                <table>
                                    <tr><td> Mã học sinh </td><td> <input onKeyPress="return isNumberKey(event)" type="text" value = "<?php if(isset($mahocsinh)){ echo $mahocsinh; } ?>" readonly="true" name="ma" required/></td></tr>
                                    <tr><td> Tên học sinh </td><td> <input type="text" value = "<?php if(isset($tenhocsinh)){ echo $tenhocsinh; } ?>" name="ten" required/></td></tr>
                                    <tr><td> Ngày sinh </td><td><input type="text" name = "ngaysinh" value = "<?php if(isset($ngaysinhhs)){ echo $ngaysinhhs; } ?>" required></td></tr>
                                    <tr><td> Giới tính </td>
				                        <td style = "display : flex;"><div style = "padding-right: inherit;"><input type="radio" name = "gioitinh" value="nam" <?php if(isset($gioitinhhs)){ echo $gioitinhhs == 'nam' ?'checked': '';} ?> >Nam</div>
                                            <div><input type="radio" name = "gioitinh" value="nữ" <?php if(isset($gioitinhhs)){ echo $gioitinhhs == 'nữ' ?'checked': ''; } ?> >Nữ</div></td></tr>
                                    <tr><td>CCCD </td><td> <input onKeyPress="return isNumberKey(event)" type="text" name="cccd" value = "<?php if(isset($cancuochs)){ echo $cancuochs; } ?>" /></td></tr>
                                    <tr><td>Số điện thoại </td><td> <input onKeyPress="return isNumberKey(event)" type="text" name="sdt" value = "<?php if(isset($sodienthoai)){ echo $sodienthoai; } ?>"/></td></tr>
                                    <tr><td>Email </td><td><input type="email" name = "email" value = "<?php if(isset($emailhs)){ echo $emailhs; } ?>" ></td></tr>
                                    <tr><td>Địa chỉ </td><td> <input type="text" value = "<?php if(isset($diachihs)){ echo $diachihs; } ?>" name="dchi" /></td></tr>
                                    <tr><td>Mã phòng (số) </td><td> <input onKeyPress="return isNumberKey(event)" type="text" value = "<?php if(isset($mphs)){ echo $mphs; } ?>" name="mphong" required/></td></tr>
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
                            <?php include 'xulisua.php'; ?>
                        </div>
                    </div>
                </div>

        </main>
        </div>
</body>

</html>