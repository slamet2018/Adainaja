<div class="ui segment middle aligned center aligned stackable grid">
	<div class="ui six wide column ">
		<div class="content"><h2>SIGN UP USER</h2></div>
		<form class="ui large form" method="post" action="<?php echo base_url() ?>">
			<div class="ui stacked segment">
				<div class="field">
					<input type="text" name="nik" value="" placeholder="NIK" required="">
				</div>
				<div class="field">
					<input type="text" name="nama" value="" placeholder="NAMA" required="">
				</div>
				<div class="field">
					<input type="text" name="telp" value="" placeholder="NO TELP" required="">
				</div>
				<div class="field">
					<input type="email" name="email" value="" placeholder="EMAIL" required="">
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