<!DOCTYPE html>
<html lang="en">

<head>
  <title>Healthify | Daftar</title>
  <link href="" rel="shortcut icon" type="image/x-icon" />
  <link rel="stylesheet" href="css/register.css" />
</head>

<body>
  <section>
    <div class="boxUtama">
      <div class="boxKonten">
        <div class="boxKiri">
          <form action="proses_input.php" method="POST">
            <div class="konten">
              <div class="atas">
                <img src="img/icon_1.png" alt="" />
              </div>
              <div class="tengah">
                <h2>Selamat Datang !</h2>
                <div class="kata">
                  <h6>Daftar Akun</h6>
                  <h6 class="ijo">Healthify</h6>
                </div>
              </div>
              <div class="bawah">
                <div class="input">
                  <input type="text" name="nama" required />
                  <label for="">Nama Lengkap</label>
                </div>
                <div class="input">
                  <input type="text" name="username" required />
                  <label for="">Username</label>
                </div>
                <div class="input">
                  <input type="email" name="email" required autocomplete="off" />
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
                <button class="buttonDaftar" type="submit" name="simpan">Daftar</button>
                <div class="masuk">
                  <p>Sudah memiliki akun?&nbsp;<a href="login.php">Masuk</a></p>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="boxKanan"></div>
      </div>
    </div>
  </section>

</body>
<script type="text/javascript" href></script>
</html>