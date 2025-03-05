<?php
include('database.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $tgl_lahir = $_POST['tanggal_lahir'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO pasien (nama, tanggal_lahir, alamat, jenis_kelamin) VALUES ('$nama', '$tanggal_lahir', '$alamat', '$jenis_kelamin')";
    if ($db->query($sql)) {
        echo "<script>alert('Data pasien berhasil disimpan!'); window.location='rumah_sakit.php';</script>";
    } else {
        echo "<script>alert('Gagal menyimpan data pasien: " . $db->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pasien</title>
</head>
<body>
    <h1>Input Data Pasien</h1>
    <form method="POST" action="">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" required><br>

        <label>Alamat:</label>
        <input type="text" name="alamat" required><br>

        <label>Jenis Kelamin:</label>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <button type="submit">Simpan</button>
    </form>
    <a href="rumah_sakit.php">Kembali</a>
</body>
</html>
