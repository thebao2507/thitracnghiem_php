<?php
	if(isset($_SESSION['mahocsinh']))
	{
		//kết nối dữ liệu
        $mahs = $_SESSION['mahocsinh'];
		$connect = new mysqli("localhost", "root", "", "qlthithpt") or die("Không kết nối được ");
		//xây dựng truy vấn
		$sqlcomd = "SELECT * FROM lichsu WHERE mahs = '$mahs' ORDER BY thoigian DESC LIMIT 3";
		$kqls = $connect->query($sqlcomd);
	}
?>