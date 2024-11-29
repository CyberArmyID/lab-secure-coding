<?php
$servername = "localhost"; // Ganti dengan server database Anda jika perlu
$username = "root"; // Ganti dengan username database Anda
$password = "root"; // Ganti dengan password database Anda
$dbname = "secure_coding"; // Nama database yang dibuat sebelumnya

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
$host  = 'http://localhost:8003';
// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
error_reporting(E_ALL); // Melaporkan semua jenis error
ini_set('display_errors', 1);

session_start();
?>
