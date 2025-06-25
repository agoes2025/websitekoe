<?php
if(isset($_POST["goto"])) {
    header("location: beranda.php");
}
session_start();
include 'koneksi.php'; // File koneksi ke database

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['nama_email'])) {
    header("Location: index.php");
    exit();
}
// Ambil data pengguna dari database
$user_email = $_SESSION['nama_email'];
$query = "SELECT * FROM pengguna WHERE email = '$user_email'";
$result = mysqli_query($conn, $query);

if ($result) {
    $user = mysqli_fetch_assoc($result);
    //echo "Selamat datang, " . htmlspecialchars($user['nama']) . "!<br>";
    //echo "Email Anda: " . htmlspecialchars($user['email']) . "<br>";
} else {
    echo "Terjadi kesalahan saat mengambil data.";
}
$user_email = $_SESSION['nama_email'];
?>
<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
 <div class="container">
        <h1>Selamat Datang</h1>
        <div style="font-size: 20px;">
        <div style="color: blue;">
        <div style="text-align: center;">
            <hr />
        <i><?php echo $user['nama']; ?></i>
        <img src="images/selamat.jpg" width="250" height="200" style="center">
        <form id="loginForm"
                action="login_berhasil.php"  method="POST">
            <button type="submit" name="goto">Silakan ke Beranda</button>
        </form>
        <?php include "footer.php" ?>
    </div>
</body>
</html>