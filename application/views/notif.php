   
   <!DOCTYPE html>
   <html>
   <head>
     <title></title>
   </head>
   <body>
    <?php echo "<script type='text/javascript'>
  setTimeout(function () { 
  
    swal({
            title: 'Already Email',
            text:  'hehe',
            type: 'success',
            timer: 30,
            showConfirmButton: true
        });   
  },10);  
  window.setTimeout(function(){ 
    window.location.replace('../');
  } ,3000); 
  </script>" ?>
  <h1 align="center" style="background-color: blue;color: white;margin-top: 20%;">berhasil</h1>
   
<script type="text/javascript" src="<?php echo base_url().'jquery-2.1.4.min.js'?>"></script>
<script src="<?php echo base_url().'alert/js/sweetalert.min.js' ?>"></script>
<script src="<?php echo base_url().'alert/js/qunit-1.18.0.js' ?>"></script>
   </body>
   </html>
   