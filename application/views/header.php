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
      	$('.ui.dropdown').dropdown();
    	});
  </script>
  <script type="text/javascript">
  		$('.ui.modal')
  		.modal()
		;
  </script>
</head>
<body class="site">
	<div class="ui stackable grid">
		<div class="ui row blue grid segment">
			<div class="four wide column center aligned	">	
				<h1>ADAINAJA.COM</h1>
			</div>
			<!-- <div class="ui hidden divider"></div> -->
			<div class="eight wide column"></div>
			<div class="four wide column center aligned">
				<a href="<?php echo base_url().'login' ?>" class="ui inverted button"><i class="ui user icon"></i>login</a> | 
				<a href="<?php echo base_url().'signup' ?>" class="ui inverted button"><i class="ui user add icon"></i>Sign up</a>
			</div>
		</div>
	
	
	<!-- menu -->
	<div class="ui row grid segment column doubling container">
		<div class="ui four wide column segment grid middle aligned">
			<div class="eight wide column right aligned"><i class="ui circular large home icon"></i></div>
			<div class="five wide column left aligned"><a class="label" href="<?php echo base_url().'' ?>"><h2>HOME</h2></a></div>
		</div>
		<div class="ui four wide  column segment grid middle aligned">
			<div class="eight wide column right aligned"><i class="ui circular large heart icon"></i></div>
			<div class="five wide column left aligned"><a class="label" href="<?php echo base_url().'wedding' ?>"><h2>WEDDING</h2></a></div>
		</div>
		<div class="ui four wide  column segment grid middle aligned">
			<div class="eight wide column right aligned"><i class="ui circular large birthday cake icon"></i></div>
			<div class="five wide column left aligned"><a class="label" href=""><h2>BIRTHDAY</h2></a></div>
		</div>
		<div class="ui four wide  column segment grid middle aligned">
			<div class="eight wide column right aligned"><i class="ui circular large building icon"></i></div>
			<div class="five wide column left aligned"><a class="label" href=""><h2>BUILDING</h2></a></div>
		</div>
	</div>
	<!-- akhir menu -->
</div>