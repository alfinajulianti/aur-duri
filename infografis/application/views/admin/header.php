
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Aur Duri | Infografis Desa Cantik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>/assets/img/Lambang_Kota_Sungai_Penuh.png" rel="icon">
  <link href="<?= base_url('assets/NiceAdmin') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?php echo base_url('infografis'); ?>/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <link href="<?php echo base_url('infografis'); ?>/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="" class="logo d-flex align-items-center">
        <img src="<?= base_url() ?>/assets/img/Lambang_Kota_Sungai_Penuh.png" alt="">
        <span class="d-none d-lg-block">Aur Duri</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">BPS Supe</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>BPS Sungai Penuh</h6>
              <span>Pembina Desa Cantik</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-person"></i>
                <span>Profil Saya</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="">
                <i class="bi bi-question-circle"></i>
                <span>Bantuan</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Keluar</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url('home') ?>">
          <i class="bi bi-grid"></i>
          <span>Beranda</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(1)!='tabulasi') { echo "collapsed";}?>" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>Data Penduduk</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse <?php if ($this->uri->segment(1)=='tabulasi') { echo "show";}?>" data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('tambahData') ?>">
              <i class="bi bi-circle"></i><span>Tambah Data</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('lihatData') ?>">
              <i class="bi bi-circle"></i><span>Lihat Data</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('editData') ?>">
              <i class="bi bi-circle"></i><span>Edit Data</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('hapusData') ?>">
              <i class="bi bi-circle"></i><span>Hapus Data</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('infografis/tabulasi');?>" class="<?php if ($this->uri->segment(3)==null) {
              echo "active";
            }?>">
              <i class="bi bi-circle"></i><span>Tabulasi Data</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link <?php if ($this->uri->segment(1)!='infografis') { echo "collapsed";}?>" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Infografis</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse <?php if ($this->uri->segment(1)=='infografis') { echo "show";}?>" data-bs-parent="#sidebar-nav">
          <?php
            foreach ($rt->result() as $rt ) :
          ;?>
          <li>
            <a href="<?php echo base_url('infografis/infografis/view/'.$rt->id_rt);?>" class="<?php if ($this->uri->segment(3)==$rt->id_rt) {
              echo "active";
            }?>">
              <i class="bi bi-circle"></i><span><?= $rt->nama_rt;?></span>
            </a>
          </li>
          <?php endforeach;?>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-person"></i>
          <span>Profil</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-question-circle"></i>
          <span>Pertanyaan</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-envelope"></i>
          <span>Pengembang</span>
        </a>
      </li><!-- End Contact Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->