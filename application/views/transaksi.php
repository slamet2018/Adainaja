<div class="ui ordered steps">
  <div class="active step">
    <div class="content">
      <div class="title">PERTAMA</div>
      <div class="description">step pertama</div>
    </div>
  </div>
  <div class="step">
    <div class="content">
      <div class="title">KEDUA</div>
      <div class="description">step kedua</div>
    </div>
  </div>
  <div class="step">
    <div class="content">
      <div class="title">TERAKHIR</div>
      <div class="description">ste terakhir</div>
    </div>
  </div>
</div>

<div class="ui grid segment">
  <div class="four wide column"></div>
  <div class="ui eight wide column segment">
    <form class="ui large form" action="<?php echo base_url().'transaksi2' ?>">
      <div class="field">
        <label class="label">ID ANDA</label>
        <input type="text" name="id" value="" placeholder="">
      </div>
      <div class="field">
        <label class="label">NAMA ANDA</label>
        <input type="text" name="nama" value="" placeholder="">
      </div>
      <div class="field">
        <label class="label">ALAMAT ANDA</label>
       <textarea name="alamat"></textarea>
      </div>
      <div class="field">
        <label class="label">PILIH LOKASI ACARA</label>
        <select name="lok" class="ui dropdown">
          <option value="Gedung">GEDUNG</option>
          <option value="Gedung">LOKASI SENDIRI</option>
        </select>
      </div>
      <button name="send" class="ui blue button fluid"><i class="ui arrow right icon"></i> LANJUT</button>
    </form>
  </div>
</div>