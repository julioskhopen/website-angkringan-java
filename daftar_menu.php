<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
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
        <a class="navbar-brand text-white" href="index.php"><strong>Java</strong> Coffe</a>
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

  <!-- Menu -->
      <div class="container ">
      <h3 class="text-center font-weight-bold" style="margin-top: 40px;">DAFTAR MENU</h3>
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/background/arabika.jpg" class="card-img-top" height="163x" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Arabika</h5>
               <label class="card-text harga">Rp. 10.000</label><br>
               <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Kopi Arabika">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/americano.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Americano</h5>
               <label class="card-text">Rp. 10.000</label><br>
               <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
               <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Kopi Americano">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/capucino.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Cappucino</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Cappucino">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/cafe latte.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Late</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Kopi Late">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>
         </div>  


         

         <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/Donat.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Donat</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Donat">
                <input type="hidden" name="harga" value="5000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/roti gandum.jpg" class="card-img-top"  height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Roti gandum</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Roti gandum">
                <input type="hidden" name="harga" value="5000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/croise.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">croissant</h5>
                <label class="card-text">Rp. 5.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Croises">
                <input type="hidden" name="harga" value="5000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/mocca latte.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Mocca Latte</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Mocca Latte">
                <input type="hidden" name="harga" value="13000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>
          
        <div class="row mt-3">
          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/Expresso.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Expresso</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Expresso">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

         <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/long back.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Long Black</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Long Black">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>
          
        <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/icecoffe.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Ice Coffe</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Ice Coffe">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>

          <div class="col-md-3">
            <div class="card border-dark">
              <img src="images/Background/kopisusu.jpg" class="card-img-top" height="163px" alt="...">
              <div class="card-body">
                <h5 class="card-title font-weight-bold">Kopi Susu Tradisional</h5>
                <label class="card-text">Rp. 10.000</label><br>
                <!-- <a href="pesanan.php" class="btn btn-success btn-sm w-100">Beli</a> -->
                <form method="POST" action="keranjang.php">
                <input type="hidden" name="nama_produk" value="Kopi Susu Tradisional">
                <input type="hidden" name="harga" value="10000">
                <div class="form-group">
                    <label for="jumlah">Jumlah:</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" value="1" min="1">
                </div>
                <button type="submit" class="btn btn-success btn-sm w-100">Beli</button>
                </form>
              </div>
            </div>
          </div>
<br></di>
<br></di>

          
  <!-- Akhir Menu -->

  <!-- Awal Footer -->
      <hr class="footer">
      <div class="container">
        <div class="row footer-body">
          <div class="col-md-6">
          <div class="copyright">
           
          </div>
          </div>

          <div class="col-md-6 d-flex justify-content-end">
          <div class="icon-contact">
          <label class="font-weight-bold">Follow Us </label>
          <a href="#"><img src="images/icon/fb.png" class="mr-3 ml-4" data-toggle="tooltip" title="Facebook"></a>
          <a href="#"><img src="images/icon/ig.png" class="mr-3" data-toggle="tooltip" title="Instagram"></a>
          <a href="#"><img src="images/icon/twitter.png" class="mr-3" data-toggle="tooltip" title="Twitter"></a>
          <a href="https://wa.me/6287851424593/" target="_blank"><img src="images/icon/whatsapp.jpg" class="mr-3" data-toggle="tooltip" title="Whatsapp"></a>
          <a class="font-weight-bold"></> JAVA COFFE & BREAD</a>
        </div>
          </div>
        </div>
      </div>
  <!-- Akhir Footer -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>
  </body>
</html>