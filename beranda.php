<!DOCTYPE html>
<html lang="id">
<?php include "header.php" ?>
<body>
    <div class="containeratas">
          <h1>Beranda</h1>
          <div>
        <?php
        // Folder tempat gambar disimpan
        $imageDir = 'slide_show/';
        $images = glob($imageDir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

        // Loop untuk menampilkan gambar
        foreach ($images as $index => $image) {
            echo '<img class="slides" src="' . $image . '" alt="Slide ' . ($index + 1) . '">';
        }
        ?>
        <!-- Tombol navigasi -->
        <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
        <button class="next" onclick="changeSlide(1)">&#10095;</button>
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slides');

        // Fungsi untuk mengubah slide
        function changeSlide(direction) {
            slides[slideIndex].classList.remove('active');
            slideIndex = (slideIndex + direction + slides.length) % slides.length;
            slides[slideIndex].classList.add('active');
        }

        // Menampilkan slide pertama saat halaman dimuat
        slides[slideIndex].classList.add('active');
    </script>

    </div>
<body>
    <div class="containerbawah">
    <?php include "menu.php" ?>
</body>
</html>