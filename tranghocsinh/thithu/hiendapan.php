<meta charset = "utf8">
<?php
session_start();
$mahs = $_SESSION['mahocsinh'];
function checked($dapan, $chon, $caudo)
{
    if(($dapan==$chon) && ($chon==$caudo))
        $rs =  "style = 'color: #32CD32';";
    else if(($chon==$caudo) && ($dapan!=$caudo))
            $rs = "style = 'color: red';";
    else
        $rs = "";
    return $rs;
}

$conn4 = mysqli_connect("localhost", "root", "", "qlthithpt")
or die("Không kết nối được");
mysqli_query($conn4, "set names 'utf8'");
    if(isset($_POST['danop']))
    {
        $made = $_POST['made'];
        $dung = 0;
        $socaulam = 0;
        $b = [];
        for($i=0; $i<40; $i++)
        {
            $macau = "thutu".$i;
            $dapan = "cau".$i;
            $a[$i] = $_POST[$macau];
            $laydapan = "SELECT dapan FROM cauhoithi WHERE macht = $a[$i] and made = $made";
            $kqlay = mysqli_query($conn4, $laydapan);
            if(isset($_POST[$dapan]))
            {
                if($row1 = mysqli_fetch_array($kqlay))
                {
                    $b[$i] = $_POST[$dapan];
                    if ($row1['dapan'] == $b[$i])
                        $dung++;
                    $socaulam++;
                }
            }
        }
        
        echo "<div style = 'font-size:18px; font-weight:500; '>";
        echo "Số câu đã làm: $socaulam <br>";
        echo "Số câu đúng: $dung <br>";
        $diem = $dung*0.25;
        echo "Điểm của bạn: $diem <br>";
        echo "</div>";
        $laycau = "SELECT * FROM cauhoithi where made = $made";
        $kq = mysqli_query($conn4, $laycau);
        $cau = 1;

        echo "<br><b style = 'color: #000080';>MỜI BẠN XEM LẠI BÀI LÀM VÀ ĐÁP ÁN </b><BR>";
        $index = 0;
        while($row2 = mysqli_fetch_array($kq))
        {
            $dapan2 = "cau".$index;
            if(isset($_POST[$dapan2]))
            {
                $chon = $_POST[$dapan2];
                $a = checked($row2['dapan'],$chon,$row2['a']);
                $b = checked($row2['dapan'],$chon,$row2['b']);
                $c = checked($row2['dapan'],$chon,$row2['c']);
                $d = checked($row2['dapan'],$chon,$row2['d']);

                echo "<b>Câu $cau: ".$row2['noidung']."<br> </b>";
                echo
                "&emsp;<c $a> A. ".$row2['a']."</c><br>".
                "&emsp;<c $b> B. ".$row2['b']."</c><br>".
                "&emsp;<c $c> C. ".$row2['c']."</c><br>".
                "&emsp;<c $d> D. ".$row2['d']."</c><br>";
                echo "Đáp án:<b style = 'color: #008080';> " .$row2['dapan']."<br></b>";
                echo "<br>";
            }
            else
            {
                echo "<b>Câu $cau: ".$row2['noidung']."<br> </b>";
				echo 
				" &emsp;A. ".$row2['a']."<br>".
				" &emsp;B. ".$row2['b']."<br>".
				" &emsp;C. ".$row2['c']."<br>".
				" &emsp;D. ".$row2['d']."<br>";
				echo "Đáp án:<b style = 'color: #008080';> " .$row2['dapan']."<br></b>";
                echo "<br>";
            }
            $cau++;
            $index++;
        }
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $timestamp = time();
        $ngay = date('Y-m-d', $timestamp);
        $gio = date('H:i:s', $timestamp);
    
        $addkq = "INSERT INTO `lichsu`(`mahs`, `ngaythi`, `thoigian`, `diem`, `loaithi`, `madot`) 
        VALUES ('$mahs','$ngay','$gio','$diem','Thi thử','1')";
        $kq2 = mysqli_query($conn4, $addkq) or die("Loi");
        echo "<div>";
        echo "<button name='button' type='button' onclick = 'quaylaitrangchu()'>Trang chủ</button>";
        echo "</div>";
        echo "</div>";
    }
?>

<script type="text/javascript">
function quaylaitrangchu() {
    window.location = "../index.php";
}
</script>