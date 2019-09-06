<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class  C_user extends CI_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');

	}
	public function kondisi()
	{
		$pilih=$this->input->get('pilih');
		if ($pilih=1) {
			redirect('signuser','refresh');
		}else {
			echo "string";
			// redirect('signvendor','refresh');
		}
	}
	public function signuser()
	{
		$this->load->view('header');
		$this->load->view('signupuser');
		$this->load->view('footer');
	}

}

/* End of file c_user */
/* Location: ./application/controllers/c_user */