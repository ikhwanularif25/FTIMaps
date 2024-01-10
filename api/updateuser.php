<?php
// Sisipkan file koneksi ke database
require 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Memeriksa apakah ada data yang diterima dari formulir
    if (isset($_POST['new_username']) && isset($_POST['new_password'])) {
        require 'connection.php'; // Sisipkan file koneksi ke database

        // Data dari formulir
        $newUsername = $_POST['new_username'];
        $newPassword = $_POST['new_password'];

        // Query untuk mengupdate nama_admin dan password sesuai dengan nama_admin yang login
        $query = "UPDATE admin SET nama_admin = ?, pass = ? WHERE nama_admin = ?";

        // Persiapan statement
        $stmt = $conn->prepare($query);

        // Hash password sebelum menyimpannya ke dalam database
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        if ($stmt) {
            // Binding parameter ke statement
            $stmt->bind_param("sss", $newUsername, $hashedPassword, $_SESSION['nama_admin']);

            // Eksekusi statement
            if ($stmt->execute()) {
                // Jika update berhasil
                echo "Data pengguna berhasil diperbarui.";
            } else {
                // Jika terjadi kesalahan saat eksekusi query
                echo "Terjadi kesalahan saat memperbarui data pengguna: " . $stmt->error;
            }
            
            // Menutup statement
            $stmt->close();
        } else {
            // Jika terjadi kesalahan saat persiapan statement
            echo "Terjadi kesalahan saat persiapan statement: " . $conn->error;
        }

        // Menutup koneksi
        $conn->close();
    } else {
        // Jika data dari formulir tidak lengkap
        echo "Data tidak lengkap";
    }
} else {
    // Jika bukan request POST
    echo "Metode request tidak diizinkan.";
}

?>
