
<?php
if(isset($_POST["kirim"])) {
    header("location: lupa_password.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
 <div class="container">
        <h1>LUPA PASSWORD</h1>
        <div style="font-size: 12px;">
        <div style="color: red;">
        <div style="text-align: center;">
            <hr />
            <i>Silakan kirim Email Anda</i>
        <img src="images/maaf.jpg" width="250" height="200" style="center">
        <form id="loginForm"
                action="lupa_password.php"  method="POST">
            <label for="email"></label>
            <input type="text" style="width: 280px;" id="email" name="email" required placeholder="Masukkan Email Anda...">
            <button type="submit" name="send">Kirim Password Anda</button>
        </form>
        <?php include "footer.php" ?>
    </div>
</body>
</html>