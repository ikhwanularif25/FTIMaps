<?php
    if ($resultJalan->num_rows > 0) {
        while ($rowJalan = $resultJalan->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $rowJalan['nama_rute'] . "</h3>";
            echo "<iframe width='560' height='315' src='" . $rowJalan['link_video'] . "' frameborder='0' allowfullscreen></iframe>";
            echo "</div>";
        }
    } else {
        echo "<p>Tidak ada rute untuk jalan.</p>";
    }
?>