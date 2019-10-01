<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="bahan/semantic.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/semantic.min.css'?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/header.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/style.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/sticky.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'bahan/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'bahan/semantic.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/sticky.js'?>"></script>
	<link href="<?php echo base_url().'bahan/sweetalert.css'?>" rel="stylesheet" />
	<link rel="shortcut icon" type="image/jpg" href="20190608103822_IMG_9110.JPG"/>	
	<script type="text/javascript">
    $(document).ready(function(){
      $('.ui.dropdown').dropdown()
      ;
    });
  </script>
  <script>
 $(document)
 .ready(function() {

 // fix main menu to page on passing
 $('.main.menu').visibility({
 type: 'fixed'
 });
 $('.overlay').visibility({
 type: 'fixed',
 offset: 80
 });
 // lazy load images
 $('.image').visibility({
 type: 'image',
 transition: 'vertical flip in',
duration: 500
});
// show dropdown on hover
$('.main.menu .ui.dropdown').dropdown({
on: 'hover'
});
})
;
</script>
<script type="text/javascript">
	$('.ui.basic.modal')
  .modal('show')
;
$('.ui.modal')
  .modal()
;
     $('.ui.basic.modal')
      .modal('show');
</script>

</head>
<body class="site">