<style>
.left_menu  {
}
.left_menu li {
	list-style: none;
	border-bottom: 3px solid #678;
}
.left_menu li a{
	list-style: none;
	text-decoration: none;

}
.menu_item{	color:#fff;opacity:.9;}
.menu_item:hover{
	opacity:0.9;
	color:#fff;
}


</style>

<div class="container_fluid" style="margin-top:-20px;height:595px; margin-bottom:0px;">

<div class="col-md-3" style="background:#1B2A47;height:600px; ">

<br/>
<br/>

		<ul class="left_menu">

		<li class="<?php if(isset($active_wm)){if ($active_wm=='home'){echo 'active';}}?>">
        <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/');?>">Dashboard</a>
      </li>

			<li class="<?php if(isset($active_wm)){if($active_wm=='walet'){ echo 'active';}}?>"> <a class="menu_item" href="<?php echo base_url('index.php/Credit/');?>">Walet</a>
      </li>
		<li class="<?php if(isset($active_wm)){if ($active_wm=='add_walet'){ echo 'active';}}?>">
       <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/add_walet');?>">Add To Walet</a>
      </li>

		<li class="<?php if(isset($active_wm)){if ($active_wm=='add_walet'){ echo 'active';}}?>">
       <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/add_service');?>">Add To Category</a>
      </li>

			<li class="<?php if(isset($active_wm)){if($active_wm=='walet_report'){echo 'active';}}?>" >
        <a class="menu_item" href="<?php echo base_url('index.php/Dashboard/walet_report');?>"> Walet Report</a>
      </li>

			<li class="<?php if(isset($active_wm)){if ($active_wm=='user_option'){echo 'active';}}?>">
        <a class="menu_item" href="<?php echo base_url('index.php/User/');?>">User option</a>
      </li>


</ul>
	</div>