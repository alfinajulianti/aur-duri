<main id="main" class="main">

  <div class="pagetitle">
    <h1>Lihat Data Penduduk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
        <li class="breadcrumb-item">Data Penduduk</li>
        <li class="breadcrumb-item active">Lihat Data</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col">
                <h5 class="card-title">Data By Name By Address</h5>
              </div>
              <div class="col-2 card-title">
                <nav class="header-nav ms-auto">
                  <ul class="d-flex align-items-center">
                    <li class="nav-item dropdown pe-3">
                      <button type="button" id="toggleButton" onclick="toggleSelect()" class="btn btn-primary" data-bs-toggle="dropdown"><i class="bi bi-person-plus"></i> Tambah Data</button>

                      <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li>
                          <a class="dropdown-item d-flex align-items-center" href="">
                            <i class="bx bx-list-plus"></i>
                            Tambah Manual
                          </a>
                        </li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>

                        <li>
                          <a class="dropdown-item d-flex align-items-center" href="">
                            <i class="bi bi-file-earmark-spreadsheet"></i>
                            Import dari Excel
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>

            <!-- Table with stripped rows -->
            <div class="table-responsive">
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama RT</th>
                    <th>No. Urut Bangunan Tempat Tinggal</th>
                    <th>No. Urut Kepala Keluarga</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Nama Anggota Keluarga</th>
                    <th>Status Kepala Keluarga</th>
                    <th>Jenis Kelamin</th>
                    <th>Umur</th>
                    <th>Status Perkawinan</th>
                    <th>Partisipasi Sekolah</th>
                    <th>Jenjang Pendidikan Tertinggi yang Pernah/Sedang Diduduki</th>
                    <th>Ijazah/STTB Tertinggi yang Dimiliki</th>
                    <th>Lapangan Usaha Utama</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                    <td>Unity Pugh</td>
                    <td>9958</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                    <td>Curicó</td>
                    <td>2005/02/11</td>
                    <td>37%</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->