<?php
    //1. kết nối với database 
    $conn = new mysqli("localhost","root","","qlthithpt") or die("không kết nối được với database");

    //phân trang
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    // tìm tổng dữ liệu
    $tongdulieu = $conn->query("select count(madot) as total from dotthi");
    $traketqua = $tongdulieu->fetch_assoc();
    $total_records = $traketqua['total'];
    $_SESSION['dotthi'] = $traketqua['total'];
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
    $sql = "SELECT * FROM dotthi limit $start, $limit";
    //trả về kết quả
    $result = $conn->query($sql);
    ?>
<table width="100%">
    <thead>
        <tr>
            <td> Mã Đợt </td>
            <td> Tên đợt thi </td>
            <td> Thời gian mở </td>
            <td> Thời gian đóng </td>
            <td> Tác vụ </td>
        </tr>
    </thead>
    <?php
        while($row = $result->fetch_array())
        {
        ?>
    <tbody>
        <tr>
            <td style = "width: 300px;"><?php echo $row["madot"] ?></td>
            <td style = "width: 300px;"><?php echo $row['tendotthi'] ?></td>
            <td style = "width: 300px;"><?php echo $row['thoigianmo'] ?></td>
            <td style = "width: 300px;"><?php echo $row['thoigiandong'] ?></td>
            <td>
                <button type="submit" name="update" class="btn-2" onclick = "inthongbaosuathongtin()"><a href="tac_vu_dotthi/suadotthi.php?madt=<?php echo $row["madot"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
            </td>
        </tr>
    </tbody>

    <script type ="text/javascript">
            function inthongbaosuathongtin() {
                alert("Nhấn OK để sửa thông tin đợt thi!");
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
                $pagLink .= "<li><a class = 'active' href='quanlidotthi.php?page="
                .$i."'>".$i." </a></li>";
                }
                else  {
                $pagLink .= "<li><a href='quanlidotthi.php?page=".$i."'>
                ".$i." </a></li>";
                }
            }
            echo $pagLink;
        ?>
    </ul>
</div>
<?php
?>