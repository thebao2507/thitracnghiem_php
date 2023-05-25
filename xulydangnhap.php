<?php
    session_start();
    if(isset($_POST['UserName'])&&isset($_POST['Code']))
    {
        $user = $_POST['UserName'];
        $pass = $_POST['Code'];
        //ket noi du lieu 
        $conn = new mysqli("localhost","root","","qlthithpt") or die("Không kết nối được!");
        //chon bang ma cho ket noi
        //mysqli_query($conn,"set names 'utf8'");
        //xay dung cau lenh truy van
        $sqlcomd = "SELECT * FROM  hocsinh WHERE mahs ='$user' ";
        $sqladmin = "SELECT * FROM  admin WHERE maad ='$user' and matkhau = '$pass'";
        //thuc hien truy van
        $result = $conn->query($sqlcomd);
        $ketquaadmin = $conn->query($sqladmin);
        //xu ly ket qua tra ve
        if($pass == $user)
	    {
		    $_SESSION['mahocsinh']=$user;
		    if($row = $result->fetch_array())
            {
                $_SESSION['tenhocsinh'] = $row['tenhs'];
                $_SESSION['mphong'] = $row['maphong'];
                $_SESSION['dchi'] = $row['diachi'];
            ?><script>alert("Đăng nhập thành công!");
                window.location = "tranghocsinh/index.php";
            </script><?php
            }
            else
            ?><script>alert("Đăng nhập không thành công!");
                window.location = "formdangnhap.php";
            </script><?php		  
	    }
        else
        {
            $_SESSION['maad'] = $user;
            if($row2 = $ketquaadmin->fetch_array())
            {
                $_SESSION['tenadmin'] = $row2['ten'];
            ?><script>alert("Đăng nhập thành công!");
                window.location = "trangadmin/admin.php";
            </script><?php	
            }
            else
            ?><script>alert("Tên đăng nhập hoặc mật khẩu không đúng!!");
                //window.location = "formdangnhap.php";
            </script><?php	
        }
//dong ket noi
        $conn->close();
    }
?>

