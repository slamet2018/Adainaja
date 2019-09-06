<div class="ui segment middle aligned center aligned stackable grid">
	<div class="ui four wide column ">
		<div class="content"><h2>SIGN UP</h2></div>
		<form class="ui large form" method="get" action="<?php echo base_url().'tes' ?>">
			<div class="ui stacked segment">
				<div class="field">
					<input type="text" name="user" value="" placeholder="USERNAME" required="">
				</div>
				<div class="field">
					<input type="password" name="pass" value="" placeholder="PASSWORD" required="">
				</div>
				<div class="field">
					<input type="email" name="email" value="" placeholder="EMAIL" required="">
				</div>
				<div class="field">
					<select required="" class="ui dropdown" name="pilih">
						<option disabled="">silakan memilih</option>
						<option value="1">USER</option>
						<option value="2">MEMBER/VENDOR</option>
					</select>
				</div>
				<div class="field">
					<button type="" class="ui positive button fluid" name="send">LANJUT</button>
				</div>
			</div>
		</form>
	</div>
</div>