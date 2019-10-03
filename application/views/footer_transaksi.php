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
</style>