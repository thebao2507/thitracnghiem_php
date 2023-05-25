<?php

    //1. kết nối với database 
    $conn = new mysqli("localhost","root","","qlthithpt") or die("không kết nối được với database");

    //phân trang
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    // tìm tổng dữ liệu
    $tongdulieu = $conn->query("select count(mahs) as total from hocsinh");
    $traketqua = $tongdulieu->fetch_assoc();
    $total_records = $traketqua['total'];
    //in lên danh sách quản lí
    $_SESSION['tonghocsinh'] = $traketqua['total'];
    // tính tổng trang
    $total_page = ceil($total_records / $limit);
    // giới hạn
    if ($current_page > $total_page){
        $current_page = $total_page;
    }
    else if ($current_page < 1){
         $current_page = 1;
    }
    //tìm điểm bắt đầu
    $start = ($current_page - 1) * $limit;

    // câu lệnh sql
    $sql = "SELECT * FROM hocsinh limit $start, $limit";
    //trả về kết quả
    $result = $conn->query($sql);
    ?>
<table width="100%">
    <thead>
        <tr>
            <td> MAHS </td>
            <td> Tên học sinh </td>
            <td> Ngày sinh </td>
            <td> Giới tính </td>
            <td> CCCD </td>
            <td> Số điện thoại </td>
            <td> Email </td>
            <td> Địa chỉ </td>
            <td> MAPH </td>
            <td> Tác Vụ </td>
        </tr>
    </thead>
    <?php
        while($row = $result->fetch_array())
        {
        ?>
    <tbody>
        <tr>
            <td><?php echo $row["mahs"] ?></td>
            <td><?php echo $row['tenhs'] ?></td>
            <td><?php echo $row['ngaysinh'] ?></td>
            <td><?php echo $row['gioitinh']?></td>
            <td><?php echo $row['cccd']?></td>
            <td><?php echo $row['sdt']?></td>
            <td><?php echo $row['email']?></td>
            <td><?php echo $row['diachi']?></td>
            <td><?php echo $row['maphong']?></td>
            <td>
                <button type="submit" name="delete" class="btn-1" onclick = "return confirm('bạn có muốn xóa học sinh này?');"><a href="tac_vu/xoa1hs.php?mahs=<?php echo $row['mahs'];?>"><i class="fa-solid fa-trash-can"></i></a></button>
                <button type="submit" name="delete" class="btn-2" onclick = "inthongbaosuathongtin()"><a href="tac_vu/suathongtinhs.php?mahs=<?php echo $row["mahs"];?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
            </td>
        </tr>
    </tbody>

    <script type ="text/javascript">
            function inthongbaosuathongtin() {
                alert("Nhấn OK để sửa thông tin học sinh!");
            }
    </script>
    <?php
        }
        ?>
</table>
<div>
    <ul class="panigation">
        <?php 
            $pagLink = "";
            for ($i=1; $i<=$total_page; $i++) {
                if ($i == $current_page) {
                $pagLink .= "<li><a class = 'active' href='quanlihocsinh.php?page="
                .$i."'>".$i." </a></li>";
                }
                else  {
                $pagLink .= "<li><a href='quanlihocsinh.php?page=".$i."'>
                ".$i." </a></li>";
                }
            }
            echo $pagLink;
        ?>
    </ul>
</div>
<?php
?>
