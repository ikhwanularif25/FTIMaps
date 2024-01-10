<?php
// Inisialisasi variabel
$id_gedung = "";
$nama_gedung = "";
$deskripsi_gedung = "";
$gmaps = "";

// Fungsi untuk mendapatkan data gedung dari database
function getGedungData()
{
    global $conn;
    $query = "SELECT * FROM gedung";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Fungsi untuk menambah data gedung ke dalam database
function tambahGedung($nama, $deskripsi, $gmaps)
{
    global $conn;
    $query = "INSERT INTO gedung (nama_gedung, deskripsi_gedung, gmaps) VALUES ('$nama', '$deskripsi', '$gmaps')";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Fungsi untuk menghapus data gedung dari database
function hapusGedung($id)
{
    global $conn;
    $query = "DELETE FROM gedung WHERE id_gedung = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Fungsi untuk mendapatkan data gedung berdasarkan ID dari database
function getDataGedungById($id)
{
    global $conn;
    $query = "SELECT * FROM gedung WHERE id_gedung = $id";
    $result = mysqli_query($conn, $query);
    return $result->fetch_assoc();
}

// Fungsi untuk mengupdate data gedung di dalam database
function updateGedung($id, $nama, $deskripsi, $gmaps)
{
    global $conn;
    $query = "UPDATE gedung SET nama_gedung = '$nama', deskripsi_gedung = '$deskripsi', gmaps = '$gmaps' WHERE id_gedung = $id";
    $result = mysqli_query($conn, $query);
    return $result;
}

// Jika tombol Tambah Gedung ditekan
if (isset($_POST['tambah'])) {
    $nama_gedung = $_POST['nama_gedung'];
    $deskripsi_gedung = $_POST['deskripsi_gedung'];
    $gmaps = $_POST['gmaps'];
    tambahGedung($nama_gedung, $deskripsi_gedung, $gmaps);
    header("Location: admin.php"); // Redirect kembali ke halaman admin setelah tambah data
    exit;
}

// Jika tombol Hapus Gedung ditekan
if (isset($_POST['hapus'])) {
    $id_gedung = $_POST['id_gedung'];
    hapusGedung($id_gedung);
    header("Location: admin.php"); // Redirect kembali ke halaman admin setelah hapus data
    exit;
}

// Jika tombol Edit Gedung ditekan
if (isset($_POST['edit'])) {
    $id_gedung = $_POST['id_gedung'];
    $dataGedung = getDataGedungById($id_gedung);
    // Mengisi variabel dengan data yang akan diubah
    $id_gedung = $dataGedung['id_gedung'];
    $nama_gedung = $dataGedung['nama_gedung'];
    $deskripsi_gedung = $dataGedung['deskripsi_gedung'];
    $gmaps = $dataGedung['gmaps'];
}

// Jika tombol Simpan Edit ditekan
if (isset($_POST['simpan'])) {
    $id_gedung = $_POST['id_gedung'];
    $nama_gedung = $_POST['nama_gedung'];
    $deskripsi_gedung = $_POST['deskripsi_gedung'];
    $gmaps = $_POST['gmaps'];
    updateGedung($id_gedung, $nama_gedung, $deskripsi_gedung, $gmaps);
    header("Location: admin.php"); // Redirect kembali ke halaman admin setelah simpan perubahan
    exit;
}

// Mengambil data gedung dari database
$dataGedung = getGedungData();
?>