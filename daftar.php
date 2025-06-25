<?php
    include "koneksi.php";

   if(isset($_POST["daftar"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $alamat = $_POST['alamat'];

    try {
        $sql = "INSERT INTO pengguna (email, pwd,nama,telepon,alamat) VALUES ('$email', '$password','$nama','$telepon','$alamat')";

        if($conn->query($sql)) {
            header("location: index.php");
        } else {
            header("location: daftar_gagal.php");
        }
    } catch (mysqli_sql_exception) {
        header("location: daftar_gagal.php");
    }
}

?>
<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
    <div class="container">
        <img src="images/header_pengguna.jpg" width="300" height="40">
        <form id="registerForm";
                action="daftar.php"  method="POST">
            <label for="email">Email</label>
            <input type="text" style="width: 280px;" id="email" name="email" required placeholder="Masukkan Email Anda...">
            <label for="password" >Password</label>
            <input type="text" style="width: 280px;" id="password" name="password" required placeholder="Masukkan Password...">
            <label for="nama">Nama</label>
            <input type="text" style="width: 280px;" id="nama" name="nama" required placeholder="Masukkan Nama Anda...">
            <label for="telepon" >Nomor HP</label>
            <input type="text" style="width: 280px;" id="telepon" name="telepon" required placeholder="Masukkan Nomor Handphone...">
            <label for="alamat">Alamat</label>
            <input type="text" style="width: 280px;" id="alamat" name="alamat" required placeholder="Masukkan Alamat Anda...">
            <button type="submit" name="daftar">Daftar Sekarang</button>
        </form>
    </div>
</body>
</html>