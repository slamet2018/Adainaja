<div class="container">
	<div class="row">
		<div class="col-xs-">
		</div>
	</div>
</div>

<!-- akhir menu -->
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<p class="navbar-text">
				<div class="checkbox">
					<label>
						<input type="checkbox" name="" value="">Detail Produk <span class="glyphicon glyphicon-chevron-right"></span>
					</label>
				</div>
			</p>
		</div>
	</div>

</div>
<div class="container">
	<div class="row">
		<div class="col-xs-5 col-sm-2">
			<img src="<?php echo base_url().'image/birthday.jpg' ?>" alt="" class="img-thumnail img-responsive">
		</div>
		<div class="col-xs-7 col-sm-10">
			<p>KETERANGAN PRODUK</p>
			<p>Status : Sudah Dibayar ~ sedang di proses oleh vendor</p>
		</div>
	</div>
</div>
<hr>
 <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
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
        
        <a href="<?php echo base_url().'pembayaran' ?>" class="btn btn-danger">CHECKOUT</a>
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