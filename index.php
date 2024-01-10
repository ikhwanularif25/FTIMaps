<?php

require 'api/connection.php';
// require 'api/search_auto_complete.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coba.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/autocomplete.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>FTIMaps</title>
</head>

<body>
    <header>
        <img src="pictures/logoUnand.png" alt="">
        <div class="user-manual" id="user-manual">
            <div class="user-manual-content">
                <span class="user-manual-close" onclick="closeUserManual()">&times;</span>
                <h2>Manual Pengguna</h2><br>
                <p>Aplikasi FTI Mini Maps adalah aplikasi penunjuk arah berbasis situs web yang kompatibel dengan laptop atau komputer. FTI Mini Maps berguna untuk para mahasiswa baru atau khalayak umum dalam mencari lokasi gedung atau ruangan yang berkaitan dengan FTI Mini Maps di Universitas Andalas.</p><br>
                <p>FAQ<br>Q: Bagaimana cara mencari ruangan?<br>A: Ketik gedung yang akan dituju pada fitur pencarian/search, lalu tonton video denah gedung</p><br>
                <p>Semua yang pernah dicari oleh pengguna akan tersimpan di riwayat pencarian. Apabila terjadi error atau kesalahan pada aplikasi ini, atau memilihi kritik, saran, maupun rekomendasi fitur dalam aplikasi ini agar bisa berkembang dengan lebih baik, kami sangat terbuka dengan pesan Anda. Hubungi ftiminimaps.service@gmail.com<br>Terima kasih!</p><br><p>Tim Rekayasa Perangkat Lunak kelompok 2</p>
                <!-- Isi user manual -->
            </div>
        </div>
        <div class="kanan">
            <div class="admin">
            <a href="admin.php">Admin</a>
        </div>
    <!-- Tombol untuk membuka popup -->
            <button onclick="openUserManual()"><i class="fas fa-question-circle"></i>
            </button>
        </div>

        
    </header>

    <main>

        <section class="map-container">
            <div class="deskripsi">
                <div class="header-deh">
                    <div class="1">
                        <h1>FTI MINI</h1>
                    </div>
                    <div class="2">
                        <h1>MAPS</h1>
                    </div>
                </div>

                <p>Halo! Selamat datang di FTI Mini Maps! 
FTI Mini Maps dapat membantu kalian terutama mahasiswa Fakultas Teknologi Informasi memberikan informasi berupa petunjuk jalan menuju lokasi-lokasi penting di Universitas Andalas, lho! FTI Mini Maps memberikan panduan yang mudah diakses dan terpercaya kepada mahasiswa baru dan khalayak umum dalam menjelajahi kampus dan sekitarnya. </p>
            </div>
            <div class="search-maps">
                <div class="search-bar">
                    <form method="GET" id="getsearch">
                        <input type="text" placeholder="Search for a location..." id="search_query" autocomplete="off">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="result-box"></div>
                <div class="mini-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3092966718223!2d100.45558247590172!3d-0.9152393353350885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7969c6d51df%3A0xe826014ce459af90!2sAndalas%20University!5e0!3m2!1sen!2sid!4v1700902816296!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </section>
    </main>
    <footer>
        <h2 class="footer-atas">FAKULTAS TEKNOLOGI INFORMASI</h2>
        <div class="footer-bawah">
            
                <p><i class="fas fa-phone"><span class="contact-info"></span></i>Contact Person : +62 812 737723972</p>
                <p><i class="far fa-envelope"><span class="contact-info"></span></i>Email : sekretariat@it.unand.ac.id</p>
                <p>Kampus Limau Manis</p>
                <p>Limau Manis, Kec. Pauh</p>
                <p>Padang, Indonesia</p>
            
        </div>
    </footer>

    <script src="js/popup.js"></script>
    <script src="js/search_auto_complete.js"></script>
    <script src="js/index.js"></script>
</body>

</html>