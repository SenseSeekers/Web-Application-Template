<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Walet Acc</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="walet_logo_section">
		<div class="col-md-4"></div>
		<div class="col-md-4 walet_login">
			<form class="form-horizontal" method="Post" action="<?php echo base_url('index.php/Login/Loginform/');?>">
			
				  <div class="form-group">
					<div class="col-sm-10">
					  <input name="username" type="text" class="form-control" id="inputEmail3" placeholder="User Name ">
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <input name="password" type="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-sm-10">
					  <button type="submit" class="btn btn-default">Sign in</button>
					 &nbsp; <?php echo $this->session->flashdata('msg'); ?>
					</div>
				  </div>
				  
			</form>
		</div>
		<div class="col-md-4"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>