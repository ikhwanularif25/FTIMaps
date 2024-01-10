<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ganti dengan informasi koneksi ke database Anda
    require 'api/connection.php';
    // Menggunakan parameterized query untuk mencegah SQL injection
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE `nama_admin`=? AND `pass`=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Jika login berhasil, set session dan redirect ke halaman selanjutnya
        $_SESSION['loggedin'] = true;
        header('Location: admin.php');
        exit;
    } else {
        // Jika login gagal, redirect dengan parameter error
        header('Location: login.php?error=1');
        exit;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | FTIMpas</title>
  <link rel="stylesheet" href="css/login.css?v=<?php echo time(); ?>">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">Login</button>
    </form>
    <?php
    // Menampilkan pesan error jika parameter error=1 pada URL
    if(isset($_GET['error']) && $_GET['error'] == 1) { ?>
      <p class="error-message">Username atau password salah. Silakan coba lagi.</p>
    <?php } ?>
    <br>
    <div class="back" onclick="redirect('index.php')">Kembali</div>  
  </div>

  <script>
    function redirect(url) {
    window.location.href = url; // Mengarahkan ke URL yang ditentukan
    }
  </script>
  
</body>
</html>
