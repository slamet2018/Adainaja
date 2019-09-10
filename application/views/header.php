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
</head>
<body class="site">
	<div class="ui stackable grid">
		<div class="ui sixteen wide blue column segment">
			<div class="sixteen wide column segmen">	
				<h1>ADAINAJA.COM</h1></div>
			<div class="ui hidden divider"></div>
			<div class="fourteen wide column">
				<a href="<?php echo base_url().'login' ?>" class="ui inverted button"><i class="ui user icon"></i>login</a> | 
				<a href="<?php echo base_url().'signup' ?>" class="ui inverted button"><i class="ui user add icon"></i>Sign up</a>
			</div>
		</div>
	<div class="row">
	<div class="ui fluid four item menu stackable grid">
		<a href="<?php echo base_url().'' ?>" class="item"><i class="blue circular ui home icon"></i>HOME</a>
		<a href="<?php echo base_url().'c_user/detail' ?>" class="item"><i class="blue circular ui heart icon"></i>WEDDING</a>
		<a href="" class="item"><i class="blue circular ui birthday cake icon"></i>BIRTHDAY</a>
		<a href="" class="item"><i class="blue circular ui building icon"></i>BUILDING ACTIVITY</a>
	</div>
	</div>
	</div>