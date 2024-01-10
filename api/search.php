<?php
require 'connection.php';

$search_query = $_GET["search_query"] ?? '';

// Inisialisasi array untuk menampung hasil pencarian
$search_result = [];

if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($search_query)) {
    // Query untuk mendapatkan informasi dari database sesuai dengan hasil pencarian
    $sql = "SELECT * FROM gedung WHERE nama_gedung LIKE '%$search_query%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Loop melalui hasil query dan tambahkan ke dalam array $search_result
        while ($row = $result->fetch_assoc()) {
            $search_result[] = [
                "nama_gedung" => $row["nama_gedung"],
                "deskripsi_gedung" => $row["deskripsi_gedung"],
                "gmaps" => $row["gmaps"]
            ];
        }
    }
}

// Output data hasil pencarian dalam format JSON
echo json_encode($search_result);
?>
