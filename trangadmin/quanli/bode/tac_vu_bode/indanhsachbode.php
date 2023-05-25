<?php
    //1. kết nối với database 
    $conn = new mysqli("localhost","root","","qlthithpt") or die("không kết nối được với database");

    //phân trang
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    // tìm tổng dữ liệu
    $tongdulieu = $conn->query("select count(mabode) as total from bode");
    $traketqua = $tongdulieu->fetch_assoc();
    $total_records = $traketqua['total'];
    $_SESSION['tongbode'] = $traketqua['total'];
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
    $sql = "SELECT * FROM bode limit $start, $limit";
    //trả về kết quả
    $result = $conn->query($sql);
    ?>
    <table width="100%">
        <thead>
            <tr>
                <td> MABODE </td>
                <td> Tên Bộ Đề </td>
                <td> Tác Vụ </td>
            </tr>
        </thead>
        <?php
        while($row = $result->fetch_array())
        {
        ?>
            <tbody>
                <tr>
                    <td style="width: 300px;">
                        <?php echo $row["mabode"] ?>
                    </td>
                    <td style="width: 300px;">
                        <?php echo $row['tenbd'] ?>
                    </td>
                    <td>
                        <button type="submit" name="delete" class="btn-1" onclick="inthongbaoxoa()"><a href="tac_vu_bode/xoa1bd.php?mabd=<?php echo $row['mabode'];?>"><i class="fa-solid fa-trash-can"></i></a></button>
                        <button type="submit" name="update" class="btn-2" onclick="inthongbaosuathongtin()"><a href="tac_vu_bode/suabode.php?mabd=<?php echo $row['mabode'];?>"><i class="fa-solid fa-pen-to-square"></i></a></button>
                        <button type="submit" name="seefull" class="btn-3" onclick=""><a href="tac_vu_bode/xemchitietcauhoi.php?mabd=<?php echo $row['mabode'];?>"><i class="fa-solid fa-eye"></i></a></button>
                        <button type="submit" name="upload" class="btn-4" onclick=""><a href="tac_vu_bode/loadbode.php?mabd=<?php echo $row['mabode'];?>"><img src="../../../img/icons8-upload-24.png"/></a></button>
                    </td>
                </tr>
            </tbody>

            <script type="text/javascript">
                function inthongbaoxoa() {
                    alert("Bạn có muốn xóa bộ đề này!");
                }

                function inthongbaosuathongtin() {
                    alert("Nhấn OK để sửa thông tin bộ đề!");
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
                $pagLink .= "<li><a class = 'active' href='quanlibode.php?page="
                .$i."'>".$i." </a></li>";
                }
                else  {
                $pagLink .= "<li><a href='quanlibode.php?page=".$i."'>
                ".$i." </a></li>";
                }
            }
            echo $pagLink;
        ?>
        </ul>
    </div>
    <?php
?>