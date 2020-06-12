<?php 
  include 'koneksi.php';
  $query1 = mysqli_query($koneksi,"SELECT * FROM sparepart ORDER BY id DESC");
  $query2 = mysqli_query($koneksi,"SELECT * FROM perakitan ORDER BY id DESC");
  $query3 = mysqli_query($koneksi,"SELECT * FROM gudang_p ORDER BY id DESC");
  $query4 = mysqli_query($koneksi,"SELECT * FROM marketing ORDER BY id DESC");
  $query5 = mysqli_query($koneksi,"SELECT * FROM bagian_k ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PT. Yamahmud Indonesia</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
      <?php 
        session_start();
        if($_SESSION['status']!="login"){
          header("location:login.php?pesan=belum_login");
        }
      ?>
 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">PT. Yamahmud Indonesia</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Data</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Info Perusahaan</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Saran & Kritik</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded" href="logout.php">Log out<!-- <?php echo $_SESSION['username']; ?> --></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img width="150px" height="150px" class="img-fluid mb-5 d-block mx-auto" src="img/profile1.png" alt="">
        <h1 class="text-uppercase mb-0">PT. Yamahmud Indonesia</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Yamahmud Motor Manufacturing</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Data</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cabin1.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/game1.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/cake1.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/circus1.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/safe1.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fas fa-search-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine1.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Info Perusahaan</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead" style="text-align: justify;">PT. Yamahmud Indonesia Motor Manufacturing adalah sebuah perusahaan industri automotive yang memproduksi sepeda motor. Perusahaan ini didirikan pada 26 April 1998 di Indonesia.</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead" style="text-align: justify;">Pabrik sepeda motor Yamahmud mulai beroperasi di kancah internasional sekitar tahun 2000, sebagai suatu usaha produksi motor terbaik, semua komponen didatangkan dari perusahaan spare parts automotive yang memiliki nilai kualitas tertinggi.</p>
          </div>
        </div>
        <!-- <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light" href="#">
            <i class="fas fa-download mr-2"></i>
            Download Now!
          </a>
        </div> -->
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Saran dan Kritikan</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" style="height: 100px" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Lokasi</h4>
            <p class="lead mb-0">Bandung, Jawa Barat-Indonesia
              <br>Jl. Ir. Soekoarno 33</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Media Sosial</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">PT. Yamahmud Indonesia</h4>
            <p class="lead mb-0">Lightning Speed, bukan kaleng-kaleng</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; PT. Yamahmud Indonesia</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Spare parts</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/cabin1.png" alt="">
              <p class="mb-5">Input jumlah, harga, dan merek spare parts</p>

              <form style="width: 250px" name="" id="" method="post" action="spareparts.php" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Merek</label>
                    <input class="form-control" id="merek" type="text" placeholder="Merek Spare Part" required="required" name="merek" data-validation-required-message="Silakan masukan nama merek.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Harga</label>
                    <input class="form-control" id="harga" type="number" min="0" placeholder="Harga Spare Part" required="required" name="harga" data-validation-required-message="Silakan masukan harga.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jumlah</label>
                    <input class="form-control" id="phone" type="number" min="0" placeholder="Jumlah Spare Part" required="required" name="jumlahmerek" data-validation-required-message="Silakan masukan jumlah.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
              <div id="success"></div>
              <br>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Input</button>
              </div>
            </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Perakitan</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/game1.png" alt="">
              <p class="mb-5">view jumlah spare parts, input jumlah produk jadi</p>
        
              <form action="" method="post">
              <table border="2" cellpadding="3" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Merek Spare Part</th>
                    <th>Harga Spare Part</th>
                    <th>Jumlah Spare Part</th>
                </tr>
                <?php if(mysqli_num_rows($query1)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query1)){
                  ?>
                    
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["merek"];?></td>
                    <td><?php echo $data["harga"];?></td>
                    <td><?php echo $data["jumlah"];?></td>
                </tr>
                  <?php $no++; } ?>
                  <?php } ?>
              </table>
              </form>

              <form style="width: 250px" name="" id="" method="post" action="perakitan.php" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jumlah</label>
                    <input class="form-control" id="phone" type="number" min="0" placeholder="Jumlah Produk Jadi" required="required" name="jumlahperakitan" data-validation-required-message="Silakan masukan jumlah.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div id="success"></div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Input</button>
                </div>
              </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Gudang Penyimpanan</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/cake1.png" alt="">
              <p class="mb-5">View jumlah total produk jadi, input jumlah produk jadi yang keluar dari gudang</p>
              
              <form action="" method="post">
              <table border="2" cellpadding="3" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Jumlah Produk Jadi</th>
                </tr>
                <?php if(mysqli_num_rows($query2)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query2)){
                  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["jumlah"];?></td>
                </tr>
                  <?php $no++; } ?>
                  <?php } ?>
              </table>
              </form>

              <form style="width: 250px" name="" id="" method="post" action="gudang_p.php" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jumlah</label>
                    <input class="form-control" id="phone" type="number" min="0" placeholder="Jumlah Produk Keluar" required="required" name="jumlahgp"data-validation-required-message="Silakan masukan jumlah.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div id="success"></div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Input</button>
                </div>
              </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Marketing</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/circus1.png" alt="">
              <p class="mb-5">View jumlah produk jadi yang keluar gudang, Input jumlah penjualan produk jadi. Harga satuan produk 12000</p>
              
              <form action="" method="post">
              <table border="2" cellpadding="3" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Jumlah Produk Keluar Gudang</th>
                </tr>
                <?php if(mysqli_num_rows($query3)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query3)){
                  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["jumlah"];?></td>
                </tr>
                  <?php $no++; } ?>
                  <?php } ?>
              </table>
              </form>

              <form style="width: 250px" name="" method="post" action="marketing.php" id="" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Jumlah</label>
                    <input class="form-control" id="phone" type="number" min="0" placeholder="Jumlah Penjualan" required="required" name="jumlahmarketing" data-validation-required-message="Silakan masukan jumlah.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div id="success"></div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Input</button>
                </div>
              </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Bagian Keuangan</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/safe1.png" alt="">
              <p class="mb-5">view produk terjual, input hitung keuntungan : total hasil penjualan - total harga sparepart</p>

              <form action="" method="post">
              <table border="2" cellpadding="3" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Jumlah Produk Terjual</th>
                    <th>Perhitungan</th>
                </tr>
                <?php if(mysqli_num_rows($query4)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query4)){
                  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["jumlah"];?></td>
                    <td><?php echo "x 12000";?></td>
                </tr>
                  <?php $no++; } ?>
                  <?php } ?>
              </table>
              </form>
              <form style="width: 250px" name="" method="post" action="bagian_k.php" id="" novalidate="novalidate">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Total Keuntungan</label>
                    <input class="form-control" id="phone" type="number" min="0" placeholder="Keuntungan" required="required" name="keuntungan" data-validation-required-message="Silakan masukan jumlah.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div id="success"></div>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Input</button>
                </div>
              </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Manajer</h2>
              <hr class="star-dark mb-5">
              <img width="300px" width="300px" class="img-fluid mb-5" src="img/portfolio/submarine1.png" alt="">
              <p class="mb-5">View keuntungan</p>
              
              <form action="" method="post">
              <table border="2" cellpadding="3" cellspacing="3">
                <tr>
                    <th>No</th>
                    <th>Keuntungan</th>
                </tr>
                <?php if(mysqli_num_rows($query5)>0){
                    $no = 1;
                    while($data = mysqli_fetch_array($query5)){
                  ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["keuntungan"];?></td>
                </tr>
                  <?php $no++; } ?>
                  <?php } ?>
              </table>
              </form>

              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
