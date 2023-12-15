
<?php

session_start();
include "config.php";

// Periksa apakah pengguna sudah login
if (isset($_SESSION["fbsql_username(link_identifier)"])=== true) {
    $hideLoginNavbar = true; // Set variabel $hideLoginNavbar menjadi true jika pengguna sudah login
} else {
    $hideLoginNavbar = false; // Set variabel $hideLoginNavbar menjadi false jika pengguna belum login
}

// Periksa apakah pengguna sudah logout
if (!isset($_SESSION["fbsql_username(link_identifier)"])=== true) {
    $hideLogoutNavbar = true; // Set variabel $hideLoginNavbar menjadi true jika pengguna sudah login
} else {
    $hideLogoutNavbar = false; // Set variabel $hideLoginNavbar menjadi false jika pengguna belum login
}



$query = mysqli_query($koneksi, "
    SELECT d.nama_dokter, d.spesialis, d.gambar
    FROM (
        SELECT @dense_rank := IF(@prev_count = r.count_dokter, @dense_rank, @dense_rank + 1) AS dense_rank, r.count_dokter, r.id_dokter
        FROM (
            SELECT COUNT(*) AS count_dokter, id_dokter
            FROM rank
            GROUP BY id_dokter
            ORDER BY count_dokter DESC
        ) r,
        (SELECT @dense_rank := 0, @prev_count := NULL) vars
    ) ranked_dokter
    JOIN dokter d ON ranked_dokter.id_dokter = d.id_dokter
    WHERE ranked_dokter.dense_rank <= 3;
") or die(mysqli_error($koneksi));
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Healthify</title>
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/artikel.css">
    <link rel="stylesheet" href="css/loader.css">
    <!-- plugin bootstrap -->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="vendor/fontawesome-free/css/all.css">
    <!-- icon web -->
    <link rel="icon" href="vendor/img/h_logo.svg " type="image/gif" sizes="16x16">
    <!-- aos animation -->
    <link href="vendor/aos-master/dist/aos.css" rel="stylesheet">
    <!-- card -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <!-- animasi loading -->
    <div class="loader">
        <div></div>
        <div></div>
        <div></div>
    </div>
    <!-- akhir animasi loading -->

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
                        <li><a href="#healthify" class="scroll">Healthify</a></li>
                        <li><a href="login.php">Tanya Dokter</a></li>
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

    <!-- landing page -->
    <div class="landing">
        <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
            <h2>Hidup Sehat</span> </h2>
            <h3>Bersama Kami.</h3>
            <div class="btn">
                <a href="#about" class="scroll">Baca Selengkapnya</a>
            </div>
        </div>
        <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
            <img src="vendor/img/3674274.png" alt="">
        </div>
    </div>
    <!-- akhir landing page -->

    <!-- about -->
    <section class="section">
        <div class="about" id="about">
            <div class="content-about">
                <h3 class="title-about" data-aos="fade-right" data-aos-duration="1000">
                    Tentang Aplikasi Ini
                    <div class="line"></div>
                </h3>
                <p class="text-about" data-aos="fade-right" data-aos-duration="1000">Merupakan sebuah website yang bisa digunakan untuk masyarakat yang memerlukan
                    informasi kesehatan secara efesien,
                    website ini dapat mengetahui daftar penyakit-penyakit, memberikan informasi bagaimana cara untuk
                    mencegah dan mengatasi
                    penyakit tersebut. Tampilan yang sederhana akan memudahkan pengguna untuk berinteraksi dengan
                    website ini, di dalamnya
                    pengguna dimanjakan dengan system voice dan edukasi animasi robot sederhana yang berfungsi untuk
                    interaksi antara system
                    dan pengguna sehinga pengguna tidak merasa jenuh dan merasa kesulitan pada saat mengakses website.
                    Website ini cocok
                    digunakan untuk semua kalangan.</p>
            </div>
            <div class="imgContainer" data-aos="fade-up" data-aos-duration="1000">
                <img src="vendor/img/medl.png" alt="">
            </div>
        </div>
    </section>
    <!-- akhir about -->

    <!-- bagaimana ini bekerja? -->
    <div class="container my-5">
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">
            <span class="text-secondary">Langkah</span>
            <h4 class="text-capitalize font-weight-bold">Bagaimana ini <span style="color: #0089ff">Bekerja?</span></h4>
        </div>

        <div class="col-12 col-md-8 mx-auto">

            <div class="d-flex my-4 align-items-start" data-aos="fade-right" data-aos-duration="1000">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">1</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Apa yang anda rasakan?</h5>
                    <p class="text-secondary font-weight-light">Konsultasikan keluhan yang anda rasakan kepada dokter - dokter terbaik Healthify.</p>
                </div>
            </div>
            <div class="d-flex my-4 align-items-start" data-aos="fade-right" data-aos-duration="800">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">2</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Konsultasikan keluhan anda pada Healthify</h5>
                    <p class="text-secondary font-weight-light">Anda juga dapat konsultasi apa yang anda rasakan kepada healtify anda akan mendapatkan informasi keluhan yang dirasakan.</p>
                </div>
            </div>
            <div class="d-flex my-4 align-items-start" data-aos="fade-right" data-aos-duration="600">
                <div class="mr-3 text-center mt-2">
                    <div class="p-4 ml-2 rounded-circle text-white font-weight-bold d-flex align-items-center justify-content-center" style="height: 40px; width: 40px; background-color: #0089ff">3</div>
                </div>
                <div class="rounded bg-light p-4">
                    <h5 class="mb-3" style="font-weight: 600;">Dapatkan informasi kesehatan</h5>
                    <p class="text-secondary font-weight-light">Anda mendapatkan solusi terhadap keluhan yang dirasakan sehingga merasa dekat dengan kesembuhan setelah mendapatkan informasi.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir bagaimana ini bekerja? -->

    <!-- Healthify -->
    <div class="container-caredoc" id="healthify">
        <div class="content-caredoc">
            <div class="title-caredoc">
                <h3 data-aos="zoom-out" data-aos-duration="900">Healthi<span>fy</span></h3>
            </div>
            <div class="d-flex justify-content-center">
                <img src="vendor/img/h.gif" alt="healtify">
            </div>
            <div class="container-form">
                <form action="penyakit.php" method="get" id="search-form">
                    <div class="input-group mb-3">
                        <input id="textbox" name="q" type="text" placeholder="Masukan apa yang anda rasakan..." autocomplete="off" required>
                        <div class="input-group-append">
                            <!-- <button type="submit" class="d-none"></button> -->
                            <button type="button" class="btn btn-light btn-lg mr-1" id="start-btn" title="Start">
                                <i class="fas fa-microphone" id="micoff"></i>
                                <i class="fa fa-assistive-listening-systems d-none" id="micon" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
                <p class="info"></p>
            </div>
        </div>
    </div>
    <!-- akhir Healthify -->

    <!-- Dokter Terfav -->
    <div class="container my-5">
        <div class="text-center mb-5" data-aos="fade-down" data-aos-duration="1000">

            <h4 class="text-capitalize font-weight-bold">Dokter <span style="color: #0089ff">Terfavorit</span></h4>
        </div>
        <div class="container">

            <div class="main-card">

                <div class="cards">
                    <?php
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_assoc($query)) {
                    ?>
                            <div class="card">
                                <div class="content">
                                    <div class="img">
                                        <img src="vendor/img/doc/<?= $data['gambar'] ?>">
                                    </div>
                                    <div class="details">
                                        <div class="name"><?= $data['nama_dokter'] ?></div>
                                        <div class="job"><?= $data['spesialis'] ?></div>
                                    </div>
                                    <div class="media-icons">
                                        <!--  nanti button chat -->
                                        <a href="#">Chat Sekarang</i></a>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- akhir Dokter -->



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

<!-- Swiper JS -->
<script src="js/swiper-bundle.min.js"></script>
<!-- JavaScript -->
<script src="js/scriptcard.js"></script>
<!-- responsive voice -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=6tgcyWyA"></script>
<!-- voice -->
<script src="js/textvoice.js"></script>
<!-- navbar checked di responsive -->
<script src="js/nav.js"></script>
<!-- smooth scroll on klik -->
<!-- navbar aktif di section -->
<script src="vendor/jquery/jquery.min.js"></script>
<!-- voice to text -->
<script type="text/javascript">
    var SpeechRecognition = window.webkitSpeechRecognition;

    var recognition = new SpeechRecognition();


    recognition.continuous = false;
    recognition.lang = 'en-US';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;


    recognition.lang = "id-ID";

    var Textbox = $('#textbox');
    var instructions = '';

    var Content = '';

    recognition.continuous = false;

    recognition.onresult = function(event) {

        var current = event.resultIndex;

        var transcript = event.results[current][0].transcript;

        Content += transcript;
        Textbox.val(Content);
        console.log(transcript);

    };

    recognition.onstart = function() {
        $('#micoff').addClass('d-none');
        $('#micon').removeClass('d-none');
        instructions.text('Voice recognition is ON.');
    }

    recognition.onspeechend = function() {
        instructions.text('No activity.');
    }

    recognition.onerror = function(event) {
        if (event.error == 'no-speech') {
            instructions.text('Try again.');
        }
    }
    recognition.onend = function() {
        $('#micoff').removeClass('d-none');
        $('#micon').addClass('d-none');
        if (Textbox.val() !== '') {
            $('#search-form').submit();
        }
    };
    $('#start-btn').on('click', function(e) {
        if (Content.length) {
            Content += ' ';
        }
        recognition.start();
        console.log(responsiveVoice.isPlaying());
    });

    Textbox.on('input', function() {
        Content = $(this).val();
    });
</script>
<!-- smooth scroll jquery-->
<script>
    $(document).ready(function() {

        var scrollLink = $('.scroll');

        // Smooth scrolling
        scrollLink.click(function(e) {
            e.preventDefault();
            $('body,html').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });

        // Active link switching
        $(window).scroll(function() {
            var scrollbarLocation = $(this).scrollTop();

            scrollLink.each(function() {

                var sectionOffset = $(this.hash).offset().top - 20;

                if (sectionOffset <= scrollbarLocation) {
                    $(this).parent().addClass('active');
                    $(this).parent().siblings().removeClass('active');
                }
            })

        })

    })
</script>
<!-- fade animation -->
<script src="vendor/aos-master/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!-- js untuk loading -->
<script type="text/javascript">
    setTimeout(function() {
        $('.loader').fadeToggle();
    }, 200);
</script>

</html>