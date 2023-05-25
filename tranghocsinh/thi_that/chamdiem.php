<?php session_start(); ?>

<head>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .bangketqua {
        box-shadow: 10px 10px 50px grey;
        border-radius: 10px;
        background: #b3cde0;
        height: 250px;
        width: 350px;
        font-size: 18px;
        text-align: center;
    }

    p {
        text-align: center;
        /* margin: 0; */
        margin-bottom: 0;
        font-weight: 600;
        font-size: 20px;
    }

    button {
        margin-top: 40px;
        padding: 10px;
        border-radius: 14px;
        border: 1px solid;
        font-size:18px;
    }
    button:hover{
        border: 1px solid #fff;
        color:#fff;
        background: #ccc;
        cursor: pointer;
    }
    </style>
</head>
<?php
        echo "<div class = 'bangketqua'>";
        echo "<p>Kết quả bài thi"."</p><br>";
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $conn3 = mysqli_connect("localhost", "root", "", "qlthithpt");
        mysqli_query($conn3,"set names 'utf8'");
    
        if (isset($_SESSION['mahs']))
        {
            $mahs = $_SESSION['mahs'];
        }
        
        $getTl = "SELECT hschon, dapan FROM bailam where mahs = $mahs";
        $kq1 = mysqli_query($conn3, $getTl);
       // while(mysqli_num_rows($kq1)>0)
        $dung = 0;
        $socaulam = 0;
        while($row1 = mysqli_fetch_array($kq1))
        {
            $socaulam++;
            if ($row1['hschon'] == $row1['dapan'])
                $dung++;
        }
        $diem = $dung * 0.25;
        echo "Số câu đã làm: $socaulam/40 câu <br>";
        echo "Số câu đúng: $dung <br>";
        echo "Điểm của bạn là: $diem đ";
        //echo "<script type='text/javascript'>alert($diem);</script>";
        //thêm thông tin vào bảng lịch sử
        $kiemtrathithat = "SELECT mahs,loaithi FROM lichsu WHERE mahs = '$mahs' and loaithi = 'Thi thật'";
        $traveketqua = mysqli_query($conn3, $kiemtrathithat) or die("lỗi");
        if(mysqli_fetch_array($traveketqua))
        {
            echo "<script>alert('Bạn đã thi xong đợt này!');
                </script>";
        }
        else{
        $timestamp = time();
        $ngay = date('Y-m-d', $timestamp);
        $gio = date('H:i:s', $timestamp);
    
        $madot = $_SESSION['tendot']; //tùy vào đợt thi, đây là khai báo tạm thời
        $addkq = "INSERT INTO `lichsu`(`mahs`, `ngaythi`, `thoigian`, `diem`, `loaithi`, `madot`) 
        VALUES ('$mahs','$ngay','$gio','$diem','Thi thật','$madot')";
        $kq2 = mysqli_query($conn3, $addkq) or die("Loi");
        }
        echo "<div>";
        echo "<button name='button' type='button' onclick = 'quaylaitrangchu()'>Trang chủ</button>";
        echo "</div>";
        echo "</div>";
?>

<?php
    unset($_SESSION['vaothi']);
?>

<script type="text/javascript">
function quaylaitrangchu() {
    window.location = "../index.php";
}
</script>