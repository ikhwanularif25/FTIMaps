<?php
    if ($resultMotor->num_rows > 0) {
        while ($rowMotor = $resultMotor->fetch_assoc()) {
            echo "<div>";
            echo "<h3>" . $rowMotor['nama_rute'] . "</h3>";
            echo "<iframe width='560' height='315' src='" . $rowMotor['link_video'] . "' frameborder='0' allowfullscreen></iframe>";
            echo "</div>";
        }
    } else {
        echo "<p>Tidak ada rute untuk motor.</p>";
    }
?>


<iframe  width='560' height='315' src="https://drive.google.com/file/d/1aXbksOm1B_0u5EADuVolameBs4sNzVrl/preview" frameborder="0"></iframe>