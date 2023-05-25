<meta charset = "utf8">
<?php
    session_start();
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $thoidiem = date('Y-m-d H:i:s');
    //echo $thoidiem;
    $conn3 = mysqli_connect("localhost", "root", "", "qlthithpt");
    $_SESSION['vaothi'] = "1";

    $laydot = "SELECT * FROM dotthi";
    $kqdot = mysqli_query($conn3, $laydot);
    
    while($rowdot = mysqli_fetch_array($kqdot))
    {
        if (($rowdot['thoigianmo'] < $thoidiem) && ($rowdot['thoigiandong'] > $thoidiem))
        {
            $madot = $rowdot['madot'];
            $_SESSION['tendot'] = $madot;
            $_SESSION['giohet'] = $rowdot['thoigiandong'];
            //echo $_SESSION['giohet'];
            //echo "<input type='text' id='giohet' value=".$rowdot['thoigiandong']." hidden>";
        }
    }
    if(isset($madot))
    {
        echo "<script type='text/javascript'>alert('Vào thi thành công!');</script>";
        header('Location: thithat.php');
    }
    else
        echo "<script type='text/javascript'>alert('Chưa đến thời gian thi!'); window.location = 'dangnhapthi.php';</script>";
?>