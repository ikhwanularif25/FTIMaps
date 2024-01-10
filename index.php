<?php

require 'api/connection.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coba.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>FTIMaps</title>
</head>

<body>
    <header>
        <img src="pictures/logoUnand.png" alt="">
        <div class="admin">
            <a href="admin.php">Admin</a>
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

                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos eveniet odit magnam commodi ea nemo
                    modi a, praesentium repellendus sunt. Dolore hic error molestias, temporibus nam sapiente officia
                    deserunt! Quasi Lorem, ipsum dolor sit amet consectetur adipisicing elit. Non ducimus explicabo aut
                    labore impedit, beatae cum similique, dolor ratione, natus numquam dolores optio maxime inventore?
                    Sequi quis voluptas accusamus est. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime,
                    aliquam placeat, minima, consequatur perferendis labore quae expedita nobis totam odit magni ipsa
                    dolor amet nihil atque. Doloremque eaque ut consequatur..</p>
            </div>
            <div class="search-maps">
                <div class="search-bar">
                    <form method="GET" id="getsearch">
                        <input type="text" placeholder="Search for a location..." id="search_query">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div id="suggestionsBox"></div>
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

    <script src="js/index.js"></script>
</body>

</html>