<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sistem _data_buku_perpustakaan"; // Ganti sesuai nama database kamu

// Membuat koneksi
$conn = mysqli_connect($host, $user, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>

