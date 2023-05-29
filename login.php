

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">

        <title>Beasiswa Kaltara Unggul</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/kaltara.png" rel="icon">
        <link href="assets/img/kaltara.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr - v4.10.0
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    </head>
<?php
session_start();
include "koneksi.php"
?>
<body class="bg-gradient-primary">
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-md-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-md-12">
              <div class="p-5">
                <div class="text-center">
                  <img src="assets/img/kaltara1.png" alt="logo kaltara" class="logo-login">

                  <h1 class="h4 text-gray-900">Aplikasi Pendaftaran </h1>
                  <h1 class="h4 text-gray-900 mb-4"><b>Beasiswa Kaltara Unggul</b></h1>

                </div>
                <form action="" method="POST">
                    <div class="form-group text-center " >
                      <strong>MASUK</strong>
                      <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username">
                    </div>
                    <br>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <br>
                    <div class="text-center">
                      <button type="submit" value="login" name="proseslog" class="btn btn-primary btn-user btn-block">
                        Login
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

</div>
<?php
if (isset($_POST['proseslog'])){
  $sql = mysqli_query($koneksi, "select * from users where username = '$_POST[username]' and password = '$_POST[password]' " );

  $cek = mysqli_num_rows($sql);
  if($cek > 0){
    $_SESSION['username'] = $_POST['username'];

    echo "<meta http-equiv=refresh content=0;URL='user-page.php'>";
  }else{
    echo "<p aligh=center><b> Username dan Password Salah ! </b></p>";
  }
}
?>
</body>
<br><br><br><br><br><br><br>
<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Disdikbud Prov. Kaltara</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="">UPTD-TIKP</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="index.php" class="scrollto">Home</a>
            <a href="#about" class="scrollto">Tentang</a>
            <a href="login.php">Login</a>
            <a href="registrasi.php">Registrasi</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
</html>