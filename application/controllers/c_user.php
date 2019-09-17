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
		if ($pilih==1) {
			redirect('signuser','refresh');
		}else {
			redirect('signvendor','refresh');
		}
	}
	public function vendor()
	{
		$this->load->view('header');
		$this->load->view('signupvendor');
		$this->load->view('footer');
	}
	public function signuser()
	{
		$this->load->view('header');
		$this->load->view('signupuser');
		$this->load->view('footer');
	}
	public function trans()
	{
		$this->load->view('header');
		$this->load->view('transaksi');
		$this->load->view('footer');
	}
	public function trans2()
	{
		$this->load->view('header');
		$this->load->view('transaksi2');
		$this->load->view('footer');
	}
	public function trans3()
	{
		$this->load->view('header');
		$this->load->view('transaksi3');
		$this->load->view('footer');
	}
	public function detail()
	{
		$this->load->view('header');
		$this->load->view('detail');
		$this->load->view('footer');
	}
	public function notif()
	{
		$this->load->view('header');
		$this->load->view('notif_transaksi');
		$this->load->view('footer');
	}
	public function notifsign()
	{
		$this->load->view('header');
		$this->load->view('notif_signin');
		$this->load->view('footer');
	}
	public function notifuser()
	{
		$this->load->view('header');
		$this->load->view('notif_user');
		$this->load->view('footer');
	}
	public function konfirmasi()
	{
		$this->load->view('header');
		$this->load->view('konfirpaket');
		$this->load->view('footer');
	}


	public function detailp()
	{
		$this->load->view('header');
		$this->load->view('detail_paket');
		$this->load->view('footer');

	}
	public function modallogin()
	{
		$this->load->view('header');
		$this->load->view('notif_login');
		$this->load->view('footer');
	}
	public function pilih()
	{
		$user=$this->input->post('username');
		if ($user=="user") {
			redirect('notifikasi','refresh');
		}elseif ($user=="vendor") {
			redirect('notifvendor','refresh');
		}else{
			echo "gagal";
		}
	}
	public function building()
	{
		$this->load->view('header');
		$this->load->view('building');
		$this->load->view('footer');
	}
}

/* End of file c_user */
/* Location: ./application/controllers/c_user */