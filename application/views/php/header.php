<?php if(!isset($_SESSION['username'])){
      redirect('login/');}?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
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
    <link href="<?php echo base_url();?>css/jquery.dataTables.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="walet_Dahboard_section">
  <!------------------------------------------------>
  <!--------------add accounce --------------------->
  <!------------------------------------------------>
  <div class="menu_section">
	<nav class="container-fluid navbar navbar-default" style="margin:0px;">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo base_url('index.php/Dashboard/');?>" style="font-weight: bold;font-size: 34px;">Walet Acc</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		 <ul class="nav navbar-nav navbar-right">

			<li class="<?php if(isset($active_wm)){if ($active_wm=='home'){echo 'active';}}?>">
        <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/');?>" style="color:#553;">Dashboard</a>
      </li>


		<li class="if(isset($active_wm)){if ($active_wm=='setting'){echo 'active';}}?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#553;font-weight:bold;">Walet<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('index.php/Credit/');?>">Receiver List</a></li>

            <li>
              <a href="<?php echo base_url('index.php/Credit/Expeaditure_walet');?>">Expeaditure List</a>
            </li>

		<li class="" ><a class="menu_item" href="<?php echo base_url('index.php/Credit/walet_list');?>" style="color:#553;">Walet</a>
      </li>

          </ul>
        </li>

			<li class="<?php if(isset($active_wm)){if ($active_wm=='add_walet'){ echo 'active';}}?>">
       <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/add_walet');?>" style="color:#553;">Add To Walet</a>
      </li>

			<li class="<?php if(isset($active_wm)){if($active_wm=='walet_report'){echo 'active';}}?>" >
        <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/walet_report');?>" style="color:#553;"> Walet Report</a>
      </li>

<?php 
  if($this->session->types=='Admin'){
?>
      <li class="<?php if(isset($active_wm)){if ($active_wm=='user_option'){echo 'active';}}?>">
        <a class="menu_item" href="<?php echo base_url('index.php/User/');?>" style="color:#553;">User option</a>
      </li>
<?php 
  }
?>


		<li class="if(isset($active_wm)){if ($active_wm=='setting'){echo 'active';}}?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Setting<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('index.php/User/');?>">User</a></li>

            <li>
              <a href="<?php echo base_url('index.php/Dashboard/add_service');?>">Add service category</a>
            </li>

            <li>
              <a href="<?php echo base_url('index.php/Dashboard/project');?>">Add Project</a>
            </li>

            <li role="separator" class="divider"></li>
           <li>
            <a class="menu_item" href="<?php echo base_url('index.php/login');?>" style="color:#553;">Logout</a>
           </li>
          </ul>
        </li>
		 </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
 </div><br />
 