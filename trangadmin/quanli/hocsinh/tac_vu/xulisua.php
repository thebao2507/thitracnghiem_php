<?php
        if(isset($_POST["nut"]))
        {
                $conn = new mysqli("localhost","root","","qlthithpt") or die("không thể kết nối với database");
        // lấy dữ liệu lưu vào biến
                $mahocsinh = $_POST["ma"];
                $tenhocsinh = $_POST["ten"];
                $ngaysinhhs = $_POST["ngaysinh"];
                $gioitinhhs = $_POST["gioitinh"];
                $cancuochs = $_POST["cccd"];
                $sodienthoai = $_POST["sdt"];
                $emailhs = $_POST["email"];
                $diachihs = $_POST["dchi"];
                $mphs = $_POST["mphong"];
                // thực hiện update
                $sqlupdate = "UPDATE hocsinh SET tenhs = '$tenhocsinh' , ngaysinh = '$ngaysinhhs' , gioitinh = '$gioitinhhs' , cccd = '$cancuochs',
                        sdt = '$sodienthoai' , email = '$emailhs' , diachi = '$diachihs' , maphong = '$mphs' WHERE mahs = '$mahocsinh' "; 
                if($conn->query($sqlupdate))
                {                  
                   ?> <script>
                        window.alert("Sửa thông tin thành công!");
                        window.location = "../quanlihocsinh.php";
                      </script> 
                   <?php
                }
        }
?>