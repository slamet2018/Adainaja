<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="bahan/semantic.css"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/semantic.min.css'?> ">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/header.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'bahan/style.css'?>">
	<script type="text/javascript" src="<?php echo base_url().'bahan/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'bahan/semantic.min.js'?>"></script>
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

</head>
<body class="site">
	<!-- <div class="bg"></div> -->
	<div class="ui hidden divider">
<div class="ui stackable  grid center aligned bg">
	<!--  -->
	<div class="five wide column grid">
		<div class="ui sixteen wide column center aligned">
			<h1 class="ui white header">
 				<div class="ui massive circular image">
					<img class="ui logo" src="<?php echo base_url().'bahan/logoeo.jpg' ?>">
				</div>
					ADAINAJA
			</h1>
		</div>
		<div class="ui dividing raised header"></div>
		<div class="ui sixteen wide column right floated">
		<div class="two wide column">
 		<a href="<?php echo base_url().'login' ?>" class="item"><i class="user icon"></i>Login</a> | 
		<a href="<?php echo base_url().'signup' ?>" class="item"><i class="user add icon"></i>Sign up</a>
 		</div>
		</div>
		
	</div>
</div>


 <div class="ui borderless main ui teal four item computer three item mobile inverted menu" style="box-shadow:5px 2px 5px 2px silver;
  }">
 <div class="ui text container">
 <a href="<?php echo base_url().'' ?>" class="item">HOME</a>
 <a href="<?php echo base_url().'wedding' ?>" class="item">WEDDING</a>
 <a href="#" class="item">BIRTHDAY</a>
 <a href="#" class="item">BUILDING</a>
 
 
 </div>
 </div>