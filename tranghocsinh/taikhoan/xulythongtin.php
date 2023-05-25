<?php
if(isset($_SESSION['mahocsinh']) &&  isset($_SESSION['tenhocsinh']))
{
	if(isset($_SESSION['mahocsinh']))
	{
		//kết nối dữ liệu
        $mahs = $_SESSION['mahocsinh'];
		$connect = new mysqli("localhost", "root", "", "qlthithpt") or die("Không kết nối được ");
		//xây dựng truy vấn
		$sqlcomd = "SELECT * FROM hocsinh WHERE mahs = '$mahs'";
		$kq = $connect->query($sqlcomd);
	}
}
?>