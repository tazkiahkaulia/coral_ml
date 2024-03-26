<?php error_reporting(0); ?>

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/favicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Coral ML</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
        .flexRadio {
            width: unset !important;
            height: unset !important;
        }
    </style>

</head>

<body class="sub_page">

    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section long_section px-0">
            <nav class="navbar navbar-expand-lg custom_nav-container ">
                <a class="navbar-brand" href="index.html">
                    <span>
                        Coral ML
                    </span>
                </a>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#pakar">Sistem Pakar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#klasifikasi">Klasifikasi Bleaching</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html#tentang_kami">Tentang Kami</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- end header section -->
    </div>

    <!-- contact section -->
    <section class="contact_section  long_section">
        <div class="container">
            <h2 style="text-align: center; text-transform: uppercase; font-weight: bold;">
                Hasil Sistem Pakar<br />
                <?php if ($_REQUEST['params'] == 'sehat') { ?>
                    <font class="text-success">Sehat</font>
                <?php } else { ?>
                    <font class="text-danger">Tidak Sehat</font>
                <?php } ?>
            </h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form_container">
                        <!-- <div class="heading_container">
                                <h2>
                                    Hasil Sistem Pakar
                                </h2>
                            </div> -->
                        <div class="form-group">
                            <center>
                                <?php if ($_REQUEST['params'] == 'sehat') { ?>
                                    <img src="images/coral-sehat.jpg" class="mb-3 mt-3" style="height: 250px; width: 377px; object-fit: cover;" />
                                    <label>Hasil analisis ini dapat memberikan gambaran bahwa terumbu karang dalam kondisi yang relatif sehat dan dapat memandu pengguna dalam menentukan langkah-langkah perlindungan atau pemulihan yang mungkin diperlukan.<br /><br />
                                        Meskipun ini hanyalah simulasi berdasarkan jawaban yang diberikan, perlu diingat bahwa kondisi terumbu karang sebenarnya memerlukan evaluasi yang lebih mendalam dan pemantauan secara teratur untuk memastikan keberlanjutannya.
                                    </label>
                                <?php } else { ?>
                                    <img src="images/coral-tidak-sehat.jpg" class="mb-3 mt-3" style="height: 250px; width: 377px; object-fit: cover;" />
                                    <label>Hasil analisis ini mengindikasikan bahwa terumbu karang sedang mengalami kondisi yang tidak sehat, memberikan dorongan untuk mengevaluasi dan menerapkan langkah-langkah mendesak dalam perlindungan atau pemulihan ekosistem laut tersebut.<br /><br />
                                        Langkah-langkah yang perlu diambil untuk menangani terumbu karang yang tidak sehat melibatkan kombinasi konservasi, perlindungan, dan rehabilitasi ekosistem. Beberapa langkah yang dapat diambil meliputi:<br /><br />
                                        <ol style="text-align: left !important;">
                                            <li><strong>Pemantauan dan Penelitian</strong><br />Lakukan pemantauan rutin untuk memahami penyebab kerusakan terumbu karang dan identifikasi perubahan dalam ekosistem.</li>
                                            <li class="mt-3"><strong>Pengelolaan Sumber Daya</strong><br />Terapkan praktik pengelolaan sumber daya yang berkelanjutan untuk mencegah overfishing dan merawat lingkungan laut sekitar terumbu karang.</li>
                                            <li class="mt-3"><strong>Pemulihan Terumbu Karang</strong><br />Implementasikan program rehabilitasi terumbu karang, termasuk penanaman kembali karang-karang yang rusak atau musnah.</li>
                                            <li class="mt-3"><strong>Pengurangan Pencemaran</strong><br />Kurangi pencemaran air dengan mengelola limbah dan mengurangi penggunaan bahan kimia berbahaya di daerah sekitar terumbu karang.</li>
                                            <li class="mt-3"><strong>Perubahan Kebijakan Lingkungan</strong><br />Dukung perubahan kebijakan lingkungan yang mendukung pelestarian dan perlindungan terumbu karang.</li>
                                            <li class="mt-3"><strong>Pendidikan Masyarakat</strong><br />Lakukan kampanye edukasi untuk meningkatkan kesadaran masyarakat tentang pentingnya terumbu karang dan cara menjaga kelestariannya.</li>
                                            <li class="mt-3"><strong>Peningkatan Kesadaran Global</strong><br />Dukung upaya global untuk mengurangi emisi gas rumah kaca dan mengatasi perubahan iklim yang dapat menyebabkan pemutihan terumbu karang.</li>
                                        </ol>
                                    </label>
                                <?php } ?>
                            </center>
                        </div>
                        <div class="btn_box mt-3">
                            <button style="width: 100%;" onclick="redirect()">
                                Coba Analisa Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section long_section" style="margin-left: 0; margin-right: 0;">

        <div class="container">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span class="mt-2">
                        0822 1234 5678
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span class="mt-2">
                        coral.ml@gmail.com
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span class="mt-2">
                        Indonesia
                    </span>
                </a>
            </div>
        </div>
    </section>
    <!-- end info_section -->

    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                Copyright &copy; <span id="displayYear"></span> All Rights Reserved
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->

    <script>
        function redirect() {
            location.href = 'pakar.html'
        }
    </script>

</body>

</html>