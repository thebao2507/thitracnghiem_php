<?php
    $maphong = $_GET['mapt'];

    $conn = mysqli_connect("localhost", "root", "", "qlthithpt");

    $sqlcmd1="SELECT `maphong` FROM `phong` WHERE `maphong` = '$maphong'";
    //$xoahs = "DELETE FROM `hocsinh` WHERE `maphong` = '$maphong'";
    $xoaphong = "DELETE FROM `phong` WHERE `maphong` = '$maphong'";

    $kq1 = mysqli_query($conn, $sqlcmd1);
    if (mysqli_fetch_array($kq1))
    {
        //$kq2 = mysqli_query($conn, $xoahs);
        //if ($kq2)
        {
            $kq4 = mysqli_query($conn, $xoaphong) or die("Truy vấn không thành công!");
            if (mysqli_fetch_array($kq4))
            {
            ?><script>alert("Xóa phòng thi này thành công!");
                window.location = "../quanliphongthi.php";
            </script><?php
            }
            else
                echo "<script>alert('Xóa phòng thi này không thành công!');window.location = '../quanliphongthi.php';</script>";
        }
    }
    else
        ?><script>alert("Xóa phòng thi này không thành công!");
            window.location = "../quanliphongthi.php";
        </script><?php
?>