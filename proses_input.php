<?php

include "config.php";

$id_pasien = $_POST['id_pasien'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email =$_POST['email'];
$password = $_POST['password'];

 $hashedPassword = md5($password);

	mysqli_query($koneksi, "INSERT INTO pasien VALUES ('$id_pasien', '$nama', '$username', '$email', '$hashedPassword')");
	header("location: login.php");
?>

	