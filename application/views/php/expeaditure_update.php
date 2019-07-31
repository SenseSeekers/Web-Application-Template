<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<div class="col-md-9" style="min-height:603px;">

 <!------------------------------------------------>
  <!--------------add accounce --------------------->
  <!------------------------------------------------>
  <div class="col-md-12">  
<div class="col-md-12" style="font-size: 2em; font-weight: bold; text-align: center;margin-bottom: 10px;">Edit Option</div>
  <div class="" style="margin-top: 20px;">
<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Dashboard/expeaditureUpdate/');?><?php echo $expeaditures_data->id; ?>">
		<input type="hidden" name="id" value="<?php echo $expeaditures_data->id;?>">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
			<div class=" col-md-4 col-sm-10">
			  <input type="date" name="vouchar_date" class="form-control" id="inputEmail3" value="<?php echo $expeaditures_data->vouchar_date;?>">
			</div>

			<label for="inputEmail3" class="col-sm-2 control-label">Vochar No</label>
			<div class="col-sm-4">
			  <input type="text" name="vouchar_no" class="form-control" id="inputEmail3" value="<?php echo $expeaditures_data->vouchar_no;?>">
			</div>
		  </div>
		  
		  

		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Project Name</label>
				<div class="col-sm-10">
					<select class="form-control" name="project_id">
				<?php 
					$pid = $expeaditures->project_id;  
					$projects = $this->Walet_model->GetallProject(); 
					foreach ($projects as $ourproject) {
				?>
				<option value="<?php echo $ourproject->id; ?>" <?php if($pid==$ourproject->id){ echo 'selected'; } ?> ><?php echo $ourproject->project_name; ?></option>
				<?php 
					}
				?>	
					</select>
				</div>
		  </div>
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Category select</label>
				<div class="col-sm-10">

					<?php 
					$pid = $expeaditures_data->service_cat_id;
					$categories = $this->Walet_model->allcategoryservice();
						foreach ($categories as $category) {
					?>

					<label class="checkbox-inline">
					  <input name="service_cat_id" type="checkbox" id="inlineCheckbox1" value="<?php echo $category->id; ?>" <?php  if($pid==$category->id){echo'check';}?>> <?php echo $category->category_name;?>
					</label>
					<?php
					}
					?>
				</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
			<textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="Enter Description"><?php echo $expeaditures_data->description;?></textarea>
			</div>
		  </div>
		  
		  
  <div class="form-group">
    <label for="unit_price" class="col-sm-2 control-label">Unit Price</label>
    <div class="col-sm-10">
      <input name="unit_price" type="text" class="form-control" id="unit_price" value="<?php echo $expeaditures_data->unit_price;?>">
    </div>
 </div>

  <div class="form-group">
    <label for="quantity" class="col-sm-2 control-label">Quntity</label>
    <div class="col-sm-10">
      <input name="quantity" type="number" class="form-control" id="quantity" value="<?php echo $expeaditures_data->quantity;?>">
    </div>
  </div>

  <div class="form-group">
    <label for="total_fare" class="col-sm-2 control-label">Total Amount</label>
    <div class="col-sm-10">
        <div class="input-group">
          <div id="total_amount" class="form-control" style="background: black; color:white; font-weight: bold; border:1px solid black;"></div>
          <div class="btn btn-info input-group-addon" name="total_amount" onClick="total_amount()" Value="Multiply"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></div>
        </div>
    </div>
    </div>  
	  
  <div class="form-group">
    <label for="payment" class="col-sm-2 control-label">Payment</label>
    <div class="col-sm-10">
      <input name="payment" type="text" class="form-control" id="payment"  value="<?php echo $expeaditures_data->payment;?>">
    </div>
</div>
  <div class="form-group">
    <label for="payable_amount" class="col-sm-2 control-label">Due</label>
    <div class="col-sm-10">
        <div class="input-group">
          <div id="due" class="form-control" style="background: black; color:white; font-weight: bold; border:1px solid black;"></div>
          <div class="btn btn-info input-group-addon" name="due" onClick="due()"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></div>
        </div>
    </div>
  </div> 
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-primary">Add to Accounce</button>

      <?php echo $this->session->flashdata('msg');?>
			</div>
		  </div>
		</form>
	</div>
  </div>
</div>	
</div>	

