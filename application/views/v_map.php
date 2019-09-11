<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Detail Paket</title>
	<?php echo $map['js'];?>
</head>
<body>

	
 <div class="ui stackable segment">
        <div class="ui grid">
                <div class="ui three wide column left aligned">
                        <i class="address card icon"></i>
                        Nama EO/Vendor
                </div>
                <div class="ui three wide column left aligned">
                        <i class="address book icon"></i>
                        Nama pemilik
                </div>
                <div class="ui three wide column left aligned">
                        <i class="credit card outline icon"></i>
                        No.Rekening
                </div>
                <div class="ui five wide column"></div>
                <div class="ui two wide column right aligned">
                        <i class="small sign-in alternate icon"></i>
                Logout</div>
        </div>
<br><br>

        <div>
                <div class="ui button">
                <a href="tambahpaket.php"><i class="ui big plus icon"></i>Tambah Paket</a>
        </div>
        <div class="ui button">
                <a href="tampilpaket.php"><i class="ui big eye icon"></i>Tampil Paket</a>
        </div>
        <div class="ui button">
                <a href="notifikasieo.php"><i class="ui big shopping cart icon"></i>Notifikasi Booking</a>
        </div>
        <div class="ui button">
                <a href="editprofil.php"><i class="ui big edit icon"></i>Edit Profils</a>
        </div>
        </div>
        <br><br>


        <div class="">
                <i class="ui map marker alternate icon"></i><h4>LOKASI ANDA</h4>
        </div>
</div>


<?php echo $map['html'];?>
</body>
</html>