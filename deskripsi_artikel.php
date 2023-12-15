<?php

require 'admin/function.php';

$id = $_GET["id"];
$artikel = query("SELECT * FROM artikel WHERE id_artikel = $id")[0];




?>
<html lang="en">
  <head>
    <title><?php echo $artikel["judul"];?></title>
    <link rel="stylesheet" href="css/artikel-baca.css" />
  </head>

  <body>
   
    <!-- Style Artikel-Read -->
    <div class="artikelr">
      <div class="navigasi">
        <div class="nav-kata">
          <a href="index.php" id="beranda">Beranda</a>
          <p id="arrow-1">></p>
          <a href="artikel.php" id="artikel">Artikel</a>
          <p id="arrow-2">></p>
          <a href="#" id="judul">
          <?php echo $artikel["judul"];?>
          </a>
        </div>
      </div>
      <div class="konten">
        <div class="konten-atas">
          <form action="#">
            <div class="ka-search">
             
             
            </div>
          </form>
        </div>
        <div class="konten-bawah">
          <div class="kb-kiri">
            <p class="kb-judul">
              <?php echo $artikel["judul"];?>
            </p>
            <div class="kb-kreator">
              <p>Admin |</p>
              <p class="ijo">Healthify</p>
            </div>
            <p class="kb-waktu">Rabu, 31 Mei 2023 15.00 WIB</p>
            <div class="kb-isi">
              <img
                src="admin/img-penyakit/<?php echo $artikel["gambar"];?>"
                alt=""
              />
              <div class="kb-isi-lagi">
                <p id="isi-1">
                <?php echo $artikel["sub_desk"] ?>
                </p>
                <p id="isi-2">
                <?php echo $artikel["isi_artikel"] ?> <br/>
                </p>
              </div>
            </div>
          </div>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Style Footer -->
    <!-- Footer -->
    <div class="footer">
      <div class="footer-konten">
        <div class="footer-konten-atas">
          <div class="f-konten-atas-a">
            <div class="f-konten-atas-kiri">
              <div class="f-konten-atas-logo">
                <img
                  src="assets/img/content/footer/logo-footer-1.svg"
                  alt="logo-footer-1"
                />
                <p>Solusi untuk membantu Anda supaya menjadi sehat selalu</p>
              </div>
            </div>
            <div class="f-konten-atas-kanan">
              <div class="f-konten-atas-menu">
                <span>Healthify</span>
                <div class="f-konten-atas-menu-link">
                  <p>Tentang Healthify</p>
                  <p>Tim Kami</p>
                  <p>Kontak</p>
                </div>
              </div>
              <div class="f-konten-atas-menu">
                <span>Hidup Sehat</span>
                <div class="f-konten-atas-menu-link">
                  <p>MiHealth</p>
                  <p>HealthDoc</p>
                  <p>Kesehatan</p>
                  <p>Artikel</p>
                </div>
              </div>
              <div class="f-konten-atas-menu">
                <span>Media Sosial</span>
                <div class="f-konten-atas-menu-link">
                  <p>Facebook</p>
                  <p>Instagram</p>
                  <p>Youtube Channel</p>
                  <p>Linked-in</p>
                </div>
              </div>
              <div class="f-konten-atas-menu">
                <span>Bantuan</span>
                <div class="f-konten-atas-menu-link">
                  <p>FAQs</p>
                  <p>Privasi</p>
                  <p>Syarat & Ketentuan</p>
                  <p>Pemberitahuan Hukum</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-konten-tengah"></div>
        <div class="footer-konten-bawah">
          <div class="f-konten-bawah-a">
            <div class="f-konten-bawah-kiri">
              <p>© 2023 - PT. Karedok Team. All rights reserved.</p>
            </div>
            <div class="f-konten-bawah-kanan">
              <p>Ikuti kami di</p>
              <div class="f-sosial-media">
                <img src="assets/img/content/footer/icon-instagram.svg" />
                <img src="assets/img/content/footer/icon-facebook.svg" />
                <img src="assets/img/content/footer/icon-linkedin.svg" />
                <img src="assets/img/content/footer/icon-youtube.svg" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
