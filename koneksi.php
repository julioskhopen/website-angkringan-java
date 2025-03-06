<?php
$host = 'localhost';  // Ganti dengan host database Anda, biasanya 'localhost'
$user = 'root';       // Ganti dengan username MySQL Anda
$password = '';       // Ganti dengan password MySQL Anda (kosongkan jika tidak ada)
$database = 'Angkringan Papsi';  // Nama database Anda

// Membuat koneksi ke database
// $conn = mysqli_connect($host, $user, $password, $database);
$conn = mysqli_connect("localhost", "root", "", "angkringan_papsi");

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>