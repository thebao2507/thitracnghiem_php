<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xem mật khẩu thi</title>
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
    .py-4{
        display:flex;
        justify-content:center;
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
        $conn = mysqli_connect("localhost", "root", "", "qlthithpt");
        $sql = "SELECT * FROM matkhauthi";
        $result = $conn->query($sql);
        $stt=1;
    ?>
    <div>
        <div class="quaylai">
        <button><a href="../quanliphongthi.php" style = "color : white;">quay lại</a></button>
        </div>
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
        <table class="table table-striped" style="width:50%">
            <thead>
                <tr>
                    <th style = "padding-left:60px;">STT</th>
                    <th style = "padding-left:60px;">MAHS</th>
                    <th style = "padding-left:60px;">MATKHAU</th>
                </tr>
            </thead>
            <?php
            while($row = $result->fetch_array())
            {
            ?>
            <tbody id="myTable">
                <tr>
                    <td style = "padding-left:60px;"><?php echo $stt++ ?></td>
                    <td style = "padding-left:60px;"><?php echo $row['mahs'] ?></td>
                    <td style = "padding-left:60px;"><?php echo $row['matkhau'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    </div>
</body>
</html>