<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_vendor extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home_eo');
		$this->load->view('footer');
	}
	public function notifikasiorder()
	{
		$this->load->view('header');
		$this->load->view('notifikasiorder');
		$this->load->view('footer');
	}
	public function notifvendor()
	{
		$this->load->view('header');
		$this->load->view('notif_vendor');
		$this->load->view('footer');
	}
	public function tambahpaket()
	{
		$this->load->view('header');
		$this->load->view('tambahpaket');
		$this->load->view('footer');
	}
	
}

/* End of file c_vendor.php */
/* Location: ./application/controllers/c_vendor.php */