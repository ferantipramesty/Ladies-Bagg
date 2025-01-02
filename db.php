<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "shop";

// Buat koneksi
$con = mysqli_connect($servername, $username, $password, $db);

// Set karakter UTF-8
mysqli_set_charset($con, 'UTF8');

// Cek koneksi
if (!$con) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo " ";
}