<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
    html {
        font-size: 14px;
    }

    .py-4 {
        padding-left: 30px;
        padding-right: 30px;
    }


    .search {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1);

    }

    .search input {

        height: 50px;
        text-indent: 25px;
        border: 2px solid #e6e6ea;


    }


    .search input:focus {

        box-shadow: none;
        border: 2px solid #36454f;


    }

    .search .fa-search {

        position: absolute;
        top: 20px;
        left: 16px;

    }

    .search button {

        position: absolute;
        top: 5px;
        right: 5px;
        height: 40px;
        width: 110px;
        background: #bbbbbb;
        border: #1e1f26;
    }

    .search button:hover {
        background-color: #1e1f26;
        border: #1e1f26;
    }

    .btn-1 a {
        color: #fff;
    }

    td button:hover {
        cursor: pointer;
        opacity: 0.5;
    }

    td button {
        border: none;
        background: none;
    }


    .btn-1 {
        width: 40px;
        height: 30px;
        background: rgb(233, 62, 62);
        border-radius: 5px;
    }

    .quaylai {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-left:28px;
    padding-top:20px;
    }

    .quaylai button {
    background: black;
    color: #fff;
    border-radius: 10px;
    font-size: 1rem;
    padding: .5rem 1rem;
    border: 1px solid var(--main-color);
    }
    .quaylai button a{
        text-decoration:none;
    }

    .quaylai button:hover {
    opacity: 0.7;
    cursor: pointer;
    }
    </style>

    <script>
    $(document).ready(function() {
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
    </script>

</head>

<body>
    <?php 
        $maphong = $_GET['mapt'];
        $_SESSION['mabode'] = $maphong;
        $conn = new mysqli("localhost","root","","qlthithpt") or die("không kết nối được với database");

        //phân trang
        /*$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        // tìm tổng dữ liệu
        $dem = "SELECT count(mach) AS total FROM cauhoi WHERE mabode = '$mabode'";
        $tongdulieu = $conn->query($dem);
        $traketqua = $tongdulieu->fetch_assoc();
        $total_records = $traketqua['total'];
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
        $start = ($current_page - 1) * $limit;*/
    
        // câu lệnh sql
        $sql = "SELECT * FROM hocsinh INNER JOIN phong ON hocsinh.maphong = phong.maphong WHERE phong.maphong = '$maphong'";
        //trả về kết quả
        $result = mysqli_query($conn,$sql);
        $tong=mysqli_query($conn,"SELECT count(*) as total FROM hocsinh INNER JOIN phong ON hocsinh.maphong = phong.maphong WHERE phong.maphong = '$maphong'");
        $data=mysqli_fetch_assoc($tong);
    ?>
    <div>
        <div class="quaylai">
        <button><a href="../quanliphongthi.php" style = "color : white;">quay lại</a></button>
        </div>
        <h4 style="padding-left:30px; padding-top:10px;"> Mã phòng thi : <?php echo $maphong ?> &nbsp Số Học sinh: <?php echo $data['total']; ?></h4>
        <div class="container">

            <div class="row height d-flex justify-content-center align-items-center">

                <div class="col-md-8">

                    <div class="search" style="display:flex;">
                        <i class="fa fa-search"></i>
                        <input type="text" class="form-control" placeholder="Nhập từ khóa" id="myInput">
                        <button class="btn btn-primary" style=" width:70px;">Tìm</button>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <div class=" py-4">
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>MAHS</th>
                    <th>Họ Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Giới Tính</th>
                    <th>CCCD</th>
                    <th>SDT</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Tác vụ</th>
                </tr>
            </thead>
            <?php
            while($row = $result->fetch_array())
            {
            ?>
            <tbody id="myTable">
                <tr>
                    <td><?php echo $row['mahs'] ?></td>
                    <td><?php echo $row['tenhs'] ?></td>
                    <td><?php echo $row['ngaysinh'] ?></td>
                    <td><?php echo $row['gioitinh'] ?></td>
                    <td><?php echo $row['cccd'] ?></td>
                    <td><?php echo $row['sdt'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['diachi'] ?></td>
                    <td>
                        <button type="submit" name="delete" class="btn-1" onclick="inthongbaoxoa()">
                            <a href="../../hocsinh/tac_vu/xoa1hs.php?mahs=<?php echo $row['mahs'];?>"><i class="fa-solid fa-trash-can"></i></a>
                        </button>
                    </td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>