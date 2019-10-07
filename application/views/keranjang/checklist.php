<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="checkbox">
				<label>
					<input type="checkbox" value="">
					Pilih semua
				</label>
			</div>
		</div>
		<div class="col-xs-4 col-sm-2">
				<a href="#" class="thumbnail">
					<img src="<?php echo base_url().'image/weding.jpg' ?>" alt="">
				</a>
		</div>
		<div class="col-xs-8 col-sm-10">
				<h3>Tratag yang selalu tersakiti</h3>
					<div class="checkbox">
						<label>
							<input type="checkbox" value="">
							Pilih satu
						</label>
					</div>
				
		</div>
		
	</div>
</div>

<div class="modal fade" id="modal-id">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Anda Berhasil</h4>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="col-sm-1">
							<img src="<?php echo base_url().'image/oke.png' ?>" class="img-responsive img-circle" alt="Image">
						</div>
						<div class="col-sm-3">
							<h3>TERIMA KASIH</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<a href="<?= ('transaksi')?>" type="button" class="btn btn-default" >Close</a>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<div class="container">
		<div class="col-xs-6 mt-3">
			<span class="label label-warning">3</span>
		</div>
		<div class="col-xs-4 mt-3">
			<a class="btn btn-danger btn-block" data-toggle="modal" href='#modal-id'>Kirim</a>
		</div>
	</div>
</nav>