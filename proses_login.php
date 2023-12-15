<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

$hashedPassword = md5($password);

// menyeleksi data pasien dengan email dan password yang sesuai
$data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE email='$email' AND password='$hashedPassword'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
	$_SESSION['email'] = $email;
    $_SESSION['data'] = mysqli_fetch_assoc($data);
	$_SESSION['status'] = "login";
	header("location:after_login/index.php");
} else {
	header("location:login.php?pesan=gagal");
}
