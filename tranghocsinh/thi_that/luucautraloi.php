<meta charset = "utf8">
<?php
    $conn2 = mysqli_connect("localhost", "root", "", "qlthithpt");
	mysqli_query($conn2,"set names 'utf8'");
    if(isset($_POST['hschon']))
    {
        $mahs = $_POST['mahs'];
        $macau = $_POST['macauhoi'];
        $made = $_POST['made'];
        $hschon = $_POST['hschon'];
        
        $laycau = "SELECT * from cauhoithi where macht = '$macau'";
        
        $kths = "SELECT mahs from bailam where mahs ='".$mahs."'";
        $kqhs = mysqli_query($conn2, $kths);

        $ktcau = "SELECT mach from bailam where mach = $macau and mahs = $mahs";
        $kqcau = mysqli_query($conn2, $ktcau);

        $row1 = mysqli_fetch_array(mysqli_query($conn2, $laycau));
        $tl = "INSERT INTO `bailam`(`mahs`, `made`, `mach`,`hschon`,`dapan`) 
                    VALUES ('".$mahs."','".$made."','".$macau."','".$hschon."','".$row1['dapan']."')";
                    
        if((mysqli_fetch_array($kqhs)>0))
        {
            if ($donglam = mysqli_fetch_array($kqcau))
            {
                if($hschon != $donglam['hschon'])
                {
                    $upcau ="UPDATE `bailam` SET `hschon`='$hschon' where mach ='".$macau."' and mahs = '".$mahs."'";
                    $kq2 = mysqli_query($conn2, $upcau);
                }
            }
            else
            {
                $sql = mysqli_query($conn2,$tl) or die("Không thể thực hiện câu truy vấn tl");
            }
            //echo "<script type='text/javascript'>alert('TRùng hs này!');</script>";
        }
        else
        {
            $trungcau="SELECT mach from bailam where mach ='".$a[1]."'";
            if (mysqli_fetch_array(mysqli_query($conn2, $laycau)))
            {
                $sql  = mysqli_query($conn2,$tl) or die("Không thể thực hiện câu truy vấn tl");
            }
        }
    }
?>