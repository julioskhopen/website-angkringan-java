<?php

session_start();

// Pastikan sesi "pesanan" ada
if (!isset($_SESSION['pesanan'])) {
    $_SESSION['pesanan'] = []; // Inisialisasi jika belum ada
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['hapus'])) {
        // Hapus item berdasarkan indeks
        $index = (int)$_POST['hapus'];
        if (isset($_SESSION['pesanan'][$index])) {
            unset($_SESSION['pesanan'][$index]);
            $_SESSION['pesanan'] = array_values($_SESSION['pesanan']); // Reindex array
        }
    } else {
        // Retrieve data from the form
        $nama_produk = $_POST['nama_produk'];
        $harga = (int)$_POST['harga'];
        $jumlah = (int)$_POST['jumlah'];
    // Calculate total
    $total = $harga * $jumlah;

    // Store data in the session
    $_SESSION['pesanan'][] = [
        'nama_produk' => $nama_produk,
        'harga' => $harga,
        'jumlah' => $jumlah,
        'total' => $total
    ];
}

// Redirect to avoid form resubmission
header("Location: keranjang.php");
exit();
}
// Retrieve orders from session
$pesanan = $_SESSION['pesanan'] ?? [];

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Java Coffe</title>
  </head>
  <body>

  <!-- Jumbotron -->
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <!-- <h1 class="display-4"><span class="font-weight-bold">PREK FOR U</span></h1>
          <hr>
          <p class="lead font-weight-bold">Silahkan Pesan Menu Sesuai Keinginan Anda <br> 
          Enjoy Your Meal</p> -->
        </div>
      </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg  bg-dark">
        <div class="container">
        <a class="navbar-brand text-white" href="index.html"><strong>Java</strong> Coffe</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="daftar_menu.php">DAFTAR MENU</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="pesanan.php">PESANAN ANDA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mr-4" href="logout.php"></a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>
  <!-- Akhir Navbar -->

    <div class="container mt-5">
      <h3 class="text-center">Pesanan Anda</h3>
      <table class="table table-bordered mt-4">
        <thead>
          <tr>
            <th>Produk</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($pesanan as $index => $item): ?> 
          <tr>
            <td><?= htmlspecialchars($item['nama_produk']); ?></td>
            <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
            <td><?= htmlspecialchars($item['jumlah']);  ?></td>
            <td>Rp <?= number_format($item['total'], 0, ',', '.'); ?></td>
            <td>
              <form method="post" style="display:inline-block;">
                <button type="submit" name="hapus" value="<?= $index; ?>" class="btn btn-danger btn-sm">Hapus</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <div class="text-center">
        <a href="daftar_menu.php" class="btn btn-primary">Tambah Menu</a>
        <a href="pesanan.php" class="btn btn-success">Checkout</a>
      </div>
    </div>
  </body>
</html>
