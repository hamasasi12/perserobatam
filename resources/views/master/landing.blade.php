<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title> Manajemen Layanan
    Teknis Dan IT</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="{{ asset('assets/img/logo1.png') }}" rel="icon" />
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="{{ asset('./assets2/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.snow.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/quill/quill.bubble.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
  <link href="{{ asset('./assets2/vendor/simple-datatables/style.css') }}" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: BizLand
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center text-center">
    <div class="container d-flex align-items-center justify-content-center">
      <h1 class="logo d-flex justify-content-center align-items-center">
        <a class="navbar-brand" href="index.html">
          <img src="{{ asset('assets/img/logo1.png') }}" alt="Persero" width="100%" height="100%" class="d-inline-block align-text-top" />
        </a>
      </h1>
    </div>
  </header>
  
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <h1>Selamat Datang di Aplikasi Manajemen Layanan Teknis Dan IT Persero Batam</h1>
      <div class="d-flex mt-4">
        <a href="./auth-login-basic" class="btn-get-started scrollto me-2" style="background-color: #061097;">Login User</a>
        <a href="./request_user" class="btn-get-started scrollto" style="background-color: #eaee16; color: black;">Request User</a>
      </div>
    </div>
  </section>
  
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <div class="container py-4">
        <div class="copyright">
          &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('./assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>