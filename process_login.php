<?php
session_start();
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Persiapkan query dengan prepared statement
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);

    if ($stmt) {
        // Bind parameter dan eksekusi query
        mysqli_stmt_bind_param($stmt, "s", $username); // 's' berarti parameter string
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Simpan data user ke sesi
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Redirect ke halaman utama
                header('Location: index.php');
                exit();
            } else {
                // Password salah
                $_SESSION['error'] = 'Password salah!';
                header('Location: index.php');
                exit();
            }
        } else {
            // Username tidak ditemukan
            $_SESSION['error'] = 'Username tidak ditemukan!';
            header('Location: login.php');
            exit();
        }

        // Tutup prepared statement
        mysqli_stmt_close($stmt);
    } else {
        // Error saat prepare statement
        $_SESSION['error'] = 'Terjadi kesalahan saat memproses login!';
        header('Location: login.php');
        exit();
    }
} else {
    // Jika bukan POST request
    header('Location: login.php');
    exit();
}
?>
