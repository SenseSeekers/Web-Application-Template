

  <div class="col-md-9">

		  &nbsp; <?php echo $this->session->flashdata('msg'); ?>
		<div class="col-md-12 text-right">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Category</button>

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
        <h4 class="modal-title" id="myModalLabel">Add Category</h4>
      </div>
      <div class="modal-body">

	<!-------------------------------------------------------------------->
	<!-------------------------------------------------------------------->
      <form action="<?php echo base_url('index.php/Debit/category_from/');?>" method="Post">
      <div class="form-group">
        <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Service Category ">
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
  	<h3>Category List</h3>
    <thead>
        <tr>
          <th>SL</th>
          <th>category Name</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php 
           foreach ($Category as $Categorys){
          ?>
            <tr>
          <td><?php echo $Categorys->id;?></td>
          <td><?php echo $Categorys->category_name;?></td>
          <td>     
              <div class="btn-group" role="group" aria-label="...">

          <?php if($Categorys->status=='1'){
            ?>
              <a href="<?php echo base_url('index.php/Debit/statusOn/');?><?php echo $Categorys->id;?>" type="button" class="btn btn-info">On</a>
              <a href="<?php echo base_url('index.php/Debit/statusOff/');?><?php echo $Categorys->id;?>" type="button" class="btn btn-default">Off</a>
            
            <?php
          }elseif($Categorys->status=='0'){
          ?>
              <a href="<?php echo base_url('index.php/Debit/statusOn/');?><?php echo $Categorys->id;?>" type="button" class="btn btn-default">On</a>
              <a href="<?php echo base_url('index.php/Debit/statusOff/');?><?php echo $Categorys->id;?>" type="button" class="btn btn-primary">Off</a>
          <?php
          }
          ?> 
             </div>
          </td>
          <td>      
              <div class="btn-group" role="group" aria-label="...">

              <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal<?php echo $Categorys->id;?>"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></button>

              <a href="<?php echo base_url('index.php/Debit/categorydelete/');?><?php echo $Categorys->id;?>" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </a>
             </div>
 <!-- Modal -->
<div class="modal fade" id="myModal<?php echo $Categorys->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">

    <form action="<?php echo base_url('index.php/Debit/category_update/');?>" method="Post">

      <input type="hidden" name="id" value="<?php echo $Categorys->id; ?>">
      <div class="form-group">
        <label for="exampleInputEmail1">Service Category</label>
        <input name="category_name" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $Categorys->category_name;?>" >
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
