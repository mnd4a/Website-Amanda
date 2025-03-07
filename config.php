<?php
$host = "localhost"; // Server MySQL
$user = "root";      // Username default XAMPP
$pass = "";          // Password default kosong
$dbname = "database_website"; // Ganti dengan nama database kamu

// Membuat koneksi
$conn = new mysqli($host, $user, $pass, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}
?>