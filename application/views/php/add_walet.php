
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<div class="col-md-9" style="min-height:603px;">

 <!------------------------------------------------>
  <!--------------add accounce --------------------->
  <!------------------------------------------------>
  <div class="col-md-12">  
   <!--------------------------------------------->
	<div class="col-md-12" style="padding:10px 0px">
		<div class="btn-group btn-group-justified" role="group" aria-label="...">
		  <div class="btn-group" role="group">
			<a href="<?php echo base_url('index.php/Dashboard/add_walet/');?>" type="button" class="btn btn-default">Expenditure</a>
		  </div>
		  <div class="btn-group" role="group">
			<a href="<?php echo base_url('index.php/Dashboard/add_walet_payment');?>" type="button" class="btn btn-info">Collection</a>
		  </div>
		</div>		
	</div>
   <!--------------------------------------------->

  <div class="" style="">
	<form class="form-horizontal" method="post" action="<?php echo base_url('index.php/Debit/addwalet_from/');?>" method="post"  >
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
			<div class=" col-md-4 col-sm-10">
			  <input type="date" name="vouchar_date" class="form-control" id="inputEmail3">
			</div>

			<label for="inputEmail3" class="col-sm-2 control-label">Vochar No</label>
			<div class="col-sm-4">
			  <input type="text" name="vouchar_no" class="form-control" id="inputEmail3" placeholder="EnterVochar No">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Project Name</label>
				<div class="col-sm-10">
					<select  name="project_id" class="form-control" >
						<?php 
							foreach ($project as $projects) {
							?>
							<option value="<?php echo $projects->id;?>"><?php echo $projects->project_name;?></option>
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
					foreach ($categories as $category) {
						?>

					<label class="checkbox-inline">
					  <input name="service_cat_id" type="checkbox" id="inlineCheckbox1" value="<?php echo $category->id; ?>"> <?php echo $category->category_name;?>
					</label>
					<?php
					}
					?>
				</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
			<textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="Enter Description"></textarea>
			</div>
		  </div>
		  
		  
  <div class="form-group">
    <label for="unit_price" class="col-sm-2 control-label">Unit Price</label>
    <div class="col-sm-10">
      <input name="unit_price" type="text" class="form-control" id="unit_price" placeholder="Enter Unit Prict !">
    </div>
 </div>

  <div class="form-group">
    <label for="quantity" class="col-sm-2 control-label">Quntity</label>
    <div class="col-sm-10">
      <input name="quantity" type="number" class="form-control" id="quantity" placeholder="Enter quantity !">
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
      <input name="payment" type="text" class="form-control" id="payment" placeholder="Enter payment !">
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

