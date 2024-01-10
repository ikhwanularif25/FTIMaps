<?php
require 'api/connection.php';

$sqlMotor = "SELECT * FROM rute WHERE jenis = 1";
$resultMotor = $conn->query($sqlMotor);

$sqlJalan = "SELECT * FROM rute WHERE jenis = 2";
$resultJalan = $conn->query($sqlJalan);
?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coba.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/rute.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Rute | FTIMaps</title>
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
        <div class="pilih-rute">
            <button id="motorBtn" type="button">Motor</button>
            <button id="jalanBtn" type="button">Jalan</button>
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

    <!-- MAIN CONTENT -->
    <main>
    <div id="motor" class="contents show">
        <?php include 'rute/motor.php'; ?>
    </div>
    <div id="jalan" class="contents">
        <?php include 'rute/jalan.php'; ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function(){
            const buttonToContent = {
                'motorBtn' : 'motor',
                'jalanBtn' : 'jalan'
            };

            Object.keys(buttonToContent).forEach(buttonId => {
                    const button = document.getElementById(buttonId);
                    button.addEventListener('click', function() {
                        // Menyembunyikan semua contents
                        document.querySelectorAll('.contents').forEach(content => {
                            content.classList.remove('show');
                        });

                        // Menampilkan content yang sesuai dengan tombol yang ditekan
                        const contentId = buttonToContent[buttonId];
                        document.getElementById(contentId).classList.add('show');
                    });
                });
            });
    </script>
    </main>
    <!-- MAIN CONTENT END -->


    <script src="js/popup.js"></script>
</body>
</html>