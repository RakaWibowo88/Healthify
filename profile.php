



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Profil Saya</title>
    <link href="assets/img/icon/appicon.png" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="src/css/profil.css" />
</head>

<body>
    <?php
    include 'config.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM pasien WHERE id_pasien = '$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <section>
            <div class="boxUtama">
                <div class="boxKonten">
                    <form action="proses_update.php" method="POST">
                        <div class="box">
                            <div class="konten">
                                <p class="konten-judul">Ubah Profil</p>
                                <div class="konten-form">
                                    <div class="form-inputan">
                                        <input type="hidden" name="id" class="form-control" value="<?php echo $d['id_pasien']; ?>" />
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']; ?>" />
                                    </div>
                                    <!-- <div class="form-inputan">
                                        <label for="">Jenis Kelamin</label>
                                        <input type="text" name="jk" class="form-control" value="" />
                                    </div>
                                    <div class="form-inputan">
                                        <label for="">Nomor Telepon</label>
                                        <input type="text" name="telepon" class="form-control" value="" />
                                    </div> -->
                                    <div class="form-inputan">
                                        <label for="">Username</label>
                                        <input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>" />
                                    </div>
                                    <div class="form-inputan">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control" value="<?php echo $d['email']; ?>" />
                                    </div>
                                    <div class="form-inputan">
                                        <label for="">Passowrd</label>
                                        <input type="password" name="password" class="form-control" value="<?php echo $d['password']; ?>" />
                                    </div>
                                </div>
                                <button type="submit" class="buttonSimpan">
                                    Simpan Profil
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <?php
    }
    ?>
</body>

</html>