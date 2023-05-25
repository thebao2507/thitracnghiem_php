<?php
session_start();

//print_r($_SESSION);
 
$tendangnhap = $_SESSION['maad'];
$loi = "";
if (isset($_POST['btndoimatkhau']) == true) 
{
	$matkhaucu = $_POST['matkhaucu'];
	$matkhaumoi = $_POST['matkhaumoi'];
	$rematkhau = $_POST['rematkhau'];

	$conn = new PDO("mysql:host=localhost; dbname=qlthithpt; charset=utf8", "root", "");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM admin WHERE maad = ? AND matkhau = ?";
	$stmt = $conn->prepare($sql);
	$stmt->execute([$tendangnhap, $matkhaucu]);
	if ($stmt->rowCount() == 0) 
	{
		$loi= "Sai mật khẩu cũ";
		echo "<script type='text/javascript'>alert('$loi');
            </script>";
	}
	if (strlen($matkhaumoi)<4) 
	{
		$loi= "Mật khẩu quá ngắn!";
		echo "<script type='text/javascript'>alert('$loi');
            </script>";
	}
	if ($matkhaumoi != $rematkhau) 
	{
		$loi= "Mật khẩu không khớp!";
		echo "<script type='text/javascript'>alert('$loi');
            </script>";
	}
	if ($loi == "") 
	{
		// Truyền thêm biến admin là ai mới thay đổi được mật khẩu
		$sql = "UPDATE admin SET matkhau = ? WHERE maad = ?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$matkhaumoi, $tendangnhap]);
			echo "<script type='text/javascript'>alert('Đổi mật khẩu thành công!');
                window.location = 'thongtinadmin.php';
            </script>";
	}
}
?>
<title>Sửa thông tin</title>
<style>
    body{
        padding-top:100px;
    }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<form method="post" style="width:500px" class="border border-primary rounded border-2 p-2 m-auto">
	<div class="mb-3">
		<label for="tendangnhap" class="form-label">Mã ID</label>
		<input value="<?php echo $tendangnhap ?>" type="text" disabled class="form-control" 
				id="tendangnhap" name="tendangnhap" placeholder="">
	</div>
	<div class="mb-3">
		<label for="matkhaucu" class="form-label">Mật khẩu cũ</label>
		<input value="<?php if(isset($matkhaucu)== true)echo $matkhaucu; ?>" type="password" class="form-control" id="matkhaucu" name="matkhaucu">
	</div>
	<div class="mb-3">
		<label for="matkhaumoi" class="form-label">Mật khẩu mới</label>
		<input value="<?php if(isset($matkhaumoi)== true)echo $matkhaumoi; ?>"type=" password" class="form-control" id="matkhaumoi" name="matkhaumoi">
	</div>
	<div class="mb-3">
		<label for="rematkhau" class="form-label">Nhắc lai mật khẩu</label>
		<input value="<?php if(isset($rematkhau)== true)echo $rematkhau; ?>"type="password" class="form-control" id="rematkhau" name="rematkhau">
	</div>
	<button type="submit" name="btndoimatkhau" value="doimk" class="btn btn-primary">Thay đổi mật khẩu</button>
</form>























