<?php
session_start();

// Retrieve orders from session
$pesanan = $_SESSION['pesanan'] ?? [];

// Check if there are any orders
if (empty($pesanan)) {
    echo "<script>alert('Pesanan kosong!'); window.location.href='keranjang.php';</script>";
    exit;
}

// Calculate the grand total
$grand_total = 0;
foreach ($pesanan as $item) {
    $grand_total += $item['total'];
}

// Process checkout logic (if any additional logic is needed, e.g., saving to database)
// Here we just display the data for now
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
        <a class="navbar-brand text-white" href="index.html"><strong>Java</strong> Coffe </a>
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
              <a class="nav-link mr-4" href="logout.php">LOGOUT</a>
            </li>
          </ul>
        </div>
       </div> 
      </nav>

    <div class="container mt-5">
      <h3 class="text-center">Checkout</h3>
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
          <?php foreach ($pesanan as $item): ?>
          <tr>
            <td><?= htmlspecialchars($item['nama_produk']); ?></td>
            <td>Rp <?= number_format($item['harga'], 0, ',', '.'); ?></td>
            <td><?= htmlspecialchars($item['jumlah']); ?></td>
            <td>Rp <?= number_format($item['total'], 0, ',', '.'); ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="3" class="text-right">Grand Total</th>
            <th>Rp <?= number_format($grand_total, 0, ',', '.'); ?></th>
          </tr>
        </tfoot>
      </table>
      <div class="text-center">
        <a href="keranjang.php" class="btn btn-warning">Kembali ke Keranjang</a>
        <a href="logout.php" class="btn btn-success">Proses Checkout</a>
      </div>
    </div>
  </body>
</html>
