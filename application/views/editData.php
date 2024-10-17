<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Data Penduduk</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Beranda</a></li>
        <li class="breadcrumb-item">Data Penduduk</li>
        <li class="breadcrumb-item active">Edit Data</li>
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
                <h5 class="card-title">Edit Data</h5>
              </div>
            </div>

            <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100 active" id="kk-tab" data-bs-toggle="tab" data-bs-target="#kk-justified" type="button" role="tab" aria-controls="kk" aria-selected="true">Kepala Keluarga</button>
                            </li>
                            <li class="nav-item flex-fill" role="presentation">
                                <button class="nav-link w-100" id="anggota-tab" data-bs-toggle="tab" data-bs-target="#anggota-justified" type="button" role="tab" aria-controls="anggota" aria-selected="false">Anggota Keluarga</button>
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
                                        <label for="sumberPenerangan" class="form-label">207.a. Sumber penerangan utama</label>
                                        <select id="sumberPenerangan" class="form-select">
                                            <option selected>Pilih sumber...</option>
                                            <option>1. Listrik PLN dengan meteran</option>
                                            <option>2. Listrik PLN tanpa meteran</option>
                                            <option>3. Listrik Non-PLN</option>
                                            <option>4. Bukan listrik</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="dayaListrik" class="form-label">207.b. <b>Jika 207a berkode 1</b>, Daya yang terpasang di rumah ini</label>
                                        <select id="dayaListrik" class="form-select">
                                            <option selected>Pilih daya...</option>
                                            <option>1. 450 watt</option>
                                            <option>2. 900 watt</option>
                                            <option>3. 1.300 watt</option>
                                            <option>4. 2.200 watt</option>
                                            <option>5. > 2.200 watt</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="bahanBakar" class="form-label">208. Bahan bakar/energi utama untuk memasak</label>
                                        <select id="bahanBakar" class="form-select">
                                            <option selected>Pilih bahan bakar...</option>
                                            <option>1. Listrik</option>
                                            <option>2. Gas elpiji 5,5 kg/blue gaz</option>
                                            <option>3. Gas elpiji 12 kg</option>
                                            <option>4. Gas elpiji 3 kg</option>
                                            <option>5. Gas kota/meteran PGN</option>
                                            <option>6. Biogas</option>
                                            <option>7. Minyak tanah</option>
                                            <option>8. Briket</option>
                                            <option>9. Arang</option>
                                            <option>10. Kayu bakar</option>
                                            <option>11. Lainnya</option>
                                            <option>0. Tidak memasak di rumah</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="fasilitasBab" class="form-label">209.a. Kepemilikan dan penggunaan fasilitas tempat buang air besar</label>
                                        <select id="fasilitasBab" class="form-select">
                                            <option selected>Pilih kepemilikan...</option>
                                            <option>1. Ada, digunakan hanya anggota keluarga sendiri</option>
                                            <option>2. Ada, digunakan bersama anggota keluarga dari keluarga tertentu</option>
                                            <option>3. Ada, di MCK komunal/umum</option>
                                            <option>4. Tidak ada fasilitas</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jenisKloset" class="form-label">209.b. <b>Jika 209a berkode 1, 2, atau 3 </b>, Jenis kloset</label>
                                        <select id="jenisKloset" class="form-select">
                                            <option selected>Pilih jenis...</option>
                                            <option>1. Leher angsa</option>
                                            <option>2. Plengsengan dengan tutup</option>
                                            <option>3. Plengsengan tanpa tutup</option>
                                            <option>4. Cemplung/cubluk</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pembuanganAkhir" class="form-label">210. Tempat pembuangan akhir tinja</label>
                                        <select id="pembuanganAkhir" class="form-select">
                                            <option selected>Pilih tempat pembuangan...</option>
                                            <option>1. Tangki septik</option>
                                            <option>2. IPAL</option>
                                            <option>3. Kolam/sawah/sungai/danau/laut</option>
                                            <option>4. Lubang tanah</option>
                                            <option>5. Pantai/tanah lapang/kebun</option>
                                            <option>6. Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="aksesInternet" class="form-label">211. Jenis akses internet utama yang digunakan keluarga selama sebulan terakhir</label>
                                        <select id="aksesInternet" class="form-select">
                                            <option selected>Pilih jenis...</option>
                                            <option>0. Tidak menggunakan internet</option>
                                            <option>1. Internet dan TV digital berlangganan</option>
                                            <option>2. WiFi</option>
                                            <option>3. Internet Handphone</option>
                                        </select>
                                    </div>
                                    <h4 class="card-title">III. KETERANGAN SOSIAL EKONOMI KELUARGA</h4>
                                    <div class="col-md-6">
                                        <label for="noAnggota" class="form-label">301. Nomor urut anggota keluarga</label>
                                        <input type="number" class="form-control" id="noAnggota">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jk" class="form-label">303. Jenis kelamin</label>
                                        <select id="jk" class="form-select">
                                            <option selected>Pilih jenis kelamin...</option>
                                            <option>1. Laki-laki</option>
                                            <option>2. Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tglLahir" class="form-label">304. Tanggal lahir</label>
                                        <input type="date" class="form-control" id="tglLahir">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="perkawinan" class="form-label">305. Status perkawinan</label>
                                        <select id="perkawinan" class="form-select">
                                            <option selected>Pilih status...</option>
                                            <option>1. Belum Kawin</option>
                                            <option>2. Kawin/Nikah</option>
                                            <option>3. Cerai Hidup</option>
                                            <option>4. Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sekolah" class="form-label">306.a. Partisipasi sekolah</label>
                                        <select id="sekolah" class="form-select">
                                            <option selected>Pilih partisipasi...</option>
                                            <option>1. Tidak/belum pernah sekolah</option>
                                            <option>2. Masih sekolah</option>
                                            <option>3. Tidak bersekolah lagi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pendidikanTertinggi" class="form-label">306.b. <b>Jika 306a berkode 2 atau 3 </b>, Jenjang pendidikan tertinggi yang pernah/sedang diduduki</label>
                                        <select id="pendidikanTertinggi" class="form-select">
                                            <option selected>Pilih pendidikan...</option>
                                            <option>1. SD/ Sederajat</option>
                                            <option>2. SMP/ Sederajat</option>
                                            <option>3. SMA/ Sederajat</option>
                                            <option>4. D1/D2/D3</option>
                                            <option>5. D4/S1/Profesi</option>
                                            <option>6. S2/S3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ijazahTertinggi" class="form-label">307. Ijazah/STTB tertinggi yang dimiliki</label>
                                        <select id="ijazahTertinggi" class="form-select">
                                            <option selected>Pilih ijazah/STTB...</option>
                                            <option>1. SD/ Sederajat</option>
                                            <option>2. SMP/ Sederajat</option>
                                            <option>3. SMA/ Sederajat</option>
                                            <option>4. D1/D2/D3</option>
                                            <option>5. D4/S1/Profesi</option>
                                            <option>6. S2/S3</option>
                                            <option>7. Tidak punya Ijazah SD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lapUsaha" class="form-label">308. Lapangan usaha dari pekerjaan utama</label>
                                        <select id="lapUsaha" class="form-select">
                                            <option selected>Pilih lapangan usaha...</option>
                                            <option>1. Pertanian, Kehutanan, & Perikanan</option>
                                            <option>2. Pertambangan & Penggalian</option>
                                            <option>3. Industri Pengolahan</option>
                                            <option>4. Pengadaan Listrik, Gas, Uap/Air Panas, & Udara Dingin</option>
                                            <option>5. Pengelolaan Air, Pengelolaan Air Limbah, Pengelolaan dan Daur Ulang Sampah, & Aktifitas Remediasi</option>
                                            <option>6. Konstruksi</option>
                                            <option>7. Perdagangan Besar dan Eceran, Reprasi dan Perawatan Mobil dan Sepeda Motor</option>
                                            <option>8. Pengangkutan dan Pergudangan</option>
                                            <option>9. Penyediaan Akomodasi dan Makan Minum</option>
                                            <option>10. Informasi dan komunikasi</option>
                                            <option>11. Aktivitas Keuangan dan Asuransi</option>
                                            <option>12. Real Estat</option>
                                            <option>13. Aktivitas Profesional, Ilmiah, & Teknis</option>
                                            <option>14. Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi, Ketenagakerjaan, Agen Perjalanan, & Penunjang Usaha Lainnya</option>
                                            <option>15. Administrasi Pemerintahan, Pertahanan, & Jaminan Sosial Wajib</option>
                                            <option>16. Pendidikan</option>
                                            <option>17. Aktvitas Kesehatan Manusia dan Aktivitas Sosial</option>
                                            <option>18. Kesenian, Hiburan, & Rekreasi</option>
                                            <option>19. Aktivitas Jasa Lainnya</option>
                                            <option>20. Aktivitas Rumah Tangga Sebagai Pemberi Kerja</option>
                                            <option>21. Aktivitas Badan Internasional dan Badan Internasional Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Data sudah benar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Perbarui Data</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="anggota-justified" role="tabpanel" aria-labelledby="anggota-tab">
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
                                    <h4 class="card-title">III. KETERANGAN SOSIAL EKONOMI KELUARGA</h4>
                                    <div class="col-md-6">
                                        <label for="noAnggota" class="form-label">301. Nomor urut anggota keluarga</label>
                                        <input type="number" class="form-control" id="noAnggota">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="namaAnggota" class="form-label">302. Nama anggota keluarga</label>
                                        <input type="text" class="form-control" id="namaAnggota">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="jk" class="form-label">303. Jenis kelamin</label>
                                        <select id="jk" class="form-select">
                                            <option selected>Pilih jenis kelamin...</option>
                                            <option>1. Laki-laki</option>
                                            <option>2. Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="tglLahir" class="form-label">304. Tanggal lahir</label>
                                        <input type="date" class="form-control" id="tglLahir">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="perkawinan" class="form-label">305. Status perkawinan</label>
                                        <select id="perkawinan" class="form-select">
                                            <option selected>Pilih status...</option>
                                            <option>1. Belum Kawin</option>
                                            <option>2. Kawin/Nikah</option>
                                            <option>3. Cerai Hidup</option>
                                            <option>4. Cerai Mati</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="sekolah" class="form-label">306.a. Partisipasi sekolah</label>
                                        <select id="sekolah" class="form-select">
                                            <option selected>Pilih partisipasi...</option>
                                            <option>1. Tidak/belum pernah sekolah</option>
                                            <option>2. Masih sekolah</option>
                                            <option>3. Tidak bersekolah lagi</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="pendidikanTertinggi" class="form-label">306.b. <b>Jika 306a berkode 2 atau 3 </b>, Jenjang pendidikan tertinggi yang pernah/sedang diduduki</label>
                                        <select id="pendidikanTertinggi" class="form-select">
                                            <option selected>Pilih pendidikan...</option>
                                            <option>1. SD/ Sederajat</option>
                                            <option>2. SMP/ Sederajat</option>
                                            <option>3. SMA/ Sederajat</option>
                                            <option>4. D1/D2/D3</option>
                                            <option>5. D4/S1/Profesi</option>
                                            <option>6. S2/S3</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ijazahTertinggi" class="form-label">307. Ijazah/STTB tertinggi yang dimiliki</label>
                                        <select id="ijazahTertinggi" class="form-select">
                                            <option selected>Pilih ijazah/STTB...</option>
                                            <option>1. SD/ Sederajat</option>
                                            <option>2. SMP/ Sederajat</option>
                                            <option>3. SMA/ Sederajat</option>
                                            <option>4. D1/D2/D3</option>
                                            <option>5. D4/S1/Profesi</option>
                                            <option>6. S2/S3</option>
                                            <option>7. Tidak punya Ijazah SD</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="lapUsaha" class="form-label">308. Lapangan usaha dari pekerjaan utama</label>
                                        <select id="lapUsaha" class="form-select">
                                            <option selected>Pilih lapangan usaha...</option>
                                            <option>1. Pertanian, Kehutanan, & Perikanan</option>
                                            <option>2. Pertambangan & Penggalian</option>
                                            <option>3. Industri Pengolahan</option>
                                            <option>4. Pengadaan Listrik, Gas, Uap/Air Panas, & Udara Dingin</option>
                                            <option>5. Pengelolaan Air, Pengelolaan Air Limbah, Pengelolaan dan Daur Ulang Sampah, & Aktifitas Remediasi</option>
                                            <option>6. Konstruksi</option>
                                            <option>7. Perdagangan Besar dan Eceran, Reprasi dan Perawatan Mobil dan Sepeda Motor</option>
                                            <option>8. Pengangkutan dan Pergudangan</option>
                                            <option>9. Penyediaan Akomodasi dan Makan Minum</option>
                                            <option>10. Informasi dan komunikasi</option>
                                            <option>11. Aktivitas Keuangan dan Asuransi</option>
                                            <option>12. Real Estat</option>
                                            <option>13. Aktivitas Profesional, Ilmiah, & Teknis</option>
                                            <option>14. Aktivitas Penyewaan dan Sewa Guna Tanpa Hak Opsi, Ketenagakerjaan, Agen Perjalanan, & Penunjang Usaha Lainnya</option>
                                            <option>15. Administrasi Pemerintahan, Pertahanan, & Jaminan Sosial Wajib</option>
                                            <option>16. Pendidikan</option>
                                            <option>17. Aktvitas Kesehatan Manusia dan Aktivitas Sosial</option>
                                            <option>18. Kesenian, Hiburan, & Rekreasi</option>
                                            <option>19. Aktivitas Jasa Lainnya</option>
                                            <option>20. Aktivitas Rumah Tangga Sebagai Pemberi Kerja</option>
                                            <option>21. Aktivitas Badan Internasional dan Badan Internasional Lainnya</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck">
                                            <label class="form-check-label" for="gridCheck">
                                                Data sudah benar
                                            </label>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </div>
                                </form>
                            </div>
                        </div><!-- End Default Tabs -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->