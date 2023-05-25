<?php
    //1. kết nối với database 
    $conn = new mysqli("localhost","root","","qlthithpt") or die("không kết nối được với database");

    //phân trang
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    // tìm tổng dữ liệu
    $tongdulieu = $conn->query("select count(maphong) as total from phong");
    $traketqua = $tongdulieu->fetch_assoc();
    $total_records = $traketqua['total'];
    $_SESSION['tongphongthi'] = $traketqua['total'];
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
    $sql = "SELECT * FROM phong limit $start, $limit";
    //trả về kết quả
    $result = $conn->query($sql);
    ?>
<table width="100%">
    <thead>
        <tr>
            <td> Mã Phòng </td>
            <td> Tên Phòng </td>
            <td> Tác Vụ </td>
        </tr>
    </thead>
    <?php
        while($row = $result->fetch_array())
        {
        ?>
    <tbody>
        <tr>
            <td style = "width: 300px;"><?php echo $row["maphong"] ?></td>
            <td style = "width: 300px;"><?php echo $row['tenphong'] ?></td>
            <td>
                <button type="submit" name="delete" class="btn-1" onclick = "return confirm('bạn có muốn xóa phòng thi này này?');"><a href="tac_vu_phongthi/xoaphongthi.php?mapt=<?php echo $row["maphong"]; ?>"><i class="fa-solid fa-trash-can"></i></a></button>
                <button type="submit" name="update" class="btn-2" onclick = "inthongbaosuathongtin()"><a href="tac_vu_phongthi/suaphongthi.php?mapt=<?php echo $row["maphong"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                <button type="submit" name="seefull" class="btn-3" onclick = ""><a href="tac_vu_phongthi/xemchitietphong.php?mapt=<?php echo $row['maphong'];?>"><i class="fa-solid fa-eye"></i></a></button>
            </td>
        </tr>
    </tbody>

    <script type ="text/javascript">
            function inthongbaoxoa(){
                alert("Bạn có muốn xóa phòng thi này!");
            }

            function inthongbaosuathongtin() {
                alert("Nhấn OK để sửa thông tin phòng thi!");
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
                $pagLink .= "<li><a class = 'active' href='quanliphongthi.php?page="
                .$i."'>".$i." </a></li>";
                }
                else  {
                $pagLink .= "<li><a href='quanliphongthi.php?page=".$i."'>
                ".$i." </a></li>";
                }
            }
            echo $pagLink;
        ?>
    </ul>
</div>
<?php
?>