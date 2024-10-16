<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EditData extends CI_Controller {

    public function __construct()
    {
      setlocale(LC_ALL, 'id_ID.utf8');
      parent::__construct();
      date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
        $data['title'] = 'Edit Data';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('editData');
        $this->load->view('templates/footer');
	}
}
