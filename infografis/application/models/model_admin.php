<?php
class Model_admin extends CI_Model
{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
        $this->load->helper('date');
	}

	public function jumlah_data_where($id = '', $tabel = '',$where = '')
	{
		//$this->db->order_by($id, 'DESC');
		$this->db->where($where);
		$record = $this->db->get($tabel);
		return $record->num_rows();
	}

	public function ambil_kolom($var='',$tabel ='',$where='')
	{
		$this->db->select($var);
		$this->db->where($where);
		$record = $this->db->get($tabel);
		return $record;
	}

	public function ambil_nama_rt($where='')
	{
		$this->db->select('nama_rt');
		$this->db->where($where);
		$record = $this->db->get('tabel_rt');
		$var = $record->result();
		return $var[0]->nama_rt;
	}
}
