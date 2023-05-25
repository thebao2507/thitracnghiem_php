<meta charset="utf8">
<form align="center" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"
            enctype="multipart/form-data">
            Chọn tập tin câu hỏi của bộ đề: <input type="file" name="myfile" size="30"/>
            <input type="submit" name = "submitname" value="Tải lên"/>
</form>

<?php
    if(isset($_FILES['myfile']['name']))
    {
        //lấy tên file up lên
        $ten = $_FILES['myfile']['name'];
        //tách tên file
        $mangten = explode('.', $ten);
        //lấy phần mở rộng của tệp tin
        $phanmorong = end($mangten);
        $file_up = $_FILES['myfile']['tmp_name'];
        if($phanmorong == "xml")
        {
            $dom = new DOMDocument();
            $dom->load("$file_up");
            $row = $dom->getElementsByTagName("Row");
            $dong=0;

            $conn = mysqli_connect("localhost","root","","qlthithpt");
            
            foreach ($row as $r) 
            {
                if ($dong>0)
                {
                    for ($i = 0; $i <=8; $i++) 
                    {
                        $a[$i] = $r->getElementsByTagName("Cell")->item($i)->nodeValue;
                    }

                    $kttrungmabode="select mabode from bode where mabode ='".$a[1]."'";
                    $kqbd = mysqli_query($conn,$kttrungmabode);
                    $trungmach="select mach from cauhoi where mach ='".$a[0]."'";
                    $kqch = mysqli_query($conn, $trungmach);
                    if($dong1=mysqli_fetch_array($kqbd))
                    {
                        if($dong2=mysqli_fetch_array($kqch))
                        {
                            //echo "<script type='text/javascript'>alert('Tồn tại mã câu hỏi bị trùng! Vui lòng kiểm tra lại dữ liệu!');</script>";
                            echo "Mã câu hỏi bị trùng: ".$dong2['mach']."<br/>";
                            continue;
                        }
                        else
                        {
                            $them="INSERT INTO `cauhoi`(`mach`, `mabode`, `noidung`, `hinhanh`, `a`, `b`, `c`, `d`, `dapan`) 
                                values('".$a[0]."','".$a[1]."','".$a[2]."','".$a[3]."','".$a[4]."','".$a[5]."','".$a[6]."','".$a[7]."','".$a[8]."')";
                            $sql=mysqli_query($conn,$them) or die("Không thể thực hiện câu truy vấn");
                        }
                    }
                    else
                    {
                        echo "<b style = 'color: red';> Mã bộ đề không tương thích là: </b>".$a[1]."<br/>";
                        continue;
                    }
                }
                $dong=$dong+1;
            }
            mysqli_close($conn);
            echo "<script type='text/javascript'>alert('Cập nhật thành công câu hỏi cho bộ đề này!');</script>";
            echo "<script type='text/javascript'>alert('Nội dung bị trùng (nếu có) sẽ không được cập nhật!');</script>";
            exit();
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Chọn sai loại file, vui lòng tải lên file .xml');</script>";
            //echo "<p align = 'center' style = 'color: red'>Chọn sai loại file, vui lòng tải lên file .xml </p><br/>";
            //echo "<a href='loadbode.php'> Tải lại </a>";
        }
    }
?>