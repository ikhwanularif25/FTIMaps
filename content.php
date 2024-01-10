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
    <link rel="stylesheet" href="css/description.css?v=<?php echo time(); ?>"">
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
                    <input type="text" placeholder="Search for a location..." id="search_query">
                    <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <div class="admin">
            <a href="admin.php">Admin</a>
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
    <script src="js/search.js"></script>
    <script src="js/search2.js"></script>
    <!-- SCRIPT FUNCTION END -->
</body>
</html>