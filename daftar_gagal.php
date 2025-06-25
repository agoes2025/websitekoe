
<?php
if(isset($_POST["back"])) {
    header("location: daftar.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
 <div class="container">
        <h1>Maaf... </h1>
        <div style="font-size: 12px;">
        <div style="color: red;">
        <div style="text-align: center;">
            <hr />
            <i>Pengguna sudah pernah digunakan sebelumnya</i>
        <img src="images/maaf.jpg" width="250" height="200" style="center">
        <form id="loginForm"
                action="daftar_gagal.php"  method="POST">
            <button type="submit" name="back">Masukan Email yang lain</button>
        </form>
        <?php include "footer.php" ?>
    </div>
</body>
</html>