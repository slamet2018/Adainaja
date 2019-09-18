<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
		
		$this->load->view('bawah');
	}

}

/* End of file c_admin.php */
/* Location: ./application/controllers/c_admin.php */