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
	public function notification()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/notif');
		$this->load->view('admin/footer');
	}
	public function eo()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/list_eo');
		$this->load->view('admin/footer');
	}
	public function user()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/list_user');
		$this->load->view('admin/footer');
	}
	public function vendor()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/listvendor');
		$this->load->view('admin/footer');
	}

}

/* End of file c_admin.php */
/* Location: ./application/controllers/c_admin.php */