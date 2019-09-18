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
				<div class="field">Input Gambar Preview Paket
					<input type="file" name="gambar_paket" value="" required="" class="file">
					<input type="file" name="gambar_paket" value="" required="" class="file">
					<input type="file" name="gambar_paket" value="" required="" class="file">
					<input type="file" name="gambar_paket" value="" required="" class="file">
				</div>
				<div class="field">
					<textarea name="lokasi" placeholder="LOKASI" required=""></textarea>
				</div>
				<div class="field">
					<button type="" class="ui positive button fluid" name="send">LANJUT</button>
				</div>
			</div>
		</form>
	</div>
</div>