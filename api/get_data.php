<?php
require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["search_query"])) {
    $search_query = $_GET["search_query"];

    // Query untuk mendapatkan informasi dari database
    $sql = "SELECT gmaps, keterangan_tempat, nama_gedung FROM gedung WHERE nama_gedung LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = array(
            'gmaps' => $row["gmaps"],
            'keterangan_tempat' => $row["keterangan_tempat"],
            'nama_gedung' => $row["nama_gedung"]
        );
        echo json_encode($data); // Mengembalikan hasil dalam format JSON
    } else {
        // Jika tidak ada hasil dari database
        echo json_encode(null);
    }
} else {
    // Jika tidak ada parameter search_query
    echo json_encode(null);
}
?>
