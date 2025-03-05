<?php
include 'database.php'; 

$query = "SELECT * FROM pasien";
$result = $db->query($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hospital Management System</title>
</head>
<body>
    <h1>Hospital Management System</h1>
    <a href="insert_pasien.php">1. Input Data Pasien</a>
    <a href="insert_dokter.php">2. Input Data Dokter & Perawat</a>

    <h2>Daftar Pasien</h2>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
        </tr>
        <?php
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['nama']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>{$row['alamat']}</td>
                <td>{$row['jenis_kelamin']}</td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>