<meta charset = "utf8">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
p {
    transform: translate(350px, -48px);
    text-align: center;
    font-size: 17px;
    margin-top: 0px;
    color: #005b96;
    font-weight:500;
}
</style>
</head>

<div id="dulieudong" style="display: none;">
    <?php 
        if(isset($_SESSION['giohet']))
        {
            $giohet = $_SESSION['giohet'];
            echo htmlspecialchars($giohet);
        }
    ?>
</div>

<p id="dongho"></p>

<div id = toanbo align="start">
<?php
//chọn đáp án đã chọn
        function checked($value, $compare)
        {
            if($value==$compare)
                $rs =  "checked='checked'";
            else
                $rs = '';
            return $rs;
        }
    //tạo ses này để lấy mã học sinh lưu lên data khi hs làm bài
    $_SESSION['mahs'] = $_SESSION['mahocsinh'];
    $mahs = $_SESSION['mahs'];
    $conn = mysqli_connect("localhost", "root", "", "qlthithpt")
    or die("Không kết nối được");
    mysqli_query($conn, "set names 'utf8'");

    $de = "SELECT `made` FROM `dethi` WHERE `loaide` = 'Thi thật' ORDER BY RAND () LIMIT 1"; 
    //$kqde = mysqli_query($conn, $de);
    $row = mysqli_fetch_array(mysqli_query($conn, $de));

    $getde = "SELECT made FROM bailam where mahs = $mahs";
    if($rowde = mysqli_fetch_array(mysqli_query($conn, $getde)))
    {
        $laycauhoi = "SELECT * from cauhoithi join dethi on cauhoithi.made = dethi.made
            where dethi.made = '".$rowde['made']."'";
    }
    else
        $laycauhoi = "SELECT * from cauhoithi join dethi on cauhoithi.made = dethi.made
            where dethi.made = '".$row['made']."'";
    $kqch = mysqli_query($conn, $laycauhoi);
    $_SESSION['mde'] = $rowde['made'];
    $cau = 1;
    $index = 0;
    while($row2 = mysqli_fetch_array($kqch))
    {
        $macauhoi = $row2['macht'];
        $getTl = "SELECT hschon FROM bailam where mahs = $mahs and mach = $macauhoi";
        $kqTL = mysqli_query($conn, $getTl);
        if ($rowTL = mysqli_fetch_array($kqTL))
        {
            $hschon = $rowTL['hschon'];
        }
        else
            $hschon = "";
        if($index == 0)
        {
            echo "<div id = '".$row2['macht']."' style = 'margin-left:182px;'>";
        }
        else
        {
            echo "<div id = '".$row2['macht']."' style='display: none; margin-left:185px;'>";
        }
            echo "<b style = 'color: #00008B';>Câu $cau: ".$row2['noidung']."<br> </b>";
            if(!empty($row2['hinhanh']))
                echo "<img style = 'width: 550px; margin-top:4px;' src = 'ThiDiaLy_IMG/".substr($row2['hinhanh'], 12, 8)."'>";
            $a = checked($hschon, $row2['a']);
            $b = checked($hschon, $row2['b']);
            $c = checked($hschon, $row2['c']);
            $d = checked($hschon, $row2['d']);

            echo "<input type='text' id='thutu$index' value=".$row2['macht']." hidden>".
            "<input type='text' id='made' value=".$row2['made']." hidden>".
            "<input type='text' id='mahs' value=".$_SESSION['mahs']." hidden>".
            "<div class = 'cautraloi' style = 'font-size:17px; margin-bottom: -12px; width:650px; border-radius:20px; padding: 5px 0px 4px 3px; border: 1px solid black; margin-top: 6px;'><input style='height:20px; width:20px; vertical-align: middle; border: 1px solid black;' type='radio' $a value='".$row2['a']."' name='cau$index'/><b> A. </b>".$row2['a']."</div><br>".
            "<div class = 'cautraloi' style = 'font-size:17px; margin-bottom: -12px; width:650px; border-radius:20px; padding: 5px 0px 4px 3px; border: 1px solid black; margin-top: 6px;'><input style='height:20px; width:20px; vertical-align: middle; border: 1px solid black;' type='radio' $b value='".$row2['b']."' name='cau$index'/><b> B. </b>".$row2['b']."</div><br>".
            "<div class = 'cautraloi' style = 'font-size:17px; margin-bottom: -12px; width:650px; border-radius:20px; padding: 5px 0px 4px 3px; border: 1px solid black; margin-top: 6px;'><input style='height:20px; width:20px; vertical-align: middle; border: 1px solid black;' type='radio' $c value='".$row2['c']."' name='cau$index'/><b> C. </b>".$row2['c']."</div><br>".
            "<div class = 'cautraloi' style = 'font-size:17px; margin-bottom: -12px; width:650px; border-radius:20px; padding: 5px 0px 4px 3px; border: 1px solid black; margin-top: 6px;'><input style='height:20px; width:20px; vertical-align: middle; border: 1px solid black;' type='radio' $d value='".$row2['d']."' name='cau$index'/><b> D. </b>".$row2['d']."</div><br>";
        echo "</div>";
            $cau = $cau + 1;
        $index++;
    }
    echo "<div id = 'phantrang' style = 'text-align:center;'>";
    for($i=1; $i<=40; $i++)
    {   
        if($i % 10 == 1)
        {
            echo "<br>";
        }
        echo "<input type='button' id = '".$i."' onClick='hienThi($i-1)' value = '".$i."'/>";
    }
    echo "</div>";
    //cau hoi truoc va sau
    echo "<div id=chuyen style = 'text-align:center;'>";
    echo "<input type='button' style = 'width:80px;' onClick='last()' id = 'truoc' value = 'Trước'/>";
    echo "<input type='button' style = 'width:70px;' onClick='next()'  id = 'sau' value = 'Sau'/>";
    echo "</div>";
