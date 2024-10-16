<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
      setlocale(LC_ALL, 'id_ID.utf8');
      date_default_timezone_set('Asia/Jakarta');
    }

	public function index()
	{
        $data['title'] = 'Home';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('home');
        $this->load->view('templates/footer');
	}
}
