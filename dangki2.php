<?php

include "db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$name = "/^[A-Z][a-zA-Z ]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if (empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
        empty($mobile) || empty($address1)) {

    echo "<script>alert('Các trường không được để trống!')</script>";
    exit();
} else {
    if (!preg_match($name, $f_name)) {
        echo "<script>alert('$f_name không hợp lệ!')</script>";
        exit();
    }
    if (!preg_match($name, $l_name)) {
        echo "<script>alert('$l_name không hợp lệ!')</script>";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "<script>alert('Địa chỉ $email Không hợp lệ!')</script>";
        exit();
    }
    if (strlen($password) < 8) {
        echo "<script>alert('Mật khẩu quá yếu!')</script>";
        exit();
    }
    if (strlen($repassword) < 8) {
        echo "<script>alert('Mật khẩu quá yếu!')</script>";
        exit();
    }
    if ($password != $repassword) {
        echo "<script>alert('Mật khẩu không khớp!')</script>";
        exit();
    }
    if (!preg_match($number, $mobile)) {
        echo "<script>alert('Số điện thoại $mobile không hợp lệ!')</script>";
        exit();
    }
    if ((strlen($mobile) < 10) || (strlen($mobile) > 11)) {
        echo "<script>alert('Số điện thoại tối thiểu 10 số!')</script>";
        exit();
    }
    //existing email address in our database
    $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "<script>alert('Email này đã tồn tại bởi một tài khoản khác, vui lòng thử lại!')</script>";
        exit();
    } else {
        // $password = md5($password);
        $password = ($password);
        $sql = "INSERT INTO `user_info` 
		(`user_id`, `first_name`, `last_name`, `email`, 
		`password`, `mobile`, `address1`) 
		VALUES (NULL, '$f_name', '$l_name', '$email', 
		'$password', '$mobile', '$address1')";
        $run_query = mysqli_query($con, $sql);


        $sql1 = "SELECT * FROM Guest;";                         //SQL querry
        $run_query1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($run_query1);
        if ($count > 0) {
            $no = 1;
            $total_amt = 0;
            while ($row = mysqli_fetch_array($run_query1)) {
                $qty = $row["Qty"];
                $pro_price = $row["Price"];
                $total = $row["Total_amt"];
                $price_array = array($total);
                $total_sum = array_sum($price_array);
                $total_amt = $total_amt + $total_sum;
            }
        }

        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $timeok = time();
        $date_orderok = date("d-m-Y H:i:s", $timeok);


        include('Guest.php');



        if ($run_query) {
            echo "
            <script type='text/javascript'>   
                alert('Thanh toán thành công. Đóng cửa sổ này để tiếp tục mua hàng.')
                $('#f_name').val('');
                $('#l_name').val('');
                $('#email').val('');
                $('#password').val('');
                $('#repassword').val('');
                $('#mobile').val('');
                $('#address1').val('');
            </script>
			";
        }
    }
}



?>