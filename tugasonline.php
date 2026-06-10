<!DOCTYPE html>
<html>
<head>
    <title>Cek Kategori Usia Mahasiswa</title>
</head>
<body>

    <h2>Cek Kategori Usia Mahasiswa</h2>

    <form method="POST">
        Nama:
        <input type="text" name="nama" required><br><br>

        Umur:
        <input type="number" name="umur" required><br><br>

        <input type="submit" value="Cek Kategori">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nama = $_POST['nama'];
        $umur = $_POST['umur'];

        if ($umur < 13) {
            $kategori = "Anak-anak";
        } elseif ($umur >= 13 && $umur <= 17) {
            $kategori = "Remaja";
        } elseif ($umur >= 18 && $umur <= 59) {
            $kategori = "Dewasa";
        } else {
            $kategori = "Lansia";
        }

        echo "<h3>Hasil</h3>";
        echo "Nama: " . $nama . "<br>";
        echo "Umur: " . $umur . " tahun<br>";
        echo "Kategori Usia: " . $kategori;
    }
    ?>

</body>
</html>