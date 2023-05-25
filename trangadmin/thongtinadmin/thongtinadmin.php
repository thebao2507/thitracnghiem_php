<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin admin</title>
    <link rel="stylesheet" href="thongtinad.css">
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
                <span class="lab fa-solid fa-user-shield"></span><span><a href="../admin.php">ADMIN</a></span>
            </h2>
        </div>
        <!---->
        <div class="sidebar-menu">
            <ul>
                <!--1-->
                <li>
                    <a href="../quanli/hocsinh/quanlihocsinh.php"><span class="las la-igloo"></span><span>Quản Lý</span></a>
                </li>
                <!--3-->
                <li>
                    <a href="#" class="active"><span class="las la-clipboard-list"></span><span>Thông tin admin</span></a>
                </li>
                <!---->
                <li>
                    <a href="../../huysession.php" ><span class="las la-arrow-alt-circle-right"></span><span>Đăng Xuất</span></a>
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
                </label>Thông tin
            </h2>
            <!---->
            
            <!---->
            <div class="user-wrapper">
                <img src="../../img/img1.jpg" alt="" width="40px" height="40px">
                <div>
                    <small>Xin Chào!</small>
                    <h4><?php if(isset($_SESSION['tenadmin'])) echo $_SESSION['tenadmin'] ?></h4>
                </div>
            </div>
        </header>
        <!---->
        <main>
            <div class="container">
                <table>
			    <tr>
				    <th>  STT </th>
				    <th>  Mã số Admin </th>
				    <th>  Mật khẩu </th>
				    <th>  Tên </th>
                    <th>  Đổi mật khẩu</th>
			    </tr>
			
			    <?php
				    $conn = mysqli_connect("localhost", "root", "", "qlthithpt");
				    $sql = "SELECT maad, matkhau, ten FROM admin";
				    $result = $conn->query($sql);
				    $stt=1;
				    while($row = $result->fetch_assoc() )
				    {
					    echo
					    "<tr>
						    <td> ".$stt++."</td>
						    <td> ".$row['maad']."  </td>
						    <td> ********* </td>
						    <td> ".$row['ten']." </td>
                            <td> <button style = 'width:30px; height:30px; background:blue;' type='submit'><a style = 'color:#fff;' href='doipass.php'><i class='fa-solid fa-pen-to-square'></i></a></button></td>
					    </tr>";
				    }
					
			    ?>
		        </table>
            </div>
        </main>
    </div>
</body>

</html>