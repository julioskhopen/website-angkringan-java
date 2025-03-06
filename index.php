<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: auth/login.php');
    exit();
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <title>Java Coffe</title>
    <style>
      .navbar {
        margin-top: 20px;
      }
    </style>
  </head>
  <body>
  
  <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top: 50px;">
        <div class="container">
          <a class="navbar-brand" href="#"><strong>Java</strong> Coffe</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">HOME</a></li>
              <li class="nav-item"><a class="nav-link" href="daftar_menu.php">DAFTAR MENU</a></li>
              <li class="nav-item"><a class="nav-link" href="pesanan.php">PESANAN ANDA</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php"></a></li>
            </ul>
          </div>
        </div>
      </nav>
  <!-- Akhir Navbar -->

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

  <div class="container mt-5 pt-5 text-center">
    <h3 class="font-weight-bold">Java Coffe</h3>
    <h5>Jl. Almamater NO. 1 Kampus USU Medan- Sumatera Utara - POLMED Pintu IV Gedung N</h5>
    <h5>Buka Jam <strong>13:00 - 17:00</strong></h5>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  </body>
</html>
