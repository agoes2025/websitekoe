
<?php
if(isset($_POST["back"])) {
    header("location: index.php");
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
            <i>Email dan Password Anda salah</i>
        <img src="images/maaf.jpg" width="250" height="200" style="center">
        <form id="loginForm"
                action="login_gagal.php"  method="POST">
            <button type="submit" name="back">Kembali Login</button>
        </form>
        <div style="text-align: center;">
            <a href="daftar.php" style="margin-right: 20px;">Daftar Sekarang</a>
            <a href="lupa_password.php" style="margin-right: 20px;">Lupa Password</a>
        </div>
        <?php include "footer.php" ?>
    </div>
</body>
</html>