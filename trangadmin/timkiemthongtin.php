<meta charset="UTF-8">
<?php 
                if (isset($_POST['key']))
                {
                    $ndung = $_POST['chon'];
                    $conn = new mysqli("localhost", "root", "", "qlthithpt") or die("Không kết nối được");
                    //$conn->query($conn, "set names 'utf8'");
                    //nếu bộ lọc chọn tìm kiếm học sinh:
                    if($ndung == "hocsinh")
                    {?>
                        <h4 class= "ting">Kết quả tìm kiếm</h4>
                        <?php
                        $keyhs = $_POST['key'];
                        $sqlhs="select * from hocsinh where (mahs='".$keyhs."' 
                            or tenhs  LIKE '%$keyhs%' or ngaysinh  LIKE '%$keyhs%' or gioitinh LIKE '%$keyhs%') ";
                        $result = $conn->query($sqlhs);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> Mã học sinh </td>
                                    <td> Tên học sinh </td>
                                    <td> Ngày sinh </td>
                                    <td> Giới tính </td>
                                    <td> Cccd </td>
                                    <td> Số điện thoại </td>
                                    <td> Email </td>
                                    <td> Địa chỉ </td>
                                    <td> Mã phòng </td>
                                </tr>
                            </thead>
                        <?php
                        while($row = $result->fetch_array())
                        {
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['mahs'] ?></td>
                                    <td><?php echo $row['tenhs'] ?></td>
                                    <td><?php echo $row['ngaysinh'] ?></td>
                                    <td><?php echo $row['gioitinh']?></td>
                                    <td><?php echo $row['cccd']?></td>
                                    <td><?php echo $row['sdt']?></td>
                                    <td><?php echo $row['email']?></td>
                                    <td><?php echo $row['diachi']?></td>
                                    <td><?php echo $row['maphong']?></td>
                                </tr>
                            </tbody>
                        <?php
                        } 
                        ?>
                        </table>
                <?php
                    }
                    if($ndung == "cauhoi")
                    {
                        $keych = $_POST['key'];
                        $sqlch="select * from cauhoi where (mach ='".$keych."' or noidung LIKE '%$keych%') ";
                        $kqch = mysqli_query($conn, $sqlch);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> Mã câu hỏi </td>
                                    <td> Mã bộ đề </td>
                                    <td> Nội dung </td>
                                    <td> Hình ảnh </td>
                                    <td> Đáp án A </td>
                                    <td> Đáp án B </td>
                                    <td> Đáp án C </td>
                                    <td> Đáp án D </td>
                                    <td> Câu đúng </td>
                                </tr>
                            </thead>
                        <?php
                        while($row = mysqli_fetch_array($kqch))
                        {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['mach'] ?></td>
                                    <td><?php echo $row['mabode'] ?></td>
                                    <td text-overflow ="ellipsis"><?php echo $row['noidung'] ?></td>
                                    <td><img src="<?php echo $row['hinhanh']?>" height = "120px" width = "120px"></td>
                                    <td><?php echo $row['a']?></td>
                                    <td><?php echo $row['b']?></td>
                                    <td><?php echo $row['c']?></td>
                                    <td><?php echo $row['d']?></td>
                                    <td><?php echo $row['dapan']?></td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                       </table>
                    <?php
                    }
                    if($ndung == "bode")
                    {
                        $keybd = $_POST['key'];
                        $sqlbd="select * from bode inner join cauhoi on bode.mabode = cauhoi.mabode 
                            where (bode.mabode ='".$keybd."' or bode.tenbd LIKE '%$keybd%')";
                        $kqbd = mysqli_query($conn, $sqlbd);
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td> Mã câu hỏi </td>
                                    <td> Mã bộ đề </td>
                                    <td> Nội dung </td>
                                    <td> Hình ảnh </td>
                                    <td> Đáp án A </td>
                                    <td> Đáp án B </td>
                                    <td> Đáp án C </td>
                                    <td> Đáp án D </td>
                                    <td text-overflow ="normal"> Câu đúng </td>
                                </tr>
                            </thead>
                        <?php
                        while($row = mysqli_fetch_array($kqbd))
                        {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $row['mach'] ?></td>
                                    <td><?php echo $row['mabode'] ?></td>
                                    <td text-overflow ="ellipsis"><?php echo $row['noidung'] ?></td>
                                    <td><img src="<?php echo $row['hinhanh']?>" height = "120px" width = "120px"></td>
                                    <td><?php echo $row['a']?></td>
                                    <td><?php echo $row['b']?></td>
                                    <td><?php echo $row['c']?></td>
                                    <td><?php echo $row['d']?></td>
                                    <td><?php echo $row['dapan']?></td>
                                </tr>
                            </tbody>
                        <?php
                        }
                        ?>
                        </table>
                    <?php
                    }
                } 
            ?>