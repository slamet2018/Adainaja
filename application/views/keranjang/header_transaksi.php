<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KERANJANG</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'boot/css/bootstrap.min.css' ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
      function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*For mobile devices*/

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
}
    </script>
  </head>
  <body>
<nav class="navbar navbar-default navbar-static-top" role="navigation">
<div class="container">
  	<div class="row">
  		<div class="col-xs-2 text-center">
  			<ul class="pager">
 				 <li class="previous"><a href="<?php echo base_url() ?>">&larr; home</a></li>
			</ul>
  		</div>
  		<div class="col-xs-6 text-left">
 				 <h2> KERANJANG</h2>
  		</div>
      <div class="col-xs-4 justify-content-left">
        <h2>Adainaja</h2>
      </div>
  	</div>
  </div>
</nav>

   