<?php
    include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Healthify | Cari Dokter</title>
    <link href="" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="css/dokter.css" />
    <link rel="stylesheet" href="css/style.css" />
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
                        <li><a href="index.php" class="scroll">Healthify</a></li>
                        <li><a href="healthdoc.php">Tanya Dokter</a></li>
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

    
        <div class="cari-dokter-konten-bawah">
          <div class="cd-bawah-kiri">
            <div class="cd-list-kota">
              <div class="cd-header-lk">
                <p>Pilih Kota / Kabupaten</p>
              </div>
              <div class="cd-isi-lk">
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Bandung"
                    value="Bandung"
                  />
                  <label for="bandung">Bandung</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Banjar"
                    value="Banjar"
                  />
                  <label for="Banjar">Banjar</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Bekasi"
                    value="Bekasi"
                  />
                  <label for="Bekasi">Bekasi</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Bogor"
                    value="Bogor"
                  />
                  <label for="Bogor">Bogor</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Cimahi"
                    value="Cimahir"
                  />
                  <label for="Cimahi">Cimahi</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Cirebon"
                    value="Cirebon"
                  />
                  <label for="Cirebon">Cirebon</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Depok"
                    value="Depok"
                  />
                  <label for="Depok">Depok</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Sukabumi"
                    value="Sukabumi"
                  />
                  <label for="Sukabumi">Sukabumi</label>
                </div>
                <div class="cd-blok">
                  <input
                    type="radio"
                    name="list-kota"
                    id="Tasikmalaya"
                    value="Tasikmalayar"
                  />
                  <label for="Tasikmalaya">Tasikmalaya</label>
                </div>
              </div>
            </div>
            <div class="cd-list-spesialis">
              <div class="cd-header-s">
                <p>Pilih Spesialis</p>
              </div>
              <div class="cd-isi-s">
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="Anak">Anak</label>
                </div>
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="myCheck">Dokter Umum</label>
                </div>
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="myCheck">Kandungan & Kebidanan</label>
                </div>
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="myCheck">Kedokteran Olahraga</label>
                </div>
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="myCheck">Kulit & Kelamin</label>
                </div>
                <div class="cd-blok">
                  <input type="checkbox" id="myCheck" onclick="myFunction()" />
                  <label for="myCheck">Penyakit Mulut</label>
                </div>
              </div>
            </div>
          </div>
          <div class="cd-bawah-kanan">
            <div class="cd-list-dokter">
              <div class="cd-list-dokter-b1">
                <article class="card-1">
                  <div class="thumb">
                    <img
                      src="vendor/img/cari-dokter/dokter-1.png"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Agung Nugroho, Sp.PD</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Penyakit Dalam</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>RS Immanuel Bandung</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">20 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                            dr. Agung Nugroho, Sp.PD adalah Dokter Spesialis
                            Penyakit Dalam yang aktif melayani pasien di RS
                            Immanuel Bandung. dr. Agung Nugroho, Sp.PD
                            mendapatkan gelar spesialisnya setelah menamatkan
                            pendidikan di San Juan De Dios Educational.
                          </p>
                          <p>
                            Beliau yang tergabung dalam Ikatan Dokter Indonesia
                            (IDI) dan Perhimpunan Dokter Spesialis Penyakit
                            Dalam Indonesia (PDPI) sebagai anggota ini dapat
                            memberikan layanan konsultasi seputar penyakit
                            dalam.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3111" class="btn btn-primary chat-btn">Mulai Chat</a>
                    </button>
                    </button>
                  </div>
                </article>
                <article class="card-2">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr yura pramesti sahal.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Yura Pramesti Sahal</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Dokter Umum</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik TelkoMedika Bandung</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">30 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-2.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                            dr. Yura Pramesti Sahal merupakan seorang Dokter
                            Umum yang saat ini berpraktik di Klinik TelkoMedika
                            Health Center Sentot. Beliau dapat membantu layanan
                            Konsultasi kesehatan umum dan menyediakan layanan
                            tes buta warna.
                          </p>
                          <p>
                            dr. Yura Pramesti Sahal menamatkan pendidikan
                            Kedokteran Umum di Universitas Islam Bandung. Selain
                            itu, beliau juga terhimpun dalam organisasi Ikatan
                            Dokter Indonesia (IDI).
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3112" class="btn btn-primary chat-btn" data-doctor="Dr. Yura Pramesti Sahal">Mulai Chat</a>
                    </button>
                  </div>
                </article>
                <article class="card-3">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr andini wilson.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Andini Wilson</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Dokter Umum</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik TelkoMedika Health Center Sentot.</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">9 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. Andini Wilson adalah seorang Dokter Umum yang memiliki praktik di Klinik 
                          TelkoMedika Health Center Sentot. Dengan pengalamannya yang luas dalam 
                          bidang kesehatan, beliau mendedikasikan dirinya untuk memberikan konsultasi 
                          kesehatan umum kepada pasien-pasien yang membutuhkan.

                          </p>
                          <p>
                          dr. Andini Wilson merupakan lulusan dari Universitas ternama di Indonesia, 
                          di mana beliau menyelesaikan pendidikan Kedokteran Umum 
                          dengan prestasi gemilang. Selama masa studinya, beliau mengembangkan 
                          pengetahuan dan keterampilan medis yang diperlukan untuk memberikan 
                          perawatan terbaik kepada pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3113" class="btn btn-primary chat-btn" data-doctor="Dr. Andini Wilson">Mulai Chat</a>
                    </button>
                  </div>
                </article>
              </div>
              <div class="cd-list-dokter-b2">
                <article class="card-1">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr jessica.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Jessica</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Mata</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik TelkoMedika Health Center Puri</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">22 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. Jessica adalah seorang Dokter Spesialis Mata yang berpraktik di Klinik 
                          TelkoMedika Health Center Puri. 
                          Dengan keahliannya dalam bidang kesehatan umum, beliau berkomitmen untuk memberikan 
                          pelayanan konsultasi medis yang komprehensif kepada pasien-pasien yang membutuhkan.
                          </p>
                          <p>
                          dr. Jessica telah menamatkan pendidikan Kedokteran Umum 
                          di salah satu universitas terkemuka di 
                          Indonesia. Selama masa studinya, 
                          beliau mengembangkan pengetahuan dan keterampilan 
                          medis yang diperlukan untuk memberikan perawatan yang 
                          efektif dan berkualitas kepada pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3114" class="btn btn-primary chat-btn" data-doctor="Dr. Jessica">Mulai Chat</a>
                    </button>
                  </div>
                </article>
                <article class="card-2">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr ray parker.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Ray Parker</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis THT</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik MedikaSehat Sentral</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">5 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-2.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. Ray Parker adalah seorang Dokter Spesialis THT yang berpraktik di Klinik MedikaSehat Sentral. 
                          Dengan pengalaman luas dalam kesehatan umum, beliau berkomitmen untuk memberikan layanan konsultasi 
                          medis yang holistik dan berkualitas kepada pasien-pasien.
                          </p>
                          <p>
                          dr. Ray Parker menyelesaikan pendidikan Kedokteran Umum di salah satu institusi terkemuka. 
                          Selama masa studinya, beliau mengasah pengetahuan dan keterampilan medis yang diperlukan untuk memberikan 
                          perawatan yang optimal kepada pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3115" class="btn btn-primary chat-btn" data-doctor="Dr. Ray Parker">Mulai Chat</a>
                    </button>
                  </div>
                </article>
                <article class="card-3">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr nanda azzahra.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Nanda Azzahra</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Anak</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik Sehati Medika Jaya</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">17 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. Nanda Azzahra adalah seorang Dokter Anak yang berpraktik di Klinik Sehati Medika Jaya. 
                          Dengan dedikasi dan keahliannya dalam kesehatan umum, beliau bertujuan untuk memberikan perawatan kesehatan 
                          yang terbaik kepada pasien-pasien yang datang mencari bantuan.
                          </p>
                          <p>
                          dr. Nanda Azzahra menyelesaikan pendidikan Kedokteran 
                          Umum di salah satu universitas ternama di Indonesia. Selama masa studinya, 
                          beliau memperoleh pengetahuan dan keterampilan yang diperlukan untuk memberikan perawatan 
                          medis yang komprehensif dan berkomitmen untuk meningkatkan kualitas hidup pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3116" class="btn btn-primary chat-btn" data-doctor="Dr. Nanda Azzahra">Mulai Chat</a>
                    </button>
                  </div>
                </article>
              </div>
              <div class="cd-list-dokter-b3">
                <article class="card-1">
                  <div class="thumb">
                    <img
                    src="vendor/img/doc/dr john denis.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. John Denis</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Gigi</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik MedPlus Care Center</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">37 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. John Denis adalah seorang Dokter Gigi yang berpraktik di Klinik MedPlus Care Center. 
                          Dengan pengalaman luas dalam bidang kesehatan umum, beliau berdedikasi untuk memberikan 
                          perawatan medis yang komprehensif dan berkualitas kepada pasien-pasien yang mencari bantuan.
                          </p>
                          <p>
                          dr. John Denis menyelesaikan pendidikan Kedokteran Umum di salah satu 
                          institusi ternama di Indonesia. Selama masa studinya, beliau memperoleh pengetahuan dan 
                          keterampilan yang diperlukan untuk memberikan pelayanan kesehatan yang optimal kepada pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3117" class="btn btn-primary chat-btn" data-doctor="Dr. Lee Park Wo">Mulai Chat</a>
                    </button>
                  </div>
                </article>
                <article class="card-2">
                  <div class="thumb">
                    <img
                    src="vendor/img/doc/dr lee park wo.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. Lee Park Wo</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Jantung</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik Sehat Sejahtera Sentosa</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">29 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-2.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. Lee Park Wo adalah seorang Dokter Spesialis 
                          Jantung yang berpraktik di Klinik Sehat Sejahtera Sentosa. Dengan pengalaman 
                          yang luas dalam bidang kesehatan umum, beliau berkomitmen untuk memberikan perawatan 
                          medis yang holistik dan terbaik kepada pasien-pasien yang datang mencari bantuan.
                          </p>
                          <p>
                          dr. Lee Park Wo menyelesaikan pendidikan 
                          Kedokteran Umum di salah satu universitas terkemuka di Korea Selatan. Selama masa studinya, 
                          beliau mendapatkan pengetahuan dan keterampilan yang diperlukan untuk memberikan perawatan medis yang 
                          efektif dan sesuai dengan kebutuhan individu setiap pasien.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3118" class="btn btn-primary chat-btn" data-doctor="Dr. John Denis">Mulai Chat</a>
                    </button>
                  </div>
                </article>
                <article class="card-3">
                  <div class="thumb">
                    <img
                      src="vendor/img/doc/dr r muthulakshmi.jpg"
                      alt=""
                    />
                  </div>
                  <div class="detail">
                    <div class="det-konten">
                      <div class="det-konten-atas">
                        <div class="det-ka-lagi">
                          <p>dr. R Muthulakshmi</p>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-1.svg"
                              alt=""
                            />
                            <p>Spesialis Penyakit Dalam</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-2.svg"
                              alt=""
                            />
                            <p>Klinik Sehati Medika Mandiri</p>
                          </div>
                          <div class="det-kal-lagi">
                            <img
                              src="vendor/img/cari-dokter/dokter-icon-3.svg"
                              alt=""
                            />
                            <div class="det-data">
                              <div class="det-kata">
                                <p class="biru">12 pasien</p>
                                <p>telah berkonsultasi</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <img
                          src="vendor/img/cari-dokter/dokter-img-1.svg"
                          alt=""
                        />
                      </div>
                      <div class="det-konten-tengah"></div>
                      <div class="det-konten-bawah">
                        <p class="judul">Profil Dokter</p>
                        <div class="det-kb-subjudul">
                          <p>
                          dr. R. Muthulakshmi adalah seorang Dokter Umum yang berpraktik di 
                          Klinik Sehati Medika Mandiri. Dengan pengalaman dan pengetahuan yang luas dalam bidang 
                          kesehatan umum, beliau berkomitmen untuk memberikan perawatan medis yang berkualitas dan 
                          komprehensif kepada pasien-pasien yang mencari bantuan.
                          </p>
                          <p>
                          dr. R. Muthulakshmi menyelesaikan pendidikan Kedokteran 
                          Umum di salah satu universitas ternama di India. Selama masa studinya, 
                          beliau mengembangkan pengetahuan dan keterampilan yang diperlukan untuk memberikan 
                          perawatan medis yang efektif dan mengikuti standar terkini dalam bidang kedokteran.
                          </p>
                        </div>
                      </div>
                    </div>
                    <button class="det-button" type="submit">
                    <a href="chating.php?doctor=3119" class="btn btn-primary chat-btn" data-doctor="Dr. R Muthulakshmi">Mulai Chat</a>
                    </button>
                  </div>
                </article>
              </div>
            </div>
            <div class="cd-button">
              <div class="cd-button-kiri">
                <img src="vendor/img/cari-dokter/icon-1.svg" alt="" />
              </div>
              <div class="cd-button-tengah">
                <div class="no-hal aktif">
                  <p>1</p>
                </div>
                <div class="no-hal">
                  <p>2</p>
                </div>
                <div class="no-hal">
                  <p>3</p>
                </div>
                <div class="no-hal">
                  <p>4</p>
                </div>
                <div class="no-hal">
                  <p>5</p>
                </div>
                <div class="no-hal">
                  <p>...</p>
                </div>
                <div class="no-hal">
                  <p>30</p>
                </div>
              </div>
              <div class="cd-button-kanan">
                <img src="vendor/img/cari-dokter/icon-2.svg" alt="" />
              </div>
            </div>
          </div>
        </div>
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
    <!-- Script Ionicons -->
    <script
      type="module"
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule
      src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"
    ></script>
    
  </body>
</html>

