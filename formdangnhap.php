<?php include 'xulydangnhap.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="dangnhap.css">
</head>

<body class="signin">
    <section>
        <div class="sign-top">
            <div class="row">
                <div class="col-md-6">
                    <a href="#" class="logobig" style = "height:100px;"></a>
                </div>
                <div class="col-md-6 text-right">
                    <div class="hotline clearfix">
                        <p>LIÊN HỆ SĐT:</p>
                        <h2>1234 123 125</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---->
    <section>
        <div class="signinpanel clearfix">
            <div class="row signinpanel-div clearfix">
                <div class="col-md-5">
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                        <h3 class="nomargin">Đăng nhập</h3>
                        <input class="form-control uname" id="UserName" name="UserName" placeholder="Tên đăng nhập" type="text" value="">
                        <div class="mgt">
                            <span style="color: red; display: none; font-size: 11px" id="confirmCodeNull">(*) Bạn chưa nhập mật khẩu</span>
                        </div>
                        <input autocomplete="off" class="form-control pword" id="Code" name="Code" placeholder="Mật khẩu" type="password" value="">
                        <a href="#" onclick="forgotCode();"><small>Quên mật khẩu?</small></a>
                        <div class="mgt" id="err-msg" style="color: red;"></div>
                        <input type="submit" id="btn-dangnhap" class="btn btn-success btn-block btn-login" value="ĐĂNG NHẬP">
                    </form>
                </div>

                <div class="col-md-7">
                    <div class="sign-infor">
                        <div class="panel">
                            <h3>Giới Thiệu</h3>
                        </div>
                        <!---->
                        <div class="log-content" id="divscroll">
                            <ul>
                                <li>
                                    Hệ thống thi trắc nghiệm gồm các chức năng thi thử, thi thật, xem điểm đối với học sinh. Còn phần admin là quyền truy cập dữ liệu quản lí học sinh, bộ đề thi.. 
                                </li>
                                <li>
                                    Một số khuyến nghị và lưu ý đối với thí sinh khi đăng ký dự thi trắc nghiệm năm 2022 theo hình thức trực tuyến.
                                </li>
                                <li>
                                    Thí sinh chưa có Mã đăng nhập vui lòng liên hệ Điểm tiếp nhận đăng ký dự thi để lấy tài khoản mật khẩu.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

