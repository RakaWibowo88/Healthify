<?php
include "dokter/config.php";
$ambil = "SELECT * FROM penyakit ORDER BY nama ASC";
if (isset($_GET['q'])) {
    $isi = $_GET['q'];
    $pecah = explode(" ", $isi);
    $z = count($pecah);
    for ($i = 0; $i < $z; $i++) {
        $data_nama = $pecah[$i];
        $ambil = "SELECT * FROM penyakit WHERE nama like '%" . $data_nama . "%' OR gejala LIKE '%" . $data_nama . "%' OR penyebab LIKE '%" . $data_nama . "%' OR pengobatan LIKE '%" . $data_nama . "%' OR deskripsi LIKE '%" . $data_nama . "%' ";
    }
    $a = $_GET['q'];
}
$hasil = mysqli_num_rows(mysqli_query($koneksi, $ambil));
if ($hasil < 1) {
    $b = mysqli_query($koneksi, "SELECT * FROM feedback WHERE nama='$a'");
    $c = mysqli_num_rows($b);
    if ($c < 1) {
        mysqli_query($koneksi, "INSERT INTO feedback VALUES ('','$a')");
    }
    $peringatan = "data tidak ada";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healthify-Penyakit</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styledies.css">
    <link rel="stylesheet" href="css/animation.css">
    <!-- plugin bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
    <!-- aos animation -->
    <link href="vendor/aos-master/dist/aos.css" rel="stylesheet">
    <!-- icon web -->
    <link rel="icon" href="vendor/img/caredoc_sOg_icon.ico" type="image/gif" sizes="16x16">
    <!-- font averia -->
    <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&display=swap" rel="stylesheet">
    <style type="text/css">
        .pkm {
            background: linear-gradient(315deg, #08c 10%, white 10%) !important;
        }
    </style>
</head>

<body>
     <!-- header -->
    <header class="header-area" id="page-top">
        <!-- site-navbar start -->
        <div class="navbar-area">
            <div class="container">
                <nav class="site-navbar">
                    <!-- site logo -->
                    <div class="content-image">
                         <img src="vendor/img/h_logo.svg" alt="healthify-logo">
                    </div>
                     <!-- site menu/nav -->
                    <ul class="menu" id="menu">
                        <li>
                            <a href="index.php #page-top" class="scroll">Beranda</a>
                        </li>
                        <li  class="active"><a href="#healthify" class="scroll" >Healthify</a></li>
                        <li><a href="index.php #healthify" class="scroll">Tanya Dokter</a></li>
                        <li><a href="artikel.php">Artikel</a></li>
                        <!-- <li><a href="healthify.php">Chat Dokter</a></li> -->
                        <li><a href="tim.php">Tim</a></li>
                        <li><a href="login.php">Login</a></li>  
                    </ul>
                    <!-- nav-toggler for mobile version only -->
                    <button class="nav-toggler">
                        <span></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>
    <!-- akhir header -->


    <!-- penyakit -->
    <div class="container-caredoc-dies">
        <h1 class="d-flex justify-content-center tsh">
        </h1>
    </div>
    <?php
    if (isset($peringatan)) {
        echo '
                <div class="container pdt">
                    <div class="site">
                    <div class="sketch">
                        <div class="bee-sketch red"></div>
                        <div class="bee-sketch blue"></div>
                    </div>
                    <h1><small>Maaf data penyakit <span class="font-weight-bold" style="text-decoration:underline;">' . $_GET['q'] . '</span> yang anda cari belum tersedia.</h1>
                    </div>
                    </div>
                ';
    } ?>

    <div class="container-fluid p-3">
        <div class="row">
            <?php
            $query = mysqli_query($koneksi, $ambil);

            // untuk perulangan seluruh data penyakit
            while ($asosiasi = mysqli_fetch_assoc($query)) {
                $id        = $asosiasi['id_penyakit'];
                //nama penyakit
                $nama_penyakit      = $asosiasi['nama'];
                // deskrupsi
                $data_deskripsi     = $asosiasi['deskripsi'];
                //penyebab
                $data_penyebab      = $asosiasi['penyebab'];
                // image
                $image             = $asosiasi['image'];
                //gejala
                $data_gejala        = explode(",", $asosiasi['gejala']);
                // pengobatan
                $data_pengobatan    = explode(".", $asosiasi['pengobatan']);
            ?>
                <div class="col-sm-6 p-3">
                    <div class="container">
                        <div class="card sdh2 mb-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                    <img src="vendor/img/penyakit/<?= "$image"; ?>" class="card-img mt-10" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?= "$nama_penyakit"; ?></h5>
                                        <p class="card-text text-left" style="overflow: auto;"><?= "$data_deskripsi"; ?></p>
                                        <a href="deskripsi_penyakit.php?id_penyakit=<?= $asosiasi['id_penyakit']; ?>" class="btn btn-primary" data>Baca Selengkapnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- akhir penyakit -->

  <!-- footer -->
    <div class="footer-section" id="healtify">
        <div class="container pd-5">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="contact-content text-center">
                        <div class="footer-logo">
                            <a href="http://cs.upi.edu/v2/home" target="blank"><img src="vendor/img/upi.png"></a>

                        </div>
                        <h6>Jl. Pendidikan No.15, Cibiru Wetan, Kec. Cileunyi, Kabupaten Bandung, Jawa Barat 40625 </h6>
                        <p></p>
                        <h6>(022) 7801840<span>|</span>(022) 7801840</h6>
                        <div class="contact-social">
                            <ul>
                                <li><a class="hover-target" target="blank" href="https://www.facebook.com//"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="hover-target" target="blank" href="mailto:info@"><i class="far fa-envelope"></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></i></a></li>
                                <li><a class="hover-target" target="blank" href="https://wa.me/0261-202767"><i class="fab fa-whatsapp"></i></i></a></li>
                            </ul>
                        </div>

                        <span>Copyright © Healthify <?= date('Y') ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir footer -->
</body>
<!-- voice -->
<script src="js/textvoice.js"></script>
<!-- navbar checked di responsive -->
<script src="js/nav.js"></script>
<!-- smooth scroll on klik -->
<!-- responsive voice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=6tgcyWyA"></script>
<!-- fade animation -->
<script src="vendor/aos-master/dist/aos.js"></script>
<!-- navbar aktif di section -->
<script src="vendor/jquery/jquery.min.js"></script>
<script>
    AOS.init();
</script>

</html>