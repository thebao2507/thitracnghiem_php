<?php
    $mahocsinh = $_GET['mahs'];

    $conn = new mysqli("localhost", "root", "", "qlthithpt");
	//mysqli_query($conn,"set names 'utf8'");
    $sql ="DELETE FROM hocsinh WHERE mahs = '$mahocsinh'";
    if ($conn->query($sql) == true)
    {
        ?><script>alert("Xóa học sinh này thành công!");
                window.location = "../quanlihocsinh.php";
            </script><?php
    }
    else
        echo "<script type='text/javascript'>window.alert('Xóa học sinh này không thành công!');</script>";
    $conn->close();
?>