<?php
session_start();
include "koneksi/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Simba</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
<!--     <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
   <!--  <link rel="stylesheet" type="text/css" href="css/animate.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style (2).css">
    <link rel="shortcut icon" href="img/folder.svg">
  <!-- =======================================================
    Theme Name: Imperial
    Theme URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="preloader"></div>

  <!--==========================
  Hero Section
  ============================-->
  <section id="hero" style="background: url(img/hero-bg.jpg) right center; background-size: cover; width: 100%;
  height: 100vh;">
    <div class="hero-container">
      <div class="wow fadeIn">
        <div class="hero-logo">
            <h1><a href="#hero">Simba</a></h1>
          <!-- <img class="" src="img/logo.png" alt="Imperial"> -->
        </div>

        <h2>Welcome to <span class="rotating">Sistem Informasi Manajemen Berkas Administrasi</span></h2>
        <div class="actions">
          <a href="#about" class="btn-get-started">Get Strated</a>
        </div>
      </div>
    </div>
  </section>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
       <!--  <a href="#hero"><img src="img/logo.png" alt="" title="" /></img></a> -->
        <!-- Uncomment below if you prefer to use a text image -->
        <h1><a href="#hero">Simba</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <!-- <li><a href="#contact">Contact Us</a></li> -->
             <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">Login
                    
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin/login"><i class="fa fa-sign-out pull-right"></i> Admin</a></li> 
                    <li><a href="bagian/login"><i class="fa fa-sign-out pull-right"></i> User</a></li>
                  </ul>
                </li>
           
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">About Us</h3>
          <div class="section-title-divider"></div>
          <p class="section-description">Sekilas Tentang Simba</p>
        </div>
      </div>
    </div>
    <div class="container about-container wow fadeInUp">
      <div class="row">

        <div class="col-lg-6 about-img">
          <img src="img/hero-bg.jpg" alt="">
        </div>

        <div class="col-md-6 about-content">
          <h2 class="about-title">Sistem Informasi Manajemen Berkas Administrasi (SIMBA)</h2>
          <p class="about-text">
           SIMBA merupakan sebuah sistem informasi untuk memanajemen berkas.
          </p>
          <p class="about-text">
           <!-- Berkas yang dikelola dalam sistem informasi ini yaitu PERKA (Peraturan Kepala), PERBAN (Peraturan Badan) dan SE (Surat Edaran). -->
          </p>
          <p class="about-text">
           
          </p>
        </div>
      </div>
    </div>
  </section>

 
  <!--==========================
  Contact Section
  ============================-->
   <!-- <section id="contact" class="wow fadeInUp delay-05s">
      <div class="bg-testicolor">
        <div class="container section-padding">
        <div class="row">
          <div class="testimonial-item">
            <ul class="bxslider">
              <li>
                <blockquote>
                  <img src="img/location.svg">
                  <p>Komplek Graha Citra, Jl. DR. Sudarsono No.3, Kesambi, Kota Cirebon, Jawa Barat  </p>
                </blockquote>
                <small>Alamat</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/laptop.svg" >
                  <p>bnnkota_cirebon@bnn.go.id</p>
                </blockquote>
                <small>Website</small>
              </li>
                 <li>
                <blockquote>
                  <img src="img/mail.svg" >
                  <p>bnn_ciko13@yahoo.com </p>
                </blockquote>
                <small>E-mail</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/phone.svg" >
                  <p>0231-230970</p>
                  <p>081 220 555 002</p>
                </blockquote>
                <small>Call Center</small>
              </li>
              <li>
                <blockquote>
                  <img src="img/megaphone.svg">
                  <p>instagram: info_bnn_kota_cirebon</p>
                  <p>youtube: BNN KOTA CIREBON</p>
                </blockquote>
                <small>Social Media</small>
              </li>
            </ul>
          </div>
        </div>
        </div>
      </div>
    </section> -->

  <!--==========================
  Footer
============================-->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright">
           &copy; Copyright <strong>Imperial Theme</strong>. All Rights Reserved

          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Imperial
            -->
             Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> <br>
             Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com" title="Flaticon">www.flaticon.com</a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/morphext/morphext.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/easing/easing.js"></script>

<!--     <script src="js/jquery.min.js"></script> -->
<!--     <script src="js/jquery.easing.min.js"></script> -->
  <!--   <script src="js/bootstrap.min.js"></script> -->
<!--     <script src="js/wow.js"></script> -->
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom2.js"></script>
    

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>


</body>

</html>
