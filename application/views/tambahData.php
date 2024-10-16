<main id="main" class="main">

    <div class="pagetitle">
        <h1>Tambah Data Penduduk</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
                <li class="breadcrumb-item">Data Penduduk</li>
                <li class="breadcrumb-item active">Tambah Data</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Tambah Data</h5>

                        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="kk-tab" data-bs-toggle="tab" data-bs-target="#kk-justified" type="button" role="tab" aria-controls="kk" aria-selected="true">Kepala Keluarga</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="anggota-tab" data-bs-toggle="tab" data-bs-target="#anggota-justified" type="button" role="tab" aria-controls="anggota" aria-selected="false">Anggota Keluarga</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="excel-tab" data-bs-toggle="tab" data-bs-target="#excel-justified" type="button" role="tab" aria-controls="excel" aria-selected="false">Import dari Excel</button>
                            </li>
                        </ul>
                        <div class="tab-content pt-2" id="myTabjustifiedContent">
                            <div class="tab-pane fade show active" id="kk-justified" role="tabpanel" aria-labelledby="kk-tab">
                                <h4 class="card-title">I. KETERANGAN TEMPAT</h4>
                                <form class="row g-3">
                                    <div class="col-md-6">
                                        <label for="namaRT" class="form-label">105. Nama RT</label>
                                        <select id="namaRT" class="form-select">
                                            <option selected>Pilih Nama RT...</option>
                                            <option>1. RT 001 DUSUN LARIK DIUJUNG</option>
                                            <option>2. RT 002 DUSUN LARIK DIUJUNG</option>
                                            <option>3. RT 003 DUSUN LARIK DUJUNG</option>
                                            <option>4. RT 003 DUSUN LARIK MELINTANG</option>
                                            <option>5. RT 004 DUSUN LARIK MELINTANG</option>
                                            <option>6. RT 005 DUSUN LARIK TENGAH</option>
                                            <option>7. RT 006 DUSUN LARIK DI AIR</option>
                                            <option>8. RT 007 DUSUN LARIK DI AIR</option>
                                            <option>9. RT 007 DUSUN LARIK MELINTANG</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="noBangunan" class="form-label">No. Urut Bangunan Tempat Tinggal</label>
                                        <input type="number" class="form-control" id="noBangunan">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="noKK" class="form-label">No. Urut Kepala Keluarga</label>
                                        <input type="number" class="form-control" id="noKK">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="namaKK" class="form-label">106. Nama Kepala Keluarga</label>
                                        <input type="text" class="form-control" id="namaKK">
                                    </div>
                                    <h4 class="card-title">II. KETERANGAN PERUMAHAN</h4>
                                    <div class="col-md-6">
                                        <label for="statusKepemilikan" class="form-label">201.a. Status kepemilikan bangunan tempat tinggal yang ditempati</label>
                                        <select id="statusKepemilikan" class="form-select">
                                            <option selected>Pilih status...</option>
                                            <option>1. Milik sendiri</option>
                                            <option>2. Kontrak/sewa</option>
                                            <option>3. Bebas sewa</option>
                                            <option>4. Dinas</option>
                                            <option>5. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="namaRT" class="form-label">201.b. <b>Jika 201a berkode 1</b>, apa jenis bukti kepemilikan tanah bangunan tempat tinggal ini ?</label>
                                        <select id="namaRT" class="form-select">
                                            <option selected>Pilih jenis bukti...</option>
                                            <option>1. SHM atas nama anggota keluarga</option>
                                            <option>2. SHM bukan a.n. anggota keluarga</option>
                                            <option>3. Surat bukti lainnya (SHGB, SHRS, Girik, Letter C, dll.)</option>
                                            <option>4. Tidak punya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="luasLantai" class="form-label">202. Luas lantai bangunan tempat tinggal (m<sup>2</sup>)</label>
                                        <input type="number" step="0.01" class="form-control" id="luasLantai">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lantaiTerluas" class="form-label">203. Jenis lantai terluas</label>
                                        <select id="lantaiTerluas" class="form-select">
                                            <option selected>Pilih jenis...</option>
                                            <option>1. Marmer/granit</option>
                                            <option>2. Keramik</option>
                                            <option>3. Parket/Vinil/karpet</option>
                                            <option>4. Ubin/tegal/teraso</option>
                                            <option>5. Kayu/papan</option>
                                            <option>6. Semen/bata merah</option>
                                            <option>7. Bambu</option>
                                            <option>8. Tanah</option>
                                            <option>9. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dindingTerluas" class="form-label">204. Jenis dinding terluas</label>
                                        <select id="dindinggTerluas" class="form-select">
                                            <option selected>Pilih jenis...</option>
                                            <option>1. Tembok</option>
                                            <option>2. Plesteran/anyaman bambu/kawat</option>
                                            <option>3. Kayu/Papan/Gypsum/GRC/Calciboard</option>
                                            <option>4. Anyaman bambu</option>
                                            <option>5. Batang Kayu</option>
                                            <option>6. Bambu</option>
                                            <option>7. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="atapTerluas" class="form-label">205. Jenis atap terluas</label>
                                        <select id="atapTerluas" class="form-select">
                                            <option selected>Pilih jenis...</option>
                                            <option>1. Beton</option>
                                            <option>2. Genteng</option>
                                            <option>3. Seng</option>
                                            <option>4. Asbes</option>
                                            <option>5. Bambu</option>
                                            <option>6. Kayu/sirap</option>
                                            <option>7. Jerami/ijuk/daun-daunan/rumbia</option>
                                            <option>8. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="airMinum" class="form-label">206. Sumber air minum utama</label>
                                        <select id="airMinum" class="form-select">
                                            <option selected>Pilih sumber...</option>
                                            <option>1. Air kemasan bermerek</option>
                                            <option>2. Air isi ulang</option>
                                            <option>3. Leding</option>
                                            <option>4. Sumur</option>
                                            <option>5. Mata Air</option>
                                            <option>6. Air permukaan (sungai/danau/waduk/kolam/irigasi)</option>
                                            <option>7. Air hujan</option>
                                            <option>8. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputEmail5" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="inputEmail5">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword5" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="inputPassword5">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress5" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress2" class="form-label">Address 2</label>
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputCity" class="form-label">City</label>
                                        <input type="text" class="form-control" id="inputCity">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputState" class="form-label">State</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="inputZip" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="inputZip">
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Check me out
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="anggota-justified" role="tabpanel" aria-labelledby="anggota-tab">
                                Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                            </div>
                            <div class="tab-pane fade" id="excel-justified" role="tabpanel" aria-labelledby="excel-tab">
                                Saepe animi et soluta ad odit soluta sunt. Nihil quos omnis animi debitis cumque. Accusantium quibusdam perspiciatis qui qui omnis magnam. Officiis accusamus impedit molestias nostrum veniam. Qui amet ipsum iure. Dignissimos fuga tempore dolor.
                            </div>
                        </div><!-- End Default Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->