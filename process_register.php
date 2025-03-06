<?php
// Mulai session untuk pesan flash
session_start();

// Koneksi ke database
$host = "localhost";
$user = "root"; // Ganti jika menggunakan username database lain
$password = ""; // Ganti jika password database berbeda
$dbname = "angkringan_papsi"; // Nama database Anda

$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $username = $conn->real_escape_string(trim($_POST["username"]));
    $email = $conn->real_escape_string(trim($_POST["email"]));
    $password = $conn->real_escape_string(trim($_POST["password"]));
    $confirm_password = $conn->real_escape_string(trim($_POST["confirm_password"]));

    // Validasi data
    if (empty($username) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error'] = "Semua kolom harus diisi!";
        header("Location: register.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = "Email tidak valid!";
        header("Location: register.php");
        exit();
    }

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Konfirmasi password tidak cocok!";
        header("Location: register.php");
        exit();
    }

    // Hash password sebelum disimpan
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Cek apakah username atau email sudah ada di database
    $check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
    $result = $conn->query($check_query);

    if ($result->num_rows > 0) {
        $_SESSION['error'] = "Username atau email sudah digunakan!";
        header("Location: register.php");
        exit();
    }

    // Simpan data ke database
    $insert_query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($insert_query) === TRUE) {
        $_SESSION['success'] = "Pendaftaran berhasil! Silakan login.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error'] = "Terjadi kesalahan: " . $conn->error;
        header("Location: register.php");
        exit();
    }
}

// Tutup koneksi
$conn->close();
?>
