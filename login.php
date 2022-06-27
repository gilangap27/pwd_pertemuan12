<?php
require 'function.php';

session_start();

$user = $_POST['username'];
$pass = md5($_POST['password']);

$query = mysqli_query(koneksi(), "SELECT * FROM user WHERE username= '$user' AND password = '$pass'");

$result = mysqli_num_rows($query);

if ($result > 0) {
    $data = mysqli_fetch_assoc($query);

    // Cek level user
    if ($data['level'] == "admin") {
        $_SESSION['user'] = $data['username'];
        $_SESSION['level'] = "admin";

        // tentukan halaman yang diakses
        header("Location:admin/index.php");
    } else if ($data['level'] == "user") {
        $_SESSION['user'] = $data['username'];
        $_SESSION['level'] = "user";

        // tentukan halaman yang diakses
        header("Location:user/index.php");
    }
} else {
    header("Location:index.php?alert='gagal'");
}
