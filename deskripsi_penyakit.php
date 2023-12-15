<?php
include "dokter/config.php";
$id_penyakit = abs(intval($_GET['id_penyakit']));

$sql = "SELECT * FROM penyakit WHERE id_penyakit='$id_penyakit' LIMIT 1";
$query = mysqli_num_rows(mysqli_query($koneksi, $sql));
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healthify-Penyakitc</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styledies.css">
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
                        <li class="active">
                            <a href="index.php #page-top" class="scroll">Beranda</a>
                        </li>
                        <li><a href=" index.php #healthify">Healthify</a></li>
                        <li><a href="chating.php" >Tanya Dokter</a></li>
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



    <?php
    //jika sudah mendapatkan parameter GET id dari URL
    if (isset($_GET['id_penyakit'])) {
        //membuat variabel $id untuk menyimpan id dari GET id di URL
        $id_penyakit = $_GET['id_penyakit'];

        //query ke database SELECT tabel penyakit berdasarkan id = $id
        $select = mysqli_query($koneksi, "SELECT * FROM penyakit WHERE id_penyakit='$id_penyakit'") or die(mysqli_error($koneksi));
        //jika hasil query = 0 maka muncul pesan error
        if (mysqli_num_rows($select) == 0) {
            echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
            exit();
            //jika hasil query > 0
        } else {
            //membuat variabel $data dan menyimpan data row dari query
            $data = mysqli_fetch_assoc($select);
        }
    ?>
        <!-- konten -->
        <div class="container-fluid p-6">
            <div class="row">
                <?php
                $query = mysqli_query($koneksi, $sql);
                // untuk perulangan seluruh data penyakit
                while ($asosiasi = mysqli_fetch_assoc($query)) {
                    $id_penyakit = $asosiasi['id_penyakit'];
                    //nama penyakit
                    $nama_penyakit = $asosiasi['nama'];
                    //deskripsi penyakit
                    $deskripsi = $asosiasi['deskripsi'];
                    //penyebab
                    $data_penyebab = $asosiasi['penyebab'];
                    //gejala
                    $data_gejala = explode(",", $asosiasi['gejala']);
                    // pengobatan
                    $data_pengobatan = explode(".", $asosiasi['pengobatan']);
                ?>
                    <div class="col-sm-12">
                        <div class="card2 sdh">
                            <div class="card-body" id="textdies">
                                <br><br><br>
                                <h2 class="ts" style="text-align: center;"><?php echo "$nama_penyakit"; ?></h5>
                                
                                    
                                <p class="card-text">
                                    <?php echo "$deskripsi"; ?>
                                </p>
                                <p class="card-text">
                                    -Gejala<br>
                                    <?php //$i jang ngitung awalan
                                    $no_langkah = 1;
                                    //perulangan array
                                    foreach ($data_gejala as $gejala) {
                                        echo "$no_langkah" . "." . "$gejala" . "." . "<br>";
                                        //ieu nambahkeun na
                                        $no_langkah++;
                                    } ?>
                                    <p>
                                        -Penyebab<br>
                                        <?php echo "$data_penyebab" . "<br>"; ?>
                                    </p>

                                    <p class="card-text" id>
                                        -Cara mengobati<br>
                                        <?php //$i jang ngitung awalan
                                        $no_langkah = 1;
                                        //perulangan array
                                        foreach ($data_pengobatan as $pengobatan) {
                                            echo "$no_langkah" . "." . "$pengobatan" . "." . "<br>";
                                            //ieu nambahkeun na
                                            $no_langkah++;
                                        } ?>
                                    </p>
                                    <div class="modal-footer">
                                        <button type="button" onclick="play();" class="btn btn-primary">Play</button>
                                        
                                        <button type="button" onclick="stop();" class="btn btn-primary">Stop</button>
                                    </div>
                            </div>
                        </div>
                        <p class="note text-danger">catatan: "fitur suara hanya dapat berjalan pada browser chrome!"</p>
                    </div>
                <?php
                }
                ?>
            <?php
        }
            ?>
            </div>
        </div>
        

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
<script src="js/voicetext.js"></script>
<!-- navbar checked di responsive -->
<script src="js/nav.js"></script>
<!-- responsive voice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=6tgcyWyA"></script>
<!-- fade animation -->
<script src="vendor/aos-master/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</html>