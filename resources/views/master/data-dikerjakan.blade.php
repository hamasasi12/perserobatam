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
    <link href="{{ asse('./assets2/img/apple-touch-icon.png') }}" rel="apple-touch-icon" />

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
            <h1>Data Dikerjakan/h1>
        </div>
        <!-- End Page Title -->

        <!-- main -->
        <section class="section">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="card-title">Data Dikerjakan</h5>
                    <a href="form-inventaris.html" type="button" class="btn btn-rounded btn-success mb-3"><i class="bi bi-plus-square" style="margin-right: 5px"></i>Tambah Data</a>
    
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                      <thead>
                        <tr>
                          <th>Pengaduan</th>
                          <th>Deskripsi</th>
                          <th>Teknisi</th>
                          <th>Status</th>
                          <th>User</th>
                          <th>File</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Unity Pugh</td>
                          <td>9958</td>
                          <td>Curicó</td>
                          <td>2005/02/11</td>
                          <td>37%</td>
                          <td>Rio de Janeiro, Brazil</td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Theodore Duran</td>
                          <td>8971</td>
                          <td>Dhanbad</td>
                          <td>1999/04/07</td>
                          <td>97%</td>
                          <td>New York City, USA</td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Kylie Bishop</td>
                          <td>3147</td>
                          <td>Norman</td>
                          <td>2005/09/08</td>
                          <td>63%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Willow Gilliam</td>
                          <td>3497</td>
                          <td>Amqui</td>
                          <td>2009/29/11</td>
                          <td>30%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Blossom Dickerson</td>
                          <td>5018</td>
                          <td>Kempten</td>
                          <td>2006/11/09</td>
                          <td>17%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Elliott Snyder</td>
                          <td>3925</td>
                          <td>Enines</td>
                          <td>2006/03/08</td>
                          <td>57%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Castor Pugh</td>
                          <td>9488</td>
                          <td>Neath</td>
                          <td>2014/23/12</td>
                          <td>93%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Pearl Carlson</td>
                          <td>6231</td>
                          <td>Cobourg</td>
                          <td>2014/31/08</td>
                          <td>100%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Deirdre Bridges</td>
                          <td>1579</td>
                          <td>Eberswalde-Finow</td>
                          <td>2014/26/08</td>
                          <td>44%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
                        </tr>
                        <tr>
                          <td>Daniel Baldwin</td>
                          <td>6095</td>
                          <td>Moircy</td>
                          <td>2000/11/01</td>
                          <td>33%</td>
                          <td></td>
                          <td>
                            <i class="bi bi-info-square-fill"></i>
                            <i class="bi bi-pencil-square"></i>
                            <i class="bi bi-trash"></i>
                          </td>
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
    <script src="{{ asset('./assets2/vendor/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/quill/quill.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('./assets2/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('./assets2/js/main.js') }}"></script>
</body>

</html>