	<div class="ui stackable segment">
		<i class="address card icon"></i>
		<div>Nama EO/Vendor</div>
		<h4>preview paket</h4>
		<div class="ui doubling five cards">
			<div class="ui card">
				<img class="ui huge image" src="<?php echo base_url().'image/weding.jpg' ?>">
			</div>

			<div class="ui card">
				<img class="ui huge image" src="<?php echo base_url().'image/weding.jpg' ?>">
			</div>
			<div class="ui card">
				<img class="ui huge image" src="<?php echo base_url().'image/weding.jpg' ?>">
			</div>
			<div class="ui card">
				<img class="ui huge image" src="<?php echo base_url().'image/weding.jpg' ?>">
			</div>
			<div class="ui card">
				<img class="ui huge image" src="<?php echo base_url().'image/weding.jpg' ?>">
			</div>
		</div>
		<h4>Lokasi Pihak Terkait</h4>
		<!-- 16:9 aspect ratio -->
		<div class="embed-responsive embed-responsive-1by1">
		  <iframe class="embed-responsive-item" src="https://www.google.co.id/maps/"></iframe>
		</div>
		<div><i class="map marker alternate icon"></i>Gawis Kulon Gondowulan Kepil</div><br>
		<div><i class="dollar sign icon"></i> 120.00</div><br> 
		<div class="ui hidden divider"></div>
			<div class="ui stackable container grid center aligned">
				<div class="fourteen wide column"></div>
				<div class="five wide column center aligned"><a href="<?php echo base_url().'pembayaran' ?>" class="ui green button fluid"><i class="calendar outline icon"></i>BOOKING NOW</a></div>
			</div><br>
		<h4>Jika sudah Order, tunggu notifikasi untuk pembayaran dan informasi lebih lanjut</h4>
		<div class="ui hidden divider"></div>
			<div class="ui stackable container grid center aligned">
				<div class="fourteen wide column"></div>
				<div class="four wide column center aligned"><a href="#" class="ui whatsapp circular button fluid"><i class="whatsapp icon"></i>Chat WhatsApp</a></div>
				<div class="four wide column center aligned"><a href="" class="ui red circular button fluid"><i class="flag outline icon"></i>Laporan Pelanggaran</a></div>
			</div>
	</div>



<!-- $route['status_transaksi']='c_user/status_trans/';
$route['daftar_transaksi']='c_user/daftar_trans/'; -->


<!-- public function daftar_trans()
	{
		$this->load->view('header');
		$this->load->view('daftar_transaksi');
		$this->load->view('footer');
	} -->



	<!-- public function status_trans()
	{
		$this->load->view('keranjang/header_transaksi');
		$this->load->view('keranjang/status_transaksi');
		$this->load->view('keranjang/footer_transaksi');
	} -->