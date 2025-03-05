<?php
include('database.php');

$sql = "SELECT * FROM pasien";
$result = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Pasien</title>
</head>
<body>
    <h1>Data Pasien</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID Pasien</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Tagihan</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id_pasien']; ?></td>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['alamat']; ?></td>
                    <td><?php echo $row['jenis_kelamin']; ?></td>
                    <td><a href="tagihan.php?id=<?php echo $row['id_pasien']; ?>">Tagihan</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
    <a href="rumah_sakit.php">Kembali</a>
</body>
</html>
