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
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('transaksi3');
		$this->load->view('keranjang/footer_transaksi');
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
		}elseif($user=="admin"){
			redirect('dashbor','refresh');
		}else{
			echo"gagal";
		}
	}
	public function building()
	{
		$this->load->view('header');
		$this->load->view('building');
		$this->load->view('footer');
	}
	public function birthday()
	{
		$this->load->view('header');
		$this->load->view('detailbd');
		$this->load->view('footer');
	}
	public function keranjang()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/keranjang');
		$this->load->view('keranjang/footer_transaksi');
	}

	public function pembayaran()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/pembayaran');
		$this->load->view('keranjang/footer_transaksi');
	}
	public function prosesupload()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/konfirmasipesan');
		$this->load->view('keranjang/footer_transaksi');
	}
	public function ceklis()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/checklist');
		$this->load->view('keranjang/footer_transaksi');
	}
	public function daftar_trans()
	{
		$this->load->view('header');
		$this->load->view('daftar_transaksi');
		$this->load->view('footer');
	}
	public function status_trans()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/status_transaksi');
		$this->load->view('keranjang/footer_transaksi');
	}

	public function checkout_semua()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/pembayaran_semua');
		$this->load->view('keranjang/footer_transaksi');
	}
	
	public function Persiapan()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/persiapan');
		$this->load->view('keranjang/footer_transaksi');
	}
	public function proses()
	{
		$this->load->view('keranjang/header');
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/proses');
		$this->load->view('keranjang/footer_transaksi');
	}
	
	
	

	
}

/* End of file c_user */
/* Location: ./application/controllers/c_user */