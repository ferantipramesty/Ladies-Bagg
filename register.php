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

if (
    empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) ||
    empty($mobile) || empty($address1) 
) {

    echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Kolom tidak boleh dikosongkan!</b>
			</div>
		";
    exit();
} else {
    if (!preg_match($name, $f_name)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>$f_name Tidak berhasil!</b>
			</div>
		";
        exit();
    }
    if (!preg_match($name, $l_name)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>$l_name Tidak berhasil!</b>
			</div>
		";
        exit();
    }
    if (!preg_match($emailValidation, $email)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Địa chỉ $email Tidak berhasil!</b>
			</div>
		";
        exit();
    }
    if (strlen($password) < 8) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Kata sandi terlalu lemah!</b>
			</div>
		";
        exit();
    }
    if (strlen($repassword) < 8) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Kata sandi terlalu lemah!</b>
			</div>
		";
        exit();
    }
    if ($password != $repassword) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Kata sandi tidak cocok!</b>
			</div>
		";
    }
    if (!preg_match($number, $mobile)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Nomor telepon $mobile tidak valid!</b>
			</div>
		";
        exit();
    }
    if ((strlen($mobile) < 10) || (strlen($mobile) > 11)) {
        echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Nomor telepon minimal 10 digit!</b>
			</div>
		";
        exit();
    }
    //existing email address in our database
    $sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_email = mysqli_num_rows($check_query);
    if ($count_email > 0) {
        echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Email ini sudah digunakan, silakan coba lagi!</b>
			</div>
		";
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
        if ($run_query) {
            echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Berhasil mendaftar!</b>
				</div>
                                <script type='text/javascript'>   
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