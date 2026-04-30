<?php

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

echo "<h2>Data yang kamu kirim:</h2>";
echo "Nama: " . $nama . "<br>";
echo "Email: " . $email . "<br>";
echo "Pesan: " . $pesan . "<br>";

echo "<br><a href='index.php'>Kembali</a>";

?>