?>   
    <input type="submit" style = "width: 94px; margin-left:436px;" name = "danop" onclick="xacNhan()" value="Nộp bài"/>    
</div>

<?php
if (isset($_POST['danop']))
{
    $nop = $_POST['danop'];
        echo "Nop thanh cong";
}
?>

<script>
    let cauHoiHienTai = 0;
    
    function last()
    {
    luuKQ(cauHoiHienTai);
    //ẩn câu hỏi hiện tại
    document.getElementById("toanbo").children[cauHoiHienTai].style.display = "none";
    if(cauHoiHienTai == 0)
    {
        document.getElementById("toanbo").children[39].style.display = "block";
        cauHoiHienTai = 39;
    }
    else
    {
        //hiển thị câu hỏi truoc do
        document.getElementById("toanbo").children[cauHoiHienTai-1].style.display = "block";
        cauHoiHienTai = cauHoiHienTai-1;
    }
    }

    function next()
    {
    luuKQ(cauHoiHienTai);
    // ẩn câu hỏi hiện tại
    document.getElementById("toanbo").children[cauHoiHienTai].style.display = "none";
    if(cauHoiHienTai == 39)
    {
        document.getElementById("toanbo").children[0].style.display = "block";
        cauHoiHienTai = 0;
    }
    else
    {
        //hiển thị câu hỏi truoc do
        document.getElementById("toanbo").children[cauHoiHienTai+1].style.display = "block";
        cauHoiHienTai = cauHoiHienTai+1;
    }
    }

    function hienThi(cauHoi)
    {
    luuKQ(cauHoiHienTai);
    // ẩn câu hỏi hiện tại
    document.getElementById("toanbo").children[cauHoiHienTai].style.display = "none";

    //hiển thị câu hỏi đã chọn
    document.getElementById("toanbo").children[cauHoi].style.display = "block";
    cauHoiHienTai = cauHoi;
    }

    function layTL(ten)
    { 
        var name = "cau" + ten;
        var checkbox = document.getElementsByName(name);
        for (var i = 0; i < checkbox.length; i++)
        {
            if (checkbox[i].checked === true)
            {
                setColor(ten+1);
                return checkbox[i].value;
            }
        }
    }

    function luuKQ(cau)
    {
        var so = "#thutu" + cau;
        var macauhoi = $(so).val();
        var made = $('#made').val();
        var mahs = $('#mahs').val();
        var hschon = layTL(cau);
        
        $.ajax({
            url: "luucautraloi.php",
            method: "POST",
            data:{
                macauhoi:macauhoi,
                made:made,
                mahs:mahs,
                hschon:hschon
            }
        }); 
    }

    function setColor(btn)
    {
        var count=1;
        var property = document.getElementById(btn);
        if (count == 0){
            property.style.backgroundColor = "#FFFFFF"
            count=1;        
        }
        else{
            property.style.backgroundColor = "#6497b1"
            count=0;
        }
    }

    function xacNhan()
    {
        var soRa = $('input:radio:checked').length;
        if(soRa < 40)
        {
            var result2 = confirm("Bạn chưa điền hết đáp án? Vẫn nộp bài?");
            if (result2 == true) 
            {
                alert("Bạn đã nộp bài!");
                window.location = "chamdiem.php";
            }
        }
        else
        {
            var result1 = confirm("Bạn có chắc chắn muốn nộp bài thi không?");
            if (result1 == true) 
            {
                alert("Bạn đã nộp bài!");
                window.location = "chamdiem.php";
            }
        }
    }
    function demnguoc()
    {
        var dl = document.getElementById("dulieudong");
        var myData = dl.textContent;
        //Đặt thời điểm đếm ngược
        var countDownDate = new Date(myData).getTime();
        //Cập nhật đếm ngược sau mỗi 1 giây
        var x = setInterval(function() {
        //Lấy ngày giờ hiện tại
        var now = new Date().getTime();
        //Tìm khoảng cách giữa bây giờ và ngày đếm ngược
        var distance = countDownDate - now; 

        // Tính toán thời gian cho ngày, giờ, phút và giây
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        //Xuất kết quả trong phần tử có id = "demo"
        document.getElementById("dongho").innerHTML = "Thời gian còn lại: "+ minutes + "m " + seconds + "s ";
            
        // Nếu quá trình đếm ngược kết thúc
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("dongho").innerHTML = "HẾT GIỜ";
            window.location = "chamdiem.php";
        }
        }, 1000);
    }   
    demnguoc();
</script>