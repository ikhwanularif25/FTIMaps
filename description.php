<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ftimaps';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die('Koneksi database gagal: ' . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/description.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>FTIMaps</title>
</head>

<body>
    <header>
        <div class="logo">
            <img src="pictures/logoUnand.png" alt="">
        <!-- <img src="picture/fti.png" alt=""> -->
        <a href="index.php"><h1>FTI MINI MAPS</h1></a>
        
        </div>
        

        <div class="search-bar">
                    <input type="text" placeholder="Search for a location...">
                    <button type="submit"><i class="fa fa-search"></i></button>
        </div>
    </header>

    <main>

        <section class="map-container">
            <div class="deskripsi">
                <div class="judul">
                        <h1>Fakultas Teknologi Informasi</h1>
                </div>

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet odit magnam commodi ea nemo
                    modi a, praesentium repellendus sunt. Dolore hic error molestias, temporibus nam sapiente officia
                    deserunt! Quasi Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non ducimus explicabo aut
                    labore impedit, beatae cum similique, dolor ratione, natus numquam dolores optio maxime inventore?
                    Sequi quis voluptas accusamus est. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                    aliquam placeat, minima, consequatur perferendis labore quae expedita nobis totam odit magni ipsa
                    dolor amet nihil atque. Doloremque eaque ut consequatur..</p>
            </div>
            <div class="search-maps2">
                
                <div class="mini-map2">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.3091786493746!2d100.45847837590176!3d-0.9153454353351366!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4b7963e1ea631%3A0x452d09b61f76d6ec!2sFaculty%20of%20Information%20Technology!5e0!3m2!1sen!2sid!4v1700993283989!5m2!1sen!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

        </section>
    </main>
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
</body>

</html>