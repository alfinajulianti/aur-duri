<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frame
{
	public $Frame;

	function __construct()
	{
		$this->ci =&get_instance();
	}

	function frame1($frame, $data='')
	{  
		$data['halaman'] = $this->ci->load->view($frame,$data,TRUE);
		$this->ci->load->view('admin/main',$data);
	}

}
