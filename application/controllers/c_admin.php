<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {

	public function index()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('aksi_admin');
		$this->load->view('admin/footer');
	}

}

/* End of file c_admin.php */
/* Location: ./application/controllers/c_admin.php */