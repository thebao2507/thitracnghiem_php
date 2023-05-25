<?php
session_start();
if(isset($_SESSION['mahocsinh']))
{
	if(isset($_POST['mahs'])&&isset($_POST['mkhau']))
	{
		$user = $_POST['mahs'];
		$pass = $_POST['mkhau'];
		//tạo kết nối
		$conn = new mysqli("localhost","root","","qlthithpt") or die("Không kết nối được");
		//xay dung cau lenh truy van
		$sqlcom ="SELECT * FROM matkhauthi WHERE matkhau ='$pass'";
		//thuc hien truy van
		$result = $conn->query($sqlcom);
		if($row = $result->fetch_array())
		{
			?> <script>
                window.location = "laydotthi.php";
                </script> 
            <?php
		}
		else
			?>
                <script>
                    alert("Sai Mật khẩu vui lòng nhập lại!");
                </script>
            <?php
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="dangnhapthi.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>
<body>
    <div class="khoi">
        <div class="khoi-container">
            <header class="khoi-header">Nhập tài khoản và mật khẩu vào thi</header>
            <div class="khoi-body">
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="khoi-card-items">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name ="mahs" readonly="true" value = "<?php echo $_SESSION['mahocsinh'] ?>" class="khoi-input">
                    </div>
                    <div class="khoi-card-items">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="mkhau" placeholder="mật khẩu" class="khoi-input">
                    </div>
                    <div class="khoi-card-items input">
                        <input type="submit" value="Vào thi" name = "btdn" class="khoi-button">
                    </div>
                </form>
            </div>

            <footer class="khoi-footer">
                <div class="link-khoi-footer">
                    <a href="#">Quên Mật Khẩu?</a>
                    <a href="#">Trợ giúp</a>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>

<?php
}
?>