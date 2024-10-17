<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Infografis extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Model_admin'));
        $this->load->library(array('Frame'));
	}

	public function index()
    {
        // $id_rt = $this->uri->segment(3);
        // // pp = pendapatan per pendidikan
        // $data['pp1_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
        // $data['pp1_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
        // $data['pp1_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
        // $data['pp1_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
        // $data['pp1_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
        // $data['pp2_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
        // $data['pp2_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
        // $data['pp2_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
        // $data['pp2_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
        // $data['pp2_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
        // $data['pp3_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
        // $data['pp3_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
        // $data['pp3_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
        // $data['pp3_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
        // $data['pp3_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
        // $data['penduduk_bekerja'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan != 0 AND id_rt = '.$id_rt);
        // $data['penduduk_bekerja1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND id_rt = '.$id_rt);
        // $data['penduduk_bekerja2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND id_rt = '.$id_rt);
        // $data['penduduk_bekerja3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND id_rt = '.$id_rt);

        // // piramida penduduk
        // $data['tanggal_lahir_p'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Perempuan" AND id_rt = '.$id_rt);
        // $data['tanggal_lahir_l'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Laki-laki" AND id_rt = '.$id_rt);

        // $data['rt'] = $this->Model_admin->ambil_kolom('*','tabel_rt','id_rt IS NOT NULL');

        // $this->Frame->frame1('infografis/beranda',$data);
        $id_rt = $this->uri->segment(3);
        if ($id_rt == 0) {
            $data['pp1_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1');
            $data['pp1_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 2');
            $data['pp1_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 3');
            $data['pp1_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 4');
            $data['pp1_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 5');
            $data['pp2_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 1');
            $data['pp2_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 2');
            $data['pp2_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 3');
            $data['pp2_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 4');
            $data['pp2_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 5');
            $data['pp3_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 1');
            $data['pp3_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 2');
            $data['pp3_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 3');
            $data['pp3_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 4');
            $data['pp3_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 5');
            $data['penduduk_bekerja'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan != 0');
            $data['penduduk_bekerja1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1');
            $data['penduduk_bekerja2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2');
            $data['penduduk_bekerja3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3');

            // piramida penduduk
            $data['tanggal_lahir_p'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Perempuan"');
            $data['tanggal_lahir_l'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Laki-laki"');
            $data['nama_rt'] = '';
        } elseif ($id_rt > 0) {
            $data['pp1_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp1_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp1_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp1_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp1_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['pp2_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp2_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp2_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp2_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp2_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['pp3_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp3_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp3_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp3_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp3_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan != 0 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND id_rt = '.$id_rt);

            // piramida penduduk
            $data['tanggal_lahir_p'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Perempuan" AND id_rt = '.$id_rt);
            $data['tanggal_lahir_l'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Laki-laki" AND id_rt = '.$id_rt);
            $data['nama_rt'] = $this->Model_admin->ambil_nama_rt('id_rt ='.$id_rt);
        }
        // pp = pendapatan per pendidikan
            

        $data['rt'] = $this->Model_admin->ambil_kolom('*','tabel_rt','id_rt IS NOT NULL');

        $this->load->view('infografis/beranda',$data);
        $this->load->view('admin/main',$data);
    }

    public function view()
    {
        $id_rt = $this->uri->segment(3);
        if ($id_rt == 0) {
            $data['pp1_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1');
            $data['pp1_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 2');
            $data['pp1_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 3');
            $data['pp1_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 4');
            $data['pp1_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 5');
            $data['pp2_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 1');
            $data['pp2_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 2');
            $data['pp2_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 3');
            $data['pp2_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 4');
            $data['pp2_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 5');
            $data['pp3_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 1');
            $data['pp3_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 2');
            $data['pp3_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 3');
            $data['pp3_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 4');
            $data['pp3_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 5');
            $data['penduduk_bekerja'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan != 0');
            $data['penduduk_bekerja1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1');
            $data['penduduk_bekerja2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2');
            $data['penduduk_bekerja3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3');

            // piramida penduduk
            $data['tanggal_lahir_p'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Perempuan"');
            $data['tanggal_lahir_l'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Laki-laki"');
            $data['nama_rt'] = '';
        } elseif ($id_rt > 0) {
            $data['pp1_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp1_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp1_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp1_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp1_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['pp2_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp2_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp2_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp2_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp2_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['pp3_1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 1 AND id_rt = '.$id_rt);
            $data['pp3_2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 2 AND id_rt = '.$id_rt);
            $data['pp3_3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 3 AND id_rt = '.$id_rt);
            $data['pp3_4'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 4 AND id_rt = '.$id_rt);
            $data['pp3_5'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND kelompok_pendapatan = 5 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan != 0 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja1'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 1 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja2'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 2 AND id_rt = '.$id_rt);
            $data['penduduk_bekerja3'] = $this->Model_admin->jumlah_data_where('id','tabel_penduduk','pendidikan = 3 AND id_rt = '.$id_rt);

            // piramida penduduk
            $data['tanggal_lahir_p'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Perempuan" AND id_rt = '.$id_rt);
            $data['tanggal_lahir_l'] = $this->Model_admin->ambil_kolom('tanggal_lahir','tabel_penduduk','jenis_kelamin = "Laki-laki" AND id_rt = '.$id_rt);
            $data['nama_rt'] = $this->Model_admin->ambil_nama_rt('id_rt ='.$id_rt);
        }
        // pp = pendapatan per pendidikan
            

        $data['rt'] = $this->Model_admin->ambil_kolom('*','tabel_rt','id_rt IS NOT NULL');

        $this->load->view('infografis/beranda',$data);
        $this->load->view('admin/main',$data);
    }
}
