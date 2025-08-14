<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="<?= base_url() ?>/assets/img/Lambang_Kota_Sungai_Penuh.png" alt="">
                <span class="d-none d-lg-block">Aur Duri</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="ri-account-circle-line"></i>
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin</h6>
                            <span>Administrator</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Sign Out</span>
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
                <a class="nav-link <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? '' : 'collapsed' ?>" href="<?= base_url('home') ?>">
                    <i class="bi bi-grid"></i>
                    <span>Beranda</span>
                </a>
            </li><!-- End Home Nav -->

            <li class="nav-item">
                <a class="nav-link <?= $this->uri->segment(1) == 'tambahData' || $this->uri->segment(1) == 'lihatData' || $this->uri->segment(1) == 'editData' || $this->uri->segment(1) == 'hapusData' ? '' : 'collapsed' ?>" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-person"></i><span>Data Penduduk</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse <?= $this->uri->segment(1) == 'tambahData' || $this->uri->segment(1) == 'lihatData' || $this->uri->segment(1) == 'editData' || $this->uri->segment(1) == 'hapusData' ? 'show' : '' ?>" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="<?= base_url('tambahData') ?>" class="<?= $this->uri->segment(1) == 'tambahData' ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Tambah Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('lihatData') ?>" class="<?= $this->uri->segment(1) == 'lihatData' ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Lihat Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('editData') ?>" class="<?= $this->uri->segment(1) == 'editData' ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Edit Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('hapusData') ?>" class="<?= $this->uri->segment(1) == 'hapusData' ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Hapus Data</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('infografis/tabulasi'); ?>" class="">
                            <i class="bi bi-circle"></i><span>Tabulasi Data</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Data Penduduk Nav -->

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