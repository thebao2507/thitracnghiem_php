<?php
    session_start();
    if(isset($_SESSION['mabode']))
    {
        $luu = $_SESSION['mabode'];
    $mach = $_GET['mach'];

    $conn = mysqli_connect("localhost", "root", "", "qlthithpt");

    $sqlcmd1="DELETE FROM `cauhoi` WHERE `mach`= '$mach'";
    if ($result1=mysqli_query($conn, $sqlcmd1))
    {
        ?><script>alert("Xóa câu hỏi này thành công!");
        </script><?php
    }
    else
        ?><script>alert("Xóa câu hỏi này không thành công!");
        </script><?php
    }
?>