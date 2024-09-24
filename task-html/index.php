<?php
    // Data profil dinamis
    $nama = "YESA VIOLA";
    $email = "yesa.122140133@student.itera.ac.id";
    $telepon = "+628136609";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil <?php echo $nama; ?></title>
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <!-- Header -->
    <header>
        <h1>Selamat Datang di Profil <?php echo $nama; ?></h1>
    </header>

    <img src="yola.jpg" alt="image" width="150" height="200">

    <!-- Navigasi -->
    <nav>
        <ul>
            <li><a href="#tentang">Tentang Saya</a></li>
            <li><a href="#pendidikan">Pendidikan</a></li>
            <li><a href="#kontak">Kontak</a></li>
        </ul>
    </nav>

    <main>
        <!-- Tentang Saya -->
        <section id="tentang">
            <h2>Tentang Saya</h2>
            <p>Haloo, Nama saya <?php echo $nama; ?>. Saya seorang mahasiswa di Institut Teknologi Sumatera angkatan 2022</p>
        </section>

        <!-- Pendidikan -->
        <section id="pendidikan">
            <h2>Pendidikan</h2>
            <article>
                <h3>Sarjana Teknik Informatika</h3>
                <p>Saat ini saya sedang menempuh pendidikan S1 Teknik Informatika di ITERA.</p>
            </article>

            <article>
                <h3>SMA Negeri 1 KOTAAGUNG</h3>
                <p>Sebelum melanjutkan Pendidikan di perguruan tinggi INSTITUT TEKNOLOGI SUMATERA , saya menyelesaikan pendidikan menengah di SMA Negeri 1 KOTAAGUNG</p>
            </article>
        </section>

        <!-- Kontak -->
        <section id="kontak">
            <h2>Kontak Saya</h2>
            <address>
                <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                <p>Telepon: <?php echo $telepon; ?></p>
            </address>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 - <?php echo $nama; ?>. Semua Hak Dilindungi.</p>
    </footer>

</body>

</html>