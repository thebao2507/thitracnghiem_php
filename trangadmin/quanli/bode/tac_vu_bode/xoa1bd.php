<?php

    $mabode = $_GET['mabd'];
    //$tende = $_POST['tende'];

    $conn = mysqli_connect("localhost", "root", "", "qlthithpt");

    $sqlcmd1="SELECT `mabode` FROM `bode` WHERE `mabode` = '$mabode'";
    $xoach = "DELETE FROM `cauhoi` WHERE `mabode` = '$mabode'";
    $xoacht = "DELETE FROM `cauhoithi` WHERE `mabode` = '$mabode'";
    $xoabd = "DELETE FROM `bode` WHERE `mabode` = '$mabode'";

    $kq1 = mysqli_query($conn, $sqlcmd1);
    if (mysqli_fetch_array($kq1))
    {
        $kq2 = mysqli_query($conn, $xoach);
        $kq3 = mysqli_query($conn, $xoacht);
        if ($kq2 && $kq3)
        {
            $kq4 = mysqli_query($conn, $xoabd);
            ?><script>alert("Xóa bộ đề này thành công!");
                window.location = "../quanlibode.php";
            </script><?php
        }
    }
    else
        ?><script>alert("Xóa bộ đề này không thành công!");
            window.location = "../quanlibode.php";
        </script><?php
?>