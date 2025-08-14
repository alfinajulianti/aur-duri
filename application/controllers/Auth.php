<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    setlocale(LC_ALL, 'id_ID.utf8');
    parent::__construct();
    date_default_timezone_set('Asia/Jakarta');
    $this->load->library('form_validation');
  }

  public function index()
  {
    if ($this->session->userdata('login')) {
      redirect('home');
    }
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if ($this->form_validation->run() == false) {
      $data['title'] = 'Login';
      $this->load->view('templates/header', $data);
      $this->load->view('auth/login');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->db->get_where('pengguna', ['username' => $username])->row_array();

    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data['login'] = true;
        $data['username'] = $user['username'];
        $this->session->set_userdata($data);
        $this->session->set_flashdata('notif_update', "<script>swal.fire('Berhasil!','Anda berhasil masuk', 'success');</script>");
        redirect("dashboard");
      } else {
        $this->session->set_flashdata('notif_update', "<script>swal.fire('Gagal!','Password salah', 'error');</script>");
        redirect("auth");
      }
    } else {
      $this->session->set_flashdata('notif_update', "<script>swal.fire('Gagal!','Username tidak terdaftar', 'error');</script>");
      redirect("auth");
    }
  }

  public function logout()
  {
    $this->session->unset_userdata('username');
    $this->session->unset_userdata('login');

    $this->session->set_flashdata('notif_update', "<script>swal.fire('Berhasil!','Anda berhasil keluar', 'success');</script>");
    redirect("auth");
  }
}
