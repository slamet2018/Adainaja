<div class="ui grid container center aligned">
  <div class="eleven wide column ">
<div class="ui ordered steps">
  <div class="completed step">
    <div class="content">
      <div class="title">PERTAMA</div>
      <div class="description">step pertama</div>
    </div>
  </div>
  <div class="completed step">
    <div class="content">
      <div class="title">KEDUA</div>
      <div class="description">step kedua</div>
    </div>
  </div>
  <div class="active step">
    <div class="content">
      <div class="title">TERAKHIR</div>
      <div class="description">ste terakhir</div>
    </div>
  </div>
</div>
</div>
</div>

<div class="ui grid segment">
  <div class="four wide column"></div>
  <div class="ui eight wide column segment">
    <form method="get" class="ui large form" action="<?php echo base_url().'c_user/notif' ?>">
      <h2>TRANSFER KE </h2>
      <h3>130-2xxxx</h3>
      <div class="field">
        <label class="label">UPLOAD BUKTI PEMBAYARAN</label>
        <input type="file" name="bayar" value="" placeholder="" class="ui button">
      </div>
      <button name="send" class="ui blue button fluid"><i class="ui arrow right icon"></i> LANJUT</button>
    </form>
  </div>
</div>