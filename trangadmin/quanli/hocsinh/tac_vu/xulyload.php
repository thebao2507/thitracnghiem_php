<form align="center" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"
            enctype="multipart/form-data">
            Chọn tập tin danh sách học sinh: <input type="file" name="myfile" size="50"/>
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
            //mysqli_query($conn,"SET NAMES 'UTF8'");

            foreach ($row as $r) 
            {
                if ($dong>0)
                {
                    for ($i = 0; $i <=9; $i++) 
                    {
                        $a[$i] = $r->getElementsByTagName("Cell")->item($i)->nodeValue;
                    }

                    $kttrungmaphong="select maphong from phong where maphong ='".$a[9]."'";
                    $kqphong = mysqli_query($conn, $kttrungmaphong);
                    $trungmahs="select mahs from hocsinh where mahs ='".$a[1]."'";
                    $kqhs = mysqli_query($conn, $trungmahs);
                    if($dong1=mysqli_fetch_array($kqphong))
                    {
                        if($dong2=mysqli_fetch_array($kqhs))
                        {
                            echo "Mã học sinh bị trùng: ".$dong2['mahs']."</br>";
                            continue;
                        }
                        else
                        {
                            $them="INSERT INTO `hocsinh`(`mahs`, `tenhs`, `ngaysinh`, `gioitinh`, `cccd`, `sdt`, `email`, `diachi`, `maphong`) 
                                values('".$a[1]."','".$a[2]."','".$a[3]."','".$a[4]."','".$a[5]."','".$a[6]."','".$a[7]."','".$a[8]."','".$a[9]."')";
                            $sql=mysqli_query($conn,$them) or die("Không thể thực hiện câu truy vấn");
                        }
                    }
                    else
                    {
                        echo "<b style = 'color: red';> Mã phòng không tương thích là: </b>".$a[9]."<br/>";
                        continue;
                    }
                }
                $dong=$dong+1;
            }
            mysqli_close($conn);
            echo "<script type='text/javascript'>alert('Cập nhật thành công danh sách học sinh này!');</script>";
            echo "<script type='text/javascript'>alert('Các học sinh sai/trùng mã (nếu có) sẽ chưa được lưu!');</script>";
            exit();
        }
        else 
        {
            echo "<script type='text/javascript'>alert('Chọn sai loại file, vui lòng tải lên file .xml');</script>";
        }
    }
?>