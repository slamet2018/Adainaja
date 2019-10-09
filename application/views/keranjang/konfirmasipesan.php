<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<h4>Konfirmasi Pembelian Paket</h4>
      <h4>Pilih Bank</h4>
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
			<h5>Total yang harus dibayar</h5>
			<h2>Rp. 0</h2><p class="bg-danger rounded">NB : Jumlah transfer harus sama dengan nominal yang diatas, tidak boleh lebih ataupun kurang, jika sudah ditranfer upload bukti pembayaran sebelum 24 jam</p>

			<table>
				<caption></caption>
				<tdead>
					<tr>
						<td>NO. REKENING BRI</td>
						<td>:</td>
						<td>
 <input type="text" value="132.xxxx" id="myInput" readonly="" class="form-control"></td>
                        <td>  .<a href="#" onclick="myFunction()">Copy</a></td>
						
					</tr>
				</tdead>
				<tbody>
					<tr>
						<td>ATAS NAMA</td>
						<td>:</td>
						<td class="text-danger"><b>ADAINAJA</b></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<br>
<br>
<br>

<!-- fixed nav -->

<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <button class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">
          UPLOAD BUKTI PEMBAYARAN
      </button>
    </div>
    <br>
    <br>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <a href="<?php echo base_url().'transaksi'; ?>" class="btn btn-block btn-default">UPLOAD NANTI</a>
        </div>
  </div>
</div>
</nav>

<!-- akhir fixed nav -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">UPLOAD BUKTI PEMBAYARAN</h4>
      </div>
     
      <div class="modal-body">
        <div class="form-group">
        	<input type="file" name="" value="" placeholder="">
        </div>
        
        <div class="container text-center">
        	<div class="row">
        		<div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1">
        			<img src="<?php echo base_url().'image/weding.jpg' ?>" alt="responsive image" class="img-responsive img-thumnail">
        		</div>
        	</div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="<?php echo base_url().'transaksi' ?>" type="button" class="btn btn-primary">Save changes</a>
      </div>
     
    </div>
  </div>
</div>


    	</div>
  </div>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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