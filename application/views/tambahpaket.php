 <div class="ui stackable segment grid">
		<div class="ui three wide column left aligned">
			<i class="circular address card icon"></i>
			Nama EO/Vendor
		</div>
		<div class="ui three wide column left aligned">
			<i class="circular address book icon"></i>
			Nama pemilik
		</div>
		<div class="ui three wide column left aligned">
			<i class="circular credit card outline icon"></i>
			No.Rekening
		</div>
		<div class="ui five wide column"></div>
		<div class="ui two wide column right aligned">
			<a href="<?php echo base_url() ?>"><i class="circular small logout alternate icon"></i>
		Logout</a></div>
	</div>

	<div class="ui middle aligned center aligned segment stackable grid">
	<div class="six wide column">
		<h3 class="content">TAMBAH PAKET</h3>
		<form class="ui large form" method="post" action="<?php echo base_url().'notifvendor' ?>">
			<div class="ui stacked segment">
				<div class="field">
					<input type="text" name="nama_paket" value="" placeholder="Nama Paket" required="">
				</div>
				<div class="field">
					<select name="jenis_paket" required="" class="ui dropdown">
						<option value="">Jenis Paket</option>
						<option value="w">Wedding</option>
						<option value="bd">Birthday</option>
						<option value="ba">Building Act</option>
					</select>
				</div>
				<div class="field">
					<input type="text" name="harga_paket" value="" placeholder="Harga Paket" required="">
				</div>
				<div class="field">
					<input type="file" name="gambar_paket" value="" required="" class="file">
				</div>
				<div class="field">
					<textarea name="alamat" placeholder="ALAMAT" required=""></textarea>
				</div>
				<div class="field">
					<button type="" class="ui positive button fluid" name="send">LANJUT</button>
				</div>
			</div>
		</form>
	</div>
</div>