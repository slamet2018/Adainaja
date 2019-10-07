<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_vendor extends CI_Controller {

	public function index()
	{	$this->load->library('googlemaps');
        $config=array();
        $config['center']="-7.3588585,109.9037879";
        $config['zoom']='17';
        $config['map_height']="400px";
        $this->googlemaps->initialize($config);
/*        $marker=array();
        $marker['position']="37.4419, -122.1419";
        $this->googlemaps->add_marker($marker);*/
        $data['map']=$this->googlemaps->create_map();
		

		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('home_eo');
		$this->load->view('v_map',$data);
		$this->load->view('footer');
	}
	public function notifikasiorder()
	{
		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('notifikasiorder');
		$this->load->view('footer');
	}
	public function notifvendor()
	{
		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('notif_vendor');
		$this->load->view('footer');
	}
	public function tambahpaket()
	{
		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('tambahpaket');
		$this->load->view('footer');
	}
	public function tampilpaket()
	{
		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('tampilpaket');
		$this->load->view('footer');
	}
	public function edit()
	{
		$this->load->view('header');
		$this->load->view('menuvendor');
		$this->load->view('editprofile');
		$this->load->view('footer');
	}

	
}

/* End of file c_vendor.php */
/* Location: ./application/controllers/c_vendor.php */