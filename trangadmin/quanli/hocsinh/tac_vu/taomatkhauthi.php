<meta charset = "utf8">
<?php
    $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    function generate_string($input, $strength = 16) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
        return $random_string;
    }

    $conn = mysqli_connect("localhost", "root", "", "qlthithpt");

    $hs = "SELECT mahs FROM hocsinh";
    $kqhs = mysqli_query($conn, $hs);
    while($rowhs = mysqli_fetch_array($kqhs))
    {
        $rand = generate_string($permitted_chars, 5);
        $mk = "SELECT mahs FROM matkhauthi WHERE mahs = '".$rowhs['mahs']."'";
        if(mysqli_num_rows(mysqli_query($conn, $mk))<=0)
        {
            $add = "INSERT INTO `matkhauthi`(`mahs`, `matkhau`) VALUES ('".$rowhs['mahs']."','$rand') ";
            $kqadd = mysqli_query($conn, $add);
        }
    }
    echo "<script type='text/javascript'>alert('Thành công!'); window.location = '../quanlihocsinh.php'</script>";
?>