<div class="contanier">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<h4>Konfirmasi Pemesanan</h4>
			<table>
				<caption></caption>
				<thead>
					<tr>
						<th>Nama</th>
						<td>: xxxxx</td>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Alamat</th>
						<td>: xxxxx</td>
					</tr>
				</tbody>
			</table>
			<hr>
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<h4>Data Yang Harus dilengkai</h4>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label>Tanggal Acara</label>
							<input type="date" name="" value="" placeholder="" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Tanggal Selesai</label>
							<input type="date" name="" value="" placeholder="" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Jumlah Undangan</label>
							<input type="number" name="" value="" placeholder="" required="" class="form-control">
						</div>
						<div class="form-group">
							<label>Lokasi acara</label>
							<textarea rows="4" class="form-control" required=""></textarea>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<h4>Produk yang Dipesan</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-6 col-sm-3">
						<img src="<?php echo base_url().'image/birthday.jpg' ?>" alt="responsive image" class="img-responsive img-thumnail">
					</div>
					<div class="col-xs-6 col-sm-9">
						<h3>Nama Vendor</h3>
						<p>Detail dan Keterangan produk</p>
					</div>
				</div>
			</div>
			<hr>
			<h4>Metode Pembayaran Melalui Bank</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-4 col-sm-2">
						<div class="form-group">
							<select class="form-control">
								<option>BRI</option>
								<option>BCA</option>
								<option>BNI</option>
								<option>MANDIRI</option>
								<option>MEGA</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<h4>Pembayaran</h4>
			<table>
				<caption></caption>
				<thead>
					<tr>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td colspan="2">NB : Pastikan nominal yang anda transfer benar dan tidak memberikan bukti transfer kepada selain pihak Adainaja</td>
					</tr>
				</tbody>
			</table>
			<br>
			<br>
			<br>
		</div>
	</div>
	
</div>
 <nav class="navbar navbar-default navbar-fixed-bottom hehe" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col-xs-4">
        <div class="checkbox text-success">
          <label><input type="checkbox" name="">
          PILIH SEMUA</label>
        </div>
      </div>
      <div class="col-xs-4 text-right">
        Subtotal <p class="text-danger ">Rp. xxx</p>
      </div>
      <div class="col-xs-4 text-center">
        
        <a href="<?php echo base_url().'upload' ?>" class="btn btn-danger">BAYAR</a>
      </div>
    </div>
    
  </div>
</nav>
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'boot/js/jquery.min.js' ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'boot/js/bootstrap.min.js' ?>"></script>
</body>
</html>
<style type="text/css" media="screen">
	html,body{
	height: 100%;
	width: 100%;
}

.site{
    display: flex;
    min-height: 10vh;
    flex-direction: column;
  }
  .site-content{
    flex: 1;
    bottom: 0;

  }
  .hehe{
  	padding-top: 5px;
  }
  /* unvisited link */
.a:link {
  color: white;
}

/* visited link */
.a:visited {
  color: white;
}

/* mouse over link */
.a:hover {
  color: green;
}

/* selected link */
.a:active {
  color: white;
}
.bg{
	background-image: url('<?php echo base_url();?>/bahan/bi.jpg');
}
.white{
	color: white;
}
.page{
    width: 1100px;
    margin: 0 auto;
    height: 100%;
    position: relative;
}
.footer{
  background-color: #277FD8;
  bottom: 0;
  width: 100%;
  height: auto;
}
.merahm{
  background-color: #FFEADB ;
  color: black;
}
@media (min-height: 320px) {
  .ui.footer.form-page { /* Increased specificity for SO snippet priority */
    position: absolute;
    bottom: 0;
    width: 100%;
  }
}
.biru{
  color:blue;
  text-shadow: all;
}
.vcenter {
    display: inline-block;
    vertical-align: middle;
    float: none;
}
</style>