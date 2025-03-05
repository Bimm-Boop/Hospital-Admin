<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit_dokter'])) {
        $nama_dokter = $_POST['nama_dokter'];
        $spesialis = $_POST['spesialisasi'];
        $no_telp = $_POST['no_telp'];

        $sql_dokter = "INSERT INTO dokter (nama_dokter, spesialis, no_telp) VALUES ('$nama_dokter', '$spesialis', '$no_telp')";
        if ($db->query($sql_dokter)) {
            echo "<script>alert('Data dokter berhasil disimpan!'); window.location='rumah_sakit.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data dokter: " . $db->error . "');</script>";
        }
    } elseif (isset($_POST['submit_perawat'])) {
        $nama_perawat = $_POST['nama_perawat'];
        $shift = $_POST['shift'];
        $no_telp = $_POST['no_telp_perawat'];

        $sql_perawat = "INSERT INTO perawat (nama_perawat, shift, no_telp) VALUES ('$nama_perawat', '$shift', '$no_telp')";
        if ($db->query($sql_perawat)) {
            echo "<script>alert('Data perawat berhasil disimpan!'); window.location='rumah_sakit.php';</script>";
        } else {
            echo "<script>alert('Gagal menyimpan data perawat: " . $db->error . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Dokter dan Perawat</title>
</head>
<body>
    <h1>Input Data Dokter</h1>
    <form method="POST" action="">
        <label>Nama Dokter:</label>
        <input type="text" name="nama" required><br>

        <label>Spesialis:</label>
        <input type="text" name="spesialisasi" required><br>

        <label>No. Telepon:</label>
        <input type="text" name="no_telp" required><br>

        <button type="submit" name="submit_dokter">Simpan Dokter</button>
    </form>

    <h1>Input Data Perawat</h1>
    <form method="POST" action="">
        <label>Nama Perawat:</label>
        <input type="text" name="nama_perawat" required><br>

        <label>Shift:</label>
        <select name="shift" required>
            <option value="Pagi">Pagi</option>
            <option value="Siang">Siang</option>
            <option value="Malam">Malam</option>
        </select><br>

        <label>No. Telepon:</label>
        <input type="text" name="no_telp_perawat" required><br>

        <button type="submit" name="submit_perawat">Simpan Perawat</button>
    </form>

    <a href="rumah_sakit.php">Kembali</a>
</body>
</html>
