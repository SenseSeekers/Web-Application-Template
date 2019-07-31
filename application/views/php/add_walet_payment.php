<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<!------------------------------------------------------------------------------->
<div class="col-md-9" style="height:585px;">

  <!------------------------------------------------>
  <!--------------add accounce --------------------->
  <!------------------------------------------------>
  <section class="col-md-12">  
   <!--------------------------------------------->
	<div class="col-md-12" style="padding:30px 0px">
		<div class="btn-group btn-group-justified" role="group" aria-label="...">
		  <div class="btn-group" role="group">
			<a href="<?php echo base_url('index.php/Dashboard/add_walet');?>" type="button" class="btn btn-info ">Expenditure</a>
		  </div>
		  <div class="btn-group" role="group">
			<a href="<?php echo base_url('index.php/Dashboard/add_walet_payment');?>" type="button" class="btn btn-default">Collection</a>
		  </div>
		</div>		
	</div>
   <!--------------------------------------------->

  <div class="">
	<form class="form-horizontal" action="<?php echo base_url('index.php/Credit/addpayment_from/');?>" method="post">
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Date</label>
			<div class=" col-md-4 col-sm-10">
			  <input type="date" name="issue_date" class="form-control" id="inputEmail3">
			</div>

			<label for="inputEmail3" class="col-sm-2 control-label">Vochar No</label>
			<div class="col-sm-4">
			  <input type="text" name="vochar_no" class="form-control" id="inputEmail3" placeholder="EnterVochar No">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Category select</label>
				<div class="col-sm-10">
					<label class="checkbox-inline">
					  <input type="checkbox" name="credit_category" id="inlineCheckbox1" value="COMPANY"> COMPANY
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" name="credit_category" id="inlineCheckbox2" value="FLATSALE"> FLATSALE
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" name="credit_category" id="inlineCheckbox3" value="INVESTORS"> INVESTORS
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox" name="credit_category" id="inlineCheckbox3" value="COMPANY WONAR"> COMPANY WONAR
					</label>
					<label class="checkbox-inline">
					  <input type="checkbox"name="credit_category"  id="inlineCheckbox3" value="OTHERS"> OTHERS
					</label>
				</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
			<textarea class="form-control" name="description" id="" cols="30" rows="3" placeholder="Enter Description"></textarea>
			</div>
		  </div>
		  
		  
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label"> Amount</label>
			<div class="col-sm-10">
			  <input type="text" name="amount" class="form-control" id="inputPassword3" placeholder=" Enter Total Amount">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Payment</label>
			<div class="col-sm-10">
			  <input type="text" name="payment" class="form-control" id="inputPassword3" placeholder=" Enter Payment">
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
  </section>

	</div>
	</div>