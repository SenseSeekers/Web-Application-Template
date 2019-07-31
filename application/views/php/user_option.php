
	<div class="col-md-9">
		<div class="col-md-12 text-right"><br/>
			
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add user</button>

		</div>
		<!----------------------------------------------------------------->
		<!----------------------------------------------------------------->
		<!----------------------------------------------------------------->
		<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add user</h4>
      </div>
      <div class="modal-body">

	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
      	<form action="<?php echo base_url('index.php/User/adduser_form/');?>" method="post">

		  <div class="form-group" >
		    <label for="exampleInputEmail1">User Name</label>
		    <input name="username" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter User Name">
		  </div>

			  <div class="form-group">
			    <label for="inputEmail3" class="control-label">Type of User</label>
			    <div class="">
			      <select class="form-control" name="types">
			      	<option value="">Select User Type</option>
			      	<option value="Admin">Admin</option>
			      	<option value="Manager">Manager</option>
			      	<option value="Operator">Operator</option>
			      </select>
			    </div>
			  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input name="password" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo substr(md5(microtime()), rand(0,26),5);?>">
		  </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-info">Submit</button>
		  &nbsp; <?php echo $this->session->flashdata('msg'); ?>
      </div>
    </form>

	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
      </div>
    </div>
  </div>
</div>

		<!----------------------------------------------------------------->
		<!----------------------------------------------------------------->
		<!----------------------------------------------------------------->
	<table class="table  table-bordered table-striped">
		<h4 style="color:#060E16;font-weight:bold;">User list</h4>
		<thead>
				<tr>
					<th>SL</th>
					<th>User Name</th>
					<th>Role</th>
					<th>Status</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					foreach ($Users as $user) {
					?>
					<tr>
					<td>0<?php echo $user->id;?></td>
					<td><?php echo $user->username;?></td>
					<td style="text-align: center;">
	  					<div class="btn-group" role="group" aria-label="...">
						<?php 
							if($user->types=='Admin'){
						?>
							<a href="<?php echo base_url('index.php/User/Admin/');?><?php echo $user->id; ?><?php echo $user->id; ?>" type="button" class="btn btn-success">Admin</a>
							<a href="<?php echo base_url('index.php/User/Manager/');?><?php echo $user->id; ?>" href=""type="button" class="btn btn-default">Manager</a>
							 <a href="<?php echo base_url('index.php/User/Operator/');?><?php echo $user->id; ?>" type="button" class="btn btn-default">Operator</a>
						<?php
							}elseif($user->types=='Manager'){
						?>

							<a href="<?php echo base_url('index.php/User/Admin/');?><?php echo $user->id; ?>" type="button" class="btn btn-default">Admin</a>
							<a href="<?php echo base_url('index.php/User/Manager/');?><?php echo $user->id; ?>" href=""type="button" class="btn btn-success">Manager</a>
							<a href="<?php echo base_url('index.php/User/Operator/');?><?php echo $user->id; ?>" type="button" class="btn btn-default">Operator</a>

						<?php
							}elseif($user->types=='Operator'){
						?>

							<a href="<?php echo base_url('index.php/User/Admin/');?><?php echo $user->id; ?>" type="button" class="btn btn-default">Admin</a>
							<a href="<?php echo base_url('index.php/User/Manager/');?><?php echo $user->id; ?>" href=""type="button" class="btn btn-default">Manager</a>
							<a href="<?php echo base_url('index.php/User/Operator/');?><?php echo $user->id; ?>" type="button" class="btn btn-success">Operator</a>
						<?php
							}
						?>
							 </div>
					</td>
					<td>	
					  <div class="btn-group" role="group" aria-label="...">
					  	<?php if($user->access=='1'){
					  	?>
					  <a href="<?php echo base_url('index.php/User/accessOn/');?><?php echo $user->id;?>" type="button" class="btn btn-primary">On</a>
					  <a href="<?php echo base_url('index.php/User/accessOff/');?>" type="button" class="btn btn-default">Off</a>
					  	<?php
					  	}elseif ($user->access=='0') {
					  	?>
					  <a href="<?php echo base_url('index.php/User/accessOn/');?><?php echo $user->id;?>" type="button" class="btn btn-default">On</a>
					  <a href="<?php echo base_url('index.php/User/accessOff/');?><?php echo $user->id;?>" type="button" class="btn btn-primary">Off</a>
					  	<?php
					  	}
					  	?>
					 </div>
					</td>
					<td>
					  <div class="btn-group" role="group" aria-label="...">
					  <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $user->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>
					  <a href="<?php echo base_url('index.php/User/UserDelete/');?><?php echo $user->id;?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					 </div>
					 <!------------------------------------------------------------------------------------------------->
					 <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $user->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
      		<form action="<?php echo base_url('index.php/User/userupdate/');?>" method="post">

      <input type="hidden" name="id" value="<?php echo $user->id; ?>">

		  <div class="form-group" >
		    <label for="exampleInputEmail1">User Name</label>
		    <input name="username" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $user->username;?>">
		  </div>

		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input name="password" type="text" class="form-control" id="exampleInputPassword1" value="<?php echo substr(md5(microtime()), rand(0,26),5);?>">
		  </div>

    

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
		
      </div>

      </form>
      </div>
    </div>
  </div>
</div> 
					<!------------------------------------------------------------------------------------------------->
					 <!-- Modal -->
					</td>
				</tr>
				<?php
					}
				?>
				
		</tbody>
	</table>
	</div>

	
</div>