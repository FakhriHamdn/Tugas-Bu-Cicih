<?php

    require 'funcs.php';


    // Menjalankan function query yang ada di function.php
    $coffes = query("SELECT * FROM kopi WHERE id_kopi IN (1, 2, 3, 4, 5, 6)");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,700;1,700&family=Roboto:wght@500&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Navigasi start -->
    <nav class="navbar">

        <a href="#home" class="navbar-logo">Kedai<span>kopi</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Paling laku</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
            <a href="#" id="humburger-menu"><i data-feather="menu"></i></a>
        </div>

    </nav>
    <!-- Navigasi end -->

    <!-- Header section start -->
    <section class="hero" id="home">

        <main class="content">
            <h1>Minum <span>kopimu,</span><br>Kerjakan <span>kodingmu.</span></h1>
            <p>Buat web yang keren banget dengan secangkir kopi anget</p>
            <a href="menu.php" class="cta">Lihat Menu</a>
        </main>

    </section>
    <!-- Header section end -->

    <!-- About section start -->
    <section class="about" id="about">
        <h2><span>Tentang</span> Kami</h2>

        <div class="row">
            <div class="about-img">
                <img src="img/tentang-kami3.jpg" alt="tetang kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih kopi kami</h3>
                <p>Kami menawarkan kopi yang menyehatkan dan menyegarkan, yang disajikan dengan sepenuh hati, mulai dari penyedian bahan sampai ke sajian.</p>
                <p>Kopi mampu menurunkan resiko alzeimer, kanker otak, meremajakan kulit hingga menambah konsentrasi. Itu adalah sedikit dari banyaknya kebaikan yang diberikan kopi untuk kesehatan manusia.</p>
                <a href="pelanggan.php" class="cta">Lihat Pelanggan</a>
                <br>
                <a href="transaksi.php" class="cta">Lihat Detail Transaksi</a>
            </div>
        </div>
    </section>
    <!-- About section end -->

    <!-- Menu section start -->
    <section class="menu" id="menu">
        <h2><span>Paling</span> Laku</h2>
        <p>Rasa dari kopi yang nikmat dan aromanya yang harum berhasil membuat banyak orang tertarik dan berlangganan. </p>
        <p>yang bener jaki</p>

        <div class="row">
        <?php $i = 1; ?>
        <?php foreach( $coffes as $coffe ) : ?>
            <div class="menu-card">
                <img src="img/menu/<?php echo $i ?>.jpg" alt="Espresso" class="menu-card-img">
                <h3 class="menu-card-title">- <?php echo $coffe["nama_kopi"] ?> -</h3>
                <p class="menu-card-price">IDR <?php echo $coffe["harga"] ?>K</p>
            </div>
        <?php $i += 1; ?>
        <?php endforeach ?>
    </section>
    <!-- Menu section end -->

    <!-- Contact section start -->
    <section class="contact" id="contact">
        <h2>Kontak <span>kami</span></h2>
        <p>Ingin menjadi lebih dekat? <br>Laporkan kritik, saran serta ulasanmu di sosial media kami :</p>

        <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.887977566817!2d106.8461093146085!3d-6.408429264457809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eb57e44183cd%3A0x213b9203c93f77ab!2sKyefa%20Cell!5e0!3m2!1sen!2sid!4v1678238433102!5m2!1sen!2sid"             allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

            <form action="">
                <div class="input-group">
                    <i data-feather="user"></i>
                    <input type="text" name="nama" id="nama" placeholder="nama" autocomplete="off">
                </div>
                <div class="input-group">
                    <i data-feather="mail"></i>
                    <input type="email  " name="nama" id="nama" placeholder="email" autocomplete="off">
                </div>
                <div class="input-group">
                    <i data-feather="phone"></i>
                    <input type="text" name="nama" id="nama" placeholder="no hp" autocomplete="off">
                </div>
                <button type="submit" class="btn">kirim pesan</button>
            </form>
        </div>
        
    </section>
    <!-- Contact section end -->

    <!-- Footer start -->
    <footer>
        <div class="socials">
            <a href="#"><i data-feather="instagram"></i></a>
            
            <a href="#"><i data-feather="twitter"></i></a>

            <a href="#"><i data-feather="facebook"></i></a>
        </div>

        <div class="links">
            <a href="#home">Home</a>
            <a href="#about">Tentang Kami</a>
            <a href="#menu">Menu</a>
            <a href="#contact">Kontak</a>
            <a href="#contact">Test</a>
        </div>

        <div class="credit">
            <p>Created by <a href="">zakiandriansa</a>. | &copy; 2023.</p>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Icons -->
    <script>
        feather.replace()
    </script>

    <!-- JS -->
    <script src="js/script.js"></script>
</body>
</html>