<?php
include "config.php";

$id = $_POST['id_pasien'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE pasien SET nama='$nama', username='$username', email='$email', password='$password' WHERE id_pasien = '$id'");

header("location: after_login/index.php");
