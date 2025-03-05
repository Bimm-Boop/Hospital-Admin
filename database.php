<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'hospital_management';

$db = new mysqli($host, $user, $password, $dbname);

if ($db->connect_error) {
    die('Koneksi gagal: ' . $db->connect_error);
}
?>
