<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Recycle Power</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="./assets/static/images/favicon.ico" />
    <!-- Custom Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./assets/css/styles.css" rel="stylesheet" />
    <link href="./assets/css/main.css" rel="stylesheet" />
    <style>
        .navbar-nav .nav-link {
            color: #000;
        }

        .navbar-nav .dropdown-menu .dropdown-item {
            color: #000;
            font-size: 0.9rem;
        }

        .navbar-nav .dropdown-menu .dropdown-item:hover {
            background-color: #f8f9fa;
        }

        .navbar-nav .nav-item .btn {
            padding: 0.375rem 0.75rem;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0;
            margin-left: 0;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropdown-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: -1px;
            margin-left: 0;
        }

        .dropdown-submenu:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropdown-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        @media (max-width: 992px) {
            .navbar-nav {
                text-align: center;
            }

            .navbar-nav.ms-auto {
                margin-top: 10px;
            }

            .navbar-nav.ms-auto .nav-item {
                margin-left: 0 !important;
            }

            .navbar-nav.ms-auto .nav-item .btn {
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
            <div class="container px-5">
                <a class="navbar-brand" href="index.html"><span class="fw-bolder text-primary">Recycle Power</span></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 small fw-bolder">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Data Pengelolaan Sampah & RTH
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm ">
                                <li><a class="dropdown-item"
                                        href="./Data Pengelolaan Sampah/TimbulanSampah.php">Timbulan Sampah</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="./Data Pengelolaan Sampah/KomposisiSampah.php">Komposisi Sampah</a>
                                </li>
                                <li><a class="dropdown-item" href="../Data Pengelolaan Sampah/SumberSampah.php">Sumber
                                        Sampah</a></li>
                                <li><a class="dropdown-item" href="./Data Pengelolaan Sampah/CapaianKinerja.php">Capaian
                                        Kinerja</a>
                                </li>
                                <li><a class="dropdown-item" href="./Data Pengelolaan Sampah/RTH.php">RTH</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Fasilitas Pengelolaan Sampah
                            </a>
                            <ul class="dropdown-menu border-0 shadow-sm">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">Bank Sampah <i
                                            class="bi bi-chevron-right ms-auto"></i></a>
                                    <ul class="dropdown-menu border-0 shadow-sm">
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/BankSampahUnit.php">Bank Sampah
                                                Unit</a></li>
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/BankInduk.php">Bank Sampah
                                                Induk</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">Komposing RK/POO <i
                                            class="bi bi-chevron-right ms-auto"></i></a>
                                    <ul class="dropdown-menu border-0 shadow-sm">
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/KompostingRTRW.php">Komposing
                                                Skala RTRW</a></li>
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/RumahKompos.php">Rumah Kompos</a>
                                        </li>
                                        <li><a class="dropdown-item" href="./Fasilitas Pengelolaan Sampah/POO.php">Pusat
                                                Olah Organik
                                                (POO)</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">TPS3R/PDU/ITF <i
                                            class="bi bi-chevron-right ms-auto"></i></a>
                                    <ul class="dropdown-menu border-0 shadow-sm">
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/TPS3R.php">TPS3R</a></li>
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/PusatDaurUlang.php">Pusat Daur
                                                Ulang</a></li>
                                        <li><a class="dropdown-item" href="./Fasilitas Pengelolaan Sampah/TPST.php">TPST
                                                diluar TPA</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/ITF.php">ITF</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item d-flex align-items-center" href="#">Sumber Energi <i
                                            class="bi bi-chevron-right ms-auto"></i></a>
                                    <ul class="dropdown-menu border-0 shadow-sm">
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/BioDigester.php">Biodigester</a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="dropdown-item d-flex align-items-center" href="#">Proses Thermal
                                                <i class="bi bi-chevron-right ms-auto"></i></a>
                                            <ul class="dropdown-menu border-0 shadow-sm">
                                                <li><a class="dropdown-item"
                                                        href="./Fasilitas Pengelolaan Sampah/Insinerator.php">Insinerator</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="./Fasilitas Pengelolaan Sampah/Pirolisis.php">Pirolisis</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="./Fasilitas Pengelolaan Sampah/Gasifikasi.php">Gasifikasi</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="./Fasilitas Pengelolaan Sampah/Gasifikasi.php">RDF</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item"
                                        href="./Fasilitas Pengelolaan Sampah/TPA-TPST.php">TPA/TPST</a></li>
                                <li><a class="dropdown-item"
                                        href="./Fasilitas Pengelolaan Sampah/SektorInformal.php">Sektor
                                        Informal</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder d-flex align-items-lg-center">
                        <li class="nav-item"><a class="btn btn-primary" href="auth-login.php">Masuk</a></li>
                        <li class="nav-item ms-2"><a class="btn btn-danger" href="auth-register.php">Daftar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Header-->
        <header class="py-5">
            <div class="container px-5 pb-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-xxl-5">
                        <!-- Header text content-->
                        <div class="text-center text-xxl-start">
                            <div class="badge bg-gradient-primary-to-secondary text-white mb-4">
                                <div class="text-uppercase">Recycle &middot; Clean &middot; Healty</div>
                            </div>
                            <div class="fs-3 fw-light text-muted">We collect your waste</div>
                            <h1 class="display-3 fw-bolder mb-5"><span class="text-gradient d-inline">Recycle
                                    Power</span></h1>
                            <!-- <div
                                class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xxl-start mb-3">
                                <a class="btn btn-primary btn-lg px-5 py-3 me-sm-3 fs-6 fw-bolder"
                                    href="auth-login.php">Sign-in</a>
                                <a class="btn btn-outline-dark btn-lg px-5 py-3 fs-6 fw-bolder"
                                    href="auth-register.php">Sign-Up</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xxl-7">
                        <!-- Header profile picture-->
                        <div class="d-flex justify-content-center mt-5 mt-xxl-0">
                            <div class="profile ">
                                <!-- TIP: For best results, use a photo with a transparent background like the demo example below-->
                                <!-- Watch a tutorial on how to do this on YouTube (link)-->
                                <img class="profile-img rounded-4" width="450"
                                    src="./assets/static/images/recycle-power.jpg" alt="..." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- About Section-->
        <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xxl-12 col-12">
                        <div class="text-center my-5">

                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative animated-element">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h2 class="display-6 fw-bolder"><span class="text-gradient d-inline">Recycle
                                            Power</span></h2>
                                    <p class="card-text mb-auto">Website edukasi sampah ini adalah platform digital yang
                                        dikembangkan antara TP PKK Kota Bandung dengan STT Bandung yang
                                        berkolaborasi pula dengan GSSI dan IATL ITB. Website ini dikembangkan untuk
                                        mendukung gerakan pengelolaan sampah yang lebih baik. Dan menjadikan gerakan
                                        kelola sampah menjadi gerakan bahagia kelola sampah.</p>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img src="./assets/static/images/recycle-power.jpg"
                                        class="img-fluid img-thumbnail shadow" width="250" height="300" alt="">
                                </div>
                            </div>

                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg       h-md-250 position-relative animated-element-left">
                                <div class="col-auto d-none d-lg-block">
                                    <img src="./assets/static/images/pkk.png"
                                        class="img-fluid py-1 ps-2 img-thumbnail shadow" width="250" height="300"
                                        alt="">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h2 class="display-6 fw-bolder"><span class="text-gradient d-inline">TP PKK Kota
                                            Bandung</span></h2>
                                    <p class="card-text mb-auto">Profil TP PKK Kota Bandung mempunyai jumlah kelompok
                                        PKK di
                                        30 kecamatan, 151 kelurahan, 1579 RW, 9662 RT, 29.385 dasawisma, 1988
                                        posyandu. PKK mempunyai fungsi utama sebagai penyuluh, penggerak dan
                                        pencatat.</p>
                                </div>
                            </div>

                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative animated-element">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h2 class="display-6 fw-bolder"><span class="text-gradient d-inline">STT
                                            Bandung</span></h2>
                                    <p class="card-text mb-auto">Merupakan sebuah Perguruan Tinggi di Kota Bandung yang
                                        Menyiapkan para Mahasiswanya untuk Menjadi Pemimpin Masa Depan di Bidang Desain,
                                        Teknologi, dan Bisnis. Berinteraksi dengan Kreativitas, Kolaborasi, dan Inovasi
                                        Mari Membangun Negeri dengan Bergabung Bersama Sekolah Tinggi Teknologi Bandung.
                                        Sampai Jumpa di Kampus.</p>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img src="./assets/static/images/sttb.png"
                                        class="img-fluid py-1 pe-2 img-thumbnail shadow" width="250" height="300"
                                        alt="">
                                </div>
                            </div>

                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg       h-md-250 position-relative animated-element-left">
                                <div class="col-auto d-none d-lg-block">
                                    <img src="./assets/static/images/itb.png"
                                        class="img-fluid py-1 ps-2 img-thumbnail shadow" width="250" height="300"
                                        alt="">
                                </div>
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h2 class="display-6 fw-bolder"><span class="text-gradient d-inline">ITB</span></h2>
                                    <p class="card-text mb-auto">Institut Teknologi Bandung adalah sebuah perguruan
                                        tinggi negeri yang berkedudukan di Kota Bandung. Nama ITB diresmikan pada
                                        tanggal 2 Maret 1959. Sejak tanggal 14 Oktober 2013 ITB menjadi Perguruan Tinggi
                                        Negeri Badan Hukum yang memiliki otonomi pengelolaan dalam akademik dan
                                        nonakademik</p>
                                </div>
                            </div>

                            <div
                                class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-lg h-md-250 position-relative animated-element">
                                <div class="col p-4 d-flex flex-column position-static">
                                    <h2 class="display-6 fw-bolder"><span class="text-gradient d-inline">GSSI</span>
                                    </h2>
                                    <p class="card-text mb-auto">Dalam upaya mendukung terciptanya pengelolaan
                                        lingkungan yang lebih bertanggung jawab, Yayasan Generasi Semangat Selalu Ikhlas
                                        (GSSI) turut berperan dalam memberikan pendidikan lingkungan bagi anak-anak. Hal
                                        ini sesuai dengan visi GSSI yaitu Masyarakat yang bahagia dengan lingkungan dan
                                        saling berinteraksi dengan misi GSSI.</p>
                                </div>
                                <div class="col-auto d-none d-lg-block">
                                    <img src="./assets/static/images/gssi.png"
                                        class="img-fluid py-1 pe-2 img-thumbnail shadow" width="250" height="300"
                                        alt="">
                                </div>
                            </div>


                            <div class="d-flex justify-content-center fs-2 gap-4 pt-4">
                                <a class="text-gradient" href="#!"><i class="bi bi-twitter"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-linkedin"></i></a>
                                <a class="text-gradient" href="#!"><i class="bi bi-github"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- <section class="bg-light py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="px-4 py-5 my-5 text-center">
                        <h1 class="display-5 fw-bold text-body-emphasis">PROFIL BAHAGIA KELOLA SAMPAH</h1>
                        <div class="col-lg-6 mx-auto">
                            <p class="lead mb-4">
                                Bahagia kelola sampah adalah semangat yang terbangun setelah kegiatan Workshop Pengelolaan Sampah di bulan Juni 2023 dan TFT Pengelolaan Sampah di bulan September 2023. Anggota grup Bahagia Kelola sampah sebanyak 60 peserta workshop Pengelolaan Persampahan &340 peserta TFT Pengelolaan Sampah yang terus aktif bergerak menjadi agen perubahan dalam pengelolaan sampah di Kota Bandung menjadi lebih baik
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-primary-emphasis">PROFIL IATL ITB</strong>
                                <h3 class="mb-0">Featured post</h3>
                                <div class="mb-1 text-body-secondary">Nov 12</div>
                                <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="./assets/static/images/RW-ku.jpg" class="img-fluid" width="250" height="300" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                                <strong class="d-inline-block mb-2 text-success-emphasis">PROFIL GSSI</strong>
                                <h3 class="mb-0">Post title</h3>
                                <div class="mb-1 text-body-secondary">Nov 11</div>
                                <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                            </div>
                            <div class="col-auto d-none d-lg-block">
                                <img src="./assets/static/images/RW-ku.jpg" class="img-fluid" width="250" height="300" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section>
            <div class="bg-light py-5">
                <div class="container col-xxl-8 px-4 py-5">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                        <div class="col-lg-6 py-sm-5">
                            <img src="./assets/static/images/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid"
                                alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                        </div>
                        <div class="col-lg-6 text-center">
                            <h1 class="display-6 fw-bold text-body-emphasis lh-1 mb-3">DOKUMENTASI EDUKASI KELOLA SAMPAH
                            </h1>
                            <p class="lead">"Ketika kita berbagi dokumentasi tentang edukasi pengelolaan sampah, kita
                                memberikan kesempatan kepada orang lain untuk terinspirasi dan bergabung dalam gerakan
                                untuk menjaga planet kita bersih."</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="py-5 text-center container" id="video">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Album Video Recycle Power</h1>
                    <p class="lead text-body-secondary">"Album video 'Recycle Power' adalah persembahan visual yang
                        menginspirasi tentang kekuatan pengelolaan sampah dan dampak positifnya terhadap lingkungan
                        kita."</p>
                    <p>
                        <a href="https://www.youtube.com/@tinimartinitapran3414" class="btn btn-primary my-2">Tini
                            Martini Tapran</a>
                    </p>
                </div>
            </div>
        </section>

        <section>

            <div class="album py-5 bg-body-tertiary">
                <div class="container">

                    <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm vyt">

                                <iframe width="420" height="315"
                                    src="https://www.youtube.com/embed/fe1U_KrXQ0o?si=rG3fg4Um4wESnRIA"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen>">
                                </iframe>
                                <div class="card-body">
                                    <p class="card-text">Video ini akan merinci bagaimana sampah pertama kali muncul
                                        sebagai hasil aktivitas manusia, terutama seiring dengan revolusi industri dan
                                        pertumbuhan populasi.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="https://youtu.be/fe1U_KrXQ0o?si=E5vnAhRRJ9_k83x7">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">5 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm vyt">
                                <iframe width="420" height="315"
                                    src="https://www.youtube.com/embed/71vaUHLIXeI?si=sll2fuS4UWBnO16d"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                <div class="card-body">
                                    <p class="card-text">Langkah-langkah pengomposan: Panduan langkah demi langkah
                                        tentang bagaimana memulai kompos dengan Open Windrow, termasuk pemilihan lokasi,
                                        penyusunan bahan, dan perawatan yang diperlukan.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="https://youtu.be/nl_0p-PONEM?feature=shared">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">5 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card shadow-sm vyt">
                                <iframe width="420" height="315"
                                    src="https://www.youtube.com/embed/nl_0p-PONEM?si=qi614VAqkK4LSmvO"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    allowfullscreen></iframe>
                                <div class="card-body">
                                    <p class="card-text">"Komposter Ember Tumpuk" adalah sebuah tutorial yang memberikan
                                        panduan lengkap tentang cara membuat dan menggunakan komposter ember tumpuk
                                        untuk mengompos limbah organik di rumah.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a href="https://youtu.be/71vaUHLIXeI">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                            </a>
                                        </div>
                                        <small class="text-body-secondary">5 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </main>
    <!-- Footer-->
    <footer class="bg-white py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0">Copyright &copy; Recycle Power 2023</div>
                </div>
                <div class="col-auto">
                    <a class="small" href="#!">Privacy</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Terms</a>
                    <span class="mx-1">&middot;</span>
                    <a class="small" href="#!">Contact</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>