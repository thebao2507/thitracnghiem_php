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
</head>

<body>
    <?php 
        if(isset($_SESSION['mahocsinh']))
        {
            //kết nối dữ liệu
            $mahs = $_SESSION['mahocsinh'];
            $connect = new mysqli("localhost", "root", "", "qlthithpt") or die("Không kết nối được ");
            //xây dựng truy vấn
            $sqlcomd = "SELECT * FROM lichsu WHERE mahs = '$mahs' ORDER BY thoigian DESC";
            $kqls = $connect->query($sqlcomd);
        }
    ?>
    <div style = 'padding-top:40px; padding-left:30px;'>
    <div class="quaylai">
        <button><a href="xemthongtin.php" style = "color : white;">quay lại</a></button>
        </div>
    </div>
    <div class=" py-4">
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>MAHS</th>
                    <th>Ngày Thi</th>
                    <th>Thời gian</th>
                    <th>Điểm</th>
                    <th>Loại Thi</th>
                    <th>Mã Đợt</th>
                </tr>
            </thead>
            <?php
            while($row = $kqls->fetch_array())
            {
            ?>
            <tbody id="myTable">
                <tr>
                    <td><?php echo $row['mahs'] ?></td>
                    <td><?php echo $row['ngaythi'] ?></td>
                    <td><?php echo $row['thoigian'] ?></td>
                    <td><?php echo $row['diem'] ?></td>
                    <td><?php echo $row['loaithi'] ?></td>
                    <td><?php echo $row['madot'] ?></td>
                </tr>
            </tbody>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>