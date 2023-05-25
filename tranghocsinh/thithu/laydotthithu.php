<?php
    $conn3 = mysqli_connect("localhost", "root", "", "qlthithpt");

    $laydot = "SELECT * FROM dotthi WHERE madot = '1'";
    $kqdot = mysqli_query($conn3, $laydot);

    if($rowdot = mysqli_fetch_array($kqdot))
    {
        echo "<script type='text/javascript'>alert('Vào thi thành công!');</script>";
        header('Location: vaothithu.php');
    }
    else
        echo "<script type='text/javascript'>alert('Chưa mở đợt thi thử!'); window.location = '../index.php';</script>";
?>