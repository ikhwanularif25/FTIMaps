<?php
require 'api/connection.php';

$judul = "";
$rincian = "";
$gmaps = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["search_query"])) {
    $search_query = $_GET["search_query"];

    // Query untuk mendapatkan informasi dari database sesuai dengan hasil pencarian
    $sql = "SELECT * FROM gedung WHERE nama_gedung LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Ambil data dari hasil query
        $row = $result->fetch_assoc();
        $judul = $row["nama_gedung"];
        $rincian = $row["deskripsi_gedung"];
        $gmaps = $row["gmaps"];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coba.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/description.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/autocomplete.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>FTIMaps</title>
</head>


<body>
    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="pictures/logoUnand.png" alt="">
            <a href="index.php">FTI MINI MAPS</a>
        </div>
        <div class="search-bar">
            <form method="GET" id="getsearch">
                    <input type="text" placeholder="Search for a location..." id="search_query" autocomplete="off">
                    <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="result-box"></div>
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
    <!-- HEADER EBD -->

    <!-- MAIN -->
    <main>
        <section class="map-container">
            <div class="deskripsi">
                <div class="judul" id="judul">
                    <h1></h1>
                </div>
                <p id="rincian"></p>
            </div>
            <div class="search-maps2">
                <div class="mini-map2" id="gmaps">
                    <!-- pake js -->
                </div>
            </div>
        </section>
    </main>
    <!-- MAIN END -->

    <!-- FOOTER -->
    <footer>
        <h2 class="footer-atas">FAKULTAS TEKNOLOGI INFORMASI</h2>
        <div class="footer-bawah">
            <div class="footer_kiri">
                <p><i class="fas fa-phone"><span class="contact-info"></span></i>Contact Person : +62 812 737723972</p>
                <p><i class="far fa-envelope"><span class="contact-info"></span></i>Email : sekretariat@it.unand.ac.id
                </p>
            </div>
            <div class="footer_kanan">
                <p>Kampus Limau Manis</p>
                <p>Limau Manis, Kec. Pauh</p>
                <p>Padang, Indonesia</p>
            </div>
        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- SCRIPT FUNCTION -->
    <script src="js/search_auto_complete.js"></script>
    <script src="js/search.js"></script>
    <script src="js/search2.js"></script>
    <script src="js/popup.js"></script>
    <!-- SCRIPT FUNCTION END -->
</body>
</html>