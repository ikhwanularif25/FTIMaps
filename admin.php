<?php
// Sisipkan file koneksi ke database
require 'api/connection.php';

// Mulai session
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Jika belum, redirect ke halaman login
    header('Location: login.php');
    exit;
}

require 'api/ajax.php';
require 'api/updateuser.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/user.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Admin | FTIMaps</title>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="logo">
            <img src="pictures/logoUnand.png" alt="">
            <a href="index.php">FTI MINI MAPS</a>
        </div>
        <div class="dropdown">
            <button onclick="toggleDropdown()" class="dropbtn">Pengaturan Pengguna</button>
            <div id="dropdownContent" class="dropdown-content">
                <a href="#" class="edituser" onclick="openSettings()">Pengaturan</a>
                <form action="api/logout.php" method="post">
                    <button type="submit" class="logout">Logout</button>
                </form>
            </div>
        </div>
        <script>
// Fungsi untuk membuka modal edit user
function openUserSettingsModal() {
    var modal = document.getElementById("settingsModal");
    modal.style.display = "block";
}

// Fungsi untuk menutup modal edit user
function closeUserSettingsModal() {
    var modal = document.getElementById("settingsModal");
    modal.style.display = "none";
}

// Menemukan tag <a> dengan class edituser dan menambahkan event listener
var editUserLink = document.querySelector("a.edituser");
editUserLink.addEventListener("click", function(event) {
    event.preventDefault(); // Menghentikan perilaku default dari link
    openUserSettingsModal(); // Membuka modal edit user
});
</script>
    </header>
    <!-- HEADER END -->

    <!-- MAIN -->
    <main>
        <!-- SIDE BAR -->
        <sidebar class="sidebar">
            <button id="listGedungBtn" type="button">List Gedung</button>
            <button id="tambahGedungBtn" type="button">Tambah Gedung</button>
            <button id="listVideoBtn" type="button">List Video</button>
            <button id="tambahVideoBtn" type="button">Tambah Video</button>
        </sidebar>
        <!-- <script src="js/pilihcontent.js"></script> -->
        
        <!-- SIDEBAR END -->

        <!-- MAIN CONTENT -->
        <div id="listGedung" class="contents show">
            <?php include 'admin/listGedung.php'; ?>
        </div>

        <div id="tambahGedung" class="contents">
            <?php include 'admin/tambahGedung.php'; ?>
        </div>

        <div id="listVideo" class="contents">
            <?php include 'admin/listVideo.php'; ?>
        </div>

        <div id="tambahVideo" class="contents">
            <?php include 'admin/tambahVideo.php'; ?>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Membuat objek yang mengaitkan setiap tombol dengan konten yang sesuai
                const buttonToContent = {
                    'listGedungBtn': 'listGedung',
                    'tambahGedungBtn': 'tambahGedung',
                    'listVideoBtn': 'listVideo',
                    'tambahVideoBtn': 'tambahVideo'
                };

                // Menambah event listener untuk setiap tombol
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
        <!-- MAIN CONTENT END -->
    </main>

    <!-- EDIT USER -->
    <div id="settingsModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeSettingsModal()">&times;</span>
            <h2>Pengaturan Pengguna</h2>
            <form id="userSettingsForm" method="post">
                <label for="new_username">Username Baru:</label>
                <input type="text" id="new_username" name="new_username" required><br><br>

                <label for="new_password">Password Baru:</label>
                <input type="password" id="new_password" name="new_password" required><br><br>

                <button type="submit">Perbarui Pengguna</button>
            </form>
        </div>
    </div>
    <!-- EDIT USER END -->
    <!-- MAIN END -->

    <!-- FOOTER -->
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
    <!-- FOOTER END -->

    <!-- SCRIPT -->
    <script>
        function toggleDropdown() {
    document.getElementById("dropdownContent").classList.toggle("show");
    }

    // Menutup dropdown saat pengguna mengklik di luar dropdown
    window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
    }
    </script>

    <!-- <script src="js/user.js"></script> -->
    <script src="js/edituser.js"></script>
    <script>
    function konfirmasiHapus(id) {
        var konfirmasi = confirm("Apakah Anda yakin ingin menghapus data ini?");
        if (konfirmasi) {
            // Jika konfirmasi diterima, submit form untuk hapus data
            document.getElementById('hapusForm_' + id).submit();
        }
    }
</script>
</body>
</html>
