<div class="col-md-9">

		  &nbsp; <?php echo $this->session->flashdata('msg'); ?>
  	<div class="col-md-12 text-right">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Project</button>

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
        <h4 class="modal-title" id="myModalLabel">Add Project</h4>
      </div>
      <div class="modal-body">

	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
      	 <form action="<?php echo base_url('index.php/Debit/project_from/');?>" method="Post">
        <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input name="project_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Project Name ">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="project_description" type="text" class="form-control"id="exampleInputEmail1" placeholder="Project Description" rows="4" ></textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Project Address</label>
          <textarea name="project_address" type="text" class="form-control" id="exampleInputEmail1" placeholder="Project Address" rows="4" ></textarea>
        </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		  <button type="submit" class="btn btn-info">Submit</button>
      </div>
    </form>

	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
      </div>
    </div>
  </div>
</div>
  <table class="table  table-bordered table-striped">
  	<h3>Projecr List</h3>
    <thead>
        <tr>
          <th>SL</th>
          <th>Project Name</th>
          <th>Project Description</th>
          <th>Project Address</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
           foreach ($Project as $Projects){
          ?>
            <tr>
          <td><?php echo $Projects->id;?></td>
          <td><?php echo $Projects->project_name;?></td>
          <td><?php echo $Projects->project_description;?></td>
          <td><?php echo $Projects->project_address;?></td>
          <td>     
              <div class="btn-group" role="group" aria-label="...">

          <?php if($Projects->status=='1'){
            ?>
              <a href="<?php echo base_url('index.php/Debit/projectOn/');?><?php echo $Projects->id;?>" type="button" class="btn btn-info">On</a>
              <a href="<?php echo base_url('index.php/Debit/projectOff/');?><?php echo $Projects->id;?>" type="button" class="btn btn-default">Off</a>
            
            <?php
          }elseif($Projects->status=='0'){
          ?>
              <a href="<?php echo base_url('index.php/Debit/projectOn/');?><?php echo $Projects->id;?>" type="button" class="btn btn-default">On</a>
              <a href="<?php echo base_url('index.php/Debit/projectOff/');?><?php echo $Projects->id;?>" type="button" class="btn btn-primary">Off</a>
          <?php
          }
          ?> 
             </div>
          </td>
          <td>      
              <div class="btn-group" role="group" aria-label="...">

              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $Projects->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

              <a href="<?php echo base_url('index.php/Debit/ProjectDelete/');?><?php echo $Projects->id;?>" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </a>
             </div>
 <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $Projects->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

    <form action="<?php echo base_url('index.php/Debit/project_update/');?>" method="Post">

      <input type="hidden" name="id" value="<?php echo $Projects->id; ?>">

      <div class="form-group">
          <label for="exampleInputEmail1">Project Name</label>
          <input name="project_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $Projects->project_name;?>">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Project Description</label>
          <textarea name="project_description" type="text" class="form-control"id="exampleInputEmail1" placeholder="Project Description" rows="4" ><?php echo $Projects->project_description;?>
          </textarea>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Project Address</label>
          <textarea name="project_address" type="text" class="form-control" id="exampleInputEmail1" value="" rows="4" ><?php echo $Projects->project_address;?></textarea>
        </div>

      <button type="submit" class="btn btn-info">Submit</button>
      <?php echo $this->session->flashdata('msg');?>
    </form>


      </div>
    </div>
  </div>
</div> 
   <!---------------------------------------------------------------------------->
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
