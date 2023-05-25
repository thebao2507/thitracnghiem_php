<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="styleadmin.css">
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
                <span class="lab fa-solid fa-user-shield"></span><span><a href="admin.php">ADMIN</a></span>
            </h2>
        </div>
        <!---->
        <div class="sidebar-menu">
            <ul>
                <!--1-->
                <li>
                    <a href="quanli/hocsinh/quanlihocsinh.php" class="active"><span class="las la-igloo"></span><span>Quản Lý</span></a>
                </li>
                <!--3-->
                <li>
                    <a href="thongtinadmin/thongtinadmin.php"><span class="las la-clipboard-list"></span><span>Thông tin admin</span></a>
                </li>
                <!---->
                <li>
                    <a href="../huysession.php"><span class="las la-arrow-alt-circle-right"></span><span>Đăng Xuất</span></a>
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
                </label>ADMIN
            </h2>
            <!---->
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                    <select name="chon">
                        <option value="hocsinh"> Học sinh </option>
                        <option value="cauhoi"> Câu hỏi </option>
                        <option value="bode"> Bộ đề </option>
                        </td><td><input type="text" placeholder="nhập nội dung cần tìm" name="key"/>
                    </select>
                </form>
            </div>
            <!---->
            <div class="user-wrapper">
                <img src="../img/img1.jpg" alt="" width="40px" height="40px">
                <div>
                    <small>Xin Chào!</small>
                    <h4><?php if(isset($_SESSION['tenadmin'])) echo $_SESSION['tenadmin'] ?></h4>
                </div>
            </div>
        </header>
        <!---->
        <main>
            <!--phan php-->
            <?php include 'timkiemthongtin.php' ?>
        </main>
    </div>
</body>

</html>


