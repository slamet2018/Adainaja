<div class="container">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-xs-4 col-sm-2 text-right">
      <a href="<?php echo base_url().'siap' ?>"><span class="label label-danger">2</span>
        <img src="<?php echo base_url().'image/persiapan.png' ?>" class="img-responsive img-thumnail" alt="">
      </a>
    </div>
    <div class="col-xs-4 col-sm-2 text-right">
      <a href="<?php echo base_url().'proses' ?>"><span class="label label-danger">1</span>
        <img src="<?php echo base_url().'image/proses.png' ?>" class="img-responsive img-thumnail" alt="">
      </a>
    </div>
    <div class="col-xs-4 col-sm-2 text-right">
      <a href="<?=('ceklis') ?>"><span class="label label-danger">1</span>
        <img src="<?php echo base_url().'image/selesai.png' ?>" class="img-responsive img-thumnail" alt="">
      </a>
    </div>
  </div>
</div>
<!-- akhir menu -->
<div class="container">
  <div class="row">
    <div class="col-xs-12">
     <p class="navbar-text">
     </p>
   </div>
 </div>

</div>
<!-- table -->
<div class="container">
  <a class="btn btn-primary" href="<?php echo base_url(); ?>" data-toggle="tooltip" data-placement="top" title="Tambah Pesanan"><span class="glyphicon glyphicon-plus"></span></a>    
</a>
<div class="row">
  <div class="col-xs-3">
    PRODUCK
  </div>
  <div class="col-xs-5">
    DETAIL
  </div>
  <div class="col-xs-2">
    HARGA
  </div>
  <div class="col-xs-2">
    AKSI
  </div>
</div>
<hr>
<div class="row">
  <div class="col-xs-3">
   <div class="checkbox">
    <label>
      <input type="checkbox" value="">
      Pilih
    </label>
  </div>
    <img src="<?=('image/')?>weding.jpg" class="img-responsive" alt="Image">
</div>
<div class="col-xs-5">
  <h2> Nama EO <small>Belum Dibayar</small></h2>
</div>
<div class="col-xs-2">
  Rp.xxx
</div>
<div class="col-xs-2">
  <!-- modal -->

  <a class="btn btn-danger" data-toggle="modal" href='#modal-id'><span class="glyphicon glyphicon-trash"></span></a>
  <div class="modal fade" id="modal-id">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">peringatan</h4>
        </div>
        <div class="modal-body">
          Yakin akan menghapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
          <button type="button" class="btn btn-primary">Yakin</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal -->
</div>
</div>

<!-- table -->

<hr>
<br>
<br>
<br>
<br>
<br>
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
    <div class="row">
      <div class="col-xs-4 text-right">
        <div class="checkbox text-success">
          <label><input type="checkbox" name="">
          PILIH SEMUA</label>
        </div>
      </div>
      <div class="col-xs-2 text-right">
        Subtotal <p class="text-danger ">Rp. xxx</p>
      </div>
      <div class="col-xs-4 text-center">

        <a href="<?php echo base_url().'cekot' ?>" class="btn btn-danger">CHECKOUT</a>
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