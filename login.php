<?php
include "dokter/config.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Masuk</title>
  <link href="" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="css/login.css" />
  <link rel="stylesheet" href="css/register.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
</head>

<body>
  <section>
    <div class="boxUtama">
      <div class="boxKonten">
        <div class="boxKiri">
          <form action="proses_login.php"  method="POST">
            
            <div class="konten">
              <div class="atas">
                <div class="icon">
                  <img src="assets/img/content/user/icon-1.png" alt="" />
                </div>
              </div>
              <div class="tengah">
                <h2>Selamat Datang Kembali !</h2>
                <div class="kata">
                  <h6>Masuk Akun</h6>
                  <h6 class="ijo">Healthify</h6>
                </div>
              </div>

              <div class="bawah">
                <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan'] == "gagal") {
                                echo '<div class="alert alert-warning">Email dan Password Salah.</div>';
                            } else if ($_GET['pesan'] == "logout") {
                                echo '<script>alert("Berhasil Logout");  document.location="login.php";</script>';
                            } else if ($_GET['pesan'] == "belum_login") {
                                echo '<div class="alert alert-warning">Anda harus login terlebih dahulu.</div>';
                            }
                        }
                        ?>
                <div class="input">
                  <input type="email" name="email" required />
                  <label for="">Email</label>
                </div>
                <div class="input">
                  <input type="password" name="password" required />
                  <label for="">Kata Sandi</label>
                  <div class="cek_box">
                    <label for="">
                      
                      
                    </label>
                    
                  </div>
                </div>
                <button class="buttonMasuk">Masuk</button>
                <div class="daftar">
                  <p>Belum memiliki akun?&nbsp;<a href="register.php">Daftar</a></p>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="boxKanan"></div>
      </div>
    </div>
  </section>

    
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>