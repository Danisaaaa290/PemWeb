<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Danisa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Danisa Aldina Rajwa</h1>
    <p>Mahasiswa Teknik Informatika</p>
</header>

<section>
    <h2>Tentang Saya</h2>
    <p>Saya tertarik pada pengembangan sistem dan web.</p>
</section>

<section>
    <h2>Project</h2>
    <div class="card">Sistem Pemesanan</div>
    <div class="card">Website Event Kampus</div>
</section>

<section>
    <h2>Kontak</h2>

    <form action="proses.php" method="POST">
        <input type="text" name="nama" placeholder="Nama" required>
        <input type="email" name="email" placeholder="Email" required>
        <textarea name="pesan" placeholder="Pesan" required></textarea>
        <button type="submit">Kirim</button>
    </form>

</section>

</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    echo "<h2>Pesan berhasil dikirim!</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Pesan: $pesan</p>";
    echo "<a href='index.php'>Kembali</a>";
}
?>