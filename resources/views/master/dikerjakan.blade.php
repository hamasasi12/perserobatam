<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Manajemen Layanan Teknis dan IT Persero Batam</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="{{ asset('./assets/img/logo1.png') }}" rel="icon" />
    <link href="{{ asset('./assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
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
    <link href="{{ asset('./assets2/css/style.css') }}" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="./assets/img/logo1.png" alt="" />
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div>
        <!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword" />
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">
                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle" href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li>
                <!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">
                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="./assets2/img/profile-img.jpg" alt="Profile" class="rounded-circle" />
                        <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Kevin Anderson</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Account Settings</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Need Help?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider" />
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
                            </a>
                        </li>
                    </ul>
                    <!-- End Profile Dropdown Items -->
                </li>
                <!-- End Profile Nav -->
            </ul>
        </nav>
        <!-- End Icons Navigation -->
    </header>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>Manajemen Layanan Teknis & IT</span><i
            class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <!-- ======= Solve ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-wrench"></i><span>Solve</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
              <li>
                <a href="/permintaan_masuk">
                  <i class="bi bi-circle"></i><span>Permintaan Masuk</span>
                </a>
              </li>
              <li>
                <a href="/dikerjakan">
                  <i class="bi bi-circle"></i><span>Dikerjakan</span>
                </a>
              </li>
              <li>
                <a href="/history_pekerjaan">
                  <i class="bi bi-circle"></i><span>History Pekerjaan</span>
                </a>
              </li>
              <li>
                <a href="/pekerjaan_selesai">
                  <i class="bi bi-circle"></i><span>Pekerjaan Selesai</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Solve ======= -->
          <!-- ======= Inventory ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-box-seam"></i><span>Inventory</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
              <li>
                <a href="/hardware">
                  <i class="bi bi-circle"></i><span>Tambah Data Aset (Hardware)</span>
                </a>
              </li>
              <li>
                <a href="/software">
                  <i class="bi bi-circle"></i><span>Tambah Data Aset (Software)</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Inventory ======= -->
          <!-- ======= Maintenace ======= -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#solve-nav" data-bs-toggle="collapse" href="#">
              <i class="bi bi-tools"></i><span>Maintenance</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="solve-nav" class="nav-content collapse" data-bs-parent="#tables-nav">
              <li>
                <a href="/permintaan_perbaikan">
                  <i class="bi bi-circle"></i><span>Permintaan Perbaikan</span>
                </a>
              </li>
              <li>
                <a href="/tindaklanjut_perbaikan">
                  <i class="bi bi-circle"></i><span>Tindaklanjut Perbaikan</span>
                </a>
              </li>
            </ul>
          </li>
          <!-- ======= End Maintenace ======= -->

        </ul>
      </li>

      <!-- ======= Tambah User ======= -->
      <li class="nav-item">
        <a class="nav-link" href="tambah_user.html">
          <i class="bi bi-person-plus"></i>
          <span>Tambah User</span>
        </a>
      </li>
      <!-- ======= End Tambah User ======= -->




      <!-- End Dashboard Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Dikerjakan</h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Pekerjaan Dalam Proses Dikerjakan Unit IT</h5>
                            <a href="form-inventaris.html" type="button" class="btn btn-rounded btn-danger mb-3">Print</a>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>No Pengaduan</th>
                                        <th>Deskripsi</th>
                                        <th>Teknisi</th>
                                        <th>Status</th>
                                        <th>User</th>
                                        <th>Action</th>
                                        <th>File</th>
                                        <th>Dari Divisi</th>
                                        <th>Ke Divisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>29022024<a href="#" type="button" class="btn btn-rounded btn-danger mb-3"></i>Belum DItangani</a>
                                          </td></td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Detail Pengaduan</a></td>
                                        <td>Fenn</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-danger mb-3">Dikerjakan</a>
                                            <a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Update</a>
                                          </td>
                                        <td>Brahman</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-danger mb-3"><i
                                            class="bi bi-trash" style="margin-right: 5px"></i>Batal</a></td>
                                        <td class="text-primary">File</td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Keuangan</a></td>
                                        <td><a href="#" type="button" class="btn btn-rounded btn-primary mb-3">Pemasaran</a></td>      
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="./assets2/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="./assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets2/vendor/chart.js/chart.umd.js"></script>
    <script src="./assets2/vendor/echarts/echarts.min.js"></script>
    <script src="./assets2/vendor/quill/quill.min.js"></script>
    <script src="./assets2/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="./assets2/vendor/tinymce/tinymce.min.js"></script>
    <script src="./assets2/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="./assets2/js/main.js"></script>
</body>

</html>