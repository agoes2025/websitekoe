<?php
session_start();
include 'koneksi.php'; // Sertakan file koneksi.php

if(isset($_POST["login"])) {

$email = $_POST['email'];
$password = $_POST['password'];

// Lindungi dari SQL Injection
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);


$sql = "SELECT * FROM pengguna WHERE email= '$email' AND pwd= '$password'";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['nama_email'] = $row['email'];
    $_SESSION['nama_user'] = $row['nama'];
    //echo "user: " . $row["nama"];
    header("location: login_berhasil.php"); // Redirect ke halaman setelah login berhasil
} else {

    header("location: login_gagal.php");
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
    <div class="container">
        <h1>...MONGGO...</h1>
        <img src="images/monggo.jpg" width="250" height="200">
        <form id="loginForm"
                action="index.php"  method="POST">
            <label for="email">Email</label>
            <input type="text" style="width: 280px;" id="email" name="email" >
            <label for="password" >Password</label>
            <input type="password" style="width: 280px;" id="password" name="password">
            <button type="submit" name="login">Login</button>
        </form>
        <div style="text-align: center;">
            <a href="daftar.php" style="margin-right: 20px;">Daftar Sekarang</a>
            <a href="lupa_password.php" style="margin-right: 20px;">Lupa Password</a>
        </div>
        <?php include "footer.php" ?>
    </div>
</body>
</html>