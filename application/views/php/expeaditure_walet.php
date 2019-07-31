
  <section class="col-md-12"style="background:#fff;height:580px;"> 
  <!--------------------------------------------->
  <!--------------------------------------------->
	<div class=" col-md-6 accounce" >Expeaditure List</div>
	<div class=" col-md-6 Report_item text-right"><p>Total:<?php echo $total_expense->payment;?></p></div>
	  <table border='.5' id="mytableId" class="display">
		<thead>
			<tr>
				<th>Date</th>
				<th>Voucher No</th>
				<th>Project</th>
				<th>category</th>
				<th>Description</th>
				<th>Unit price</th>
				<th>Amount</th>
				<th>Payment</th>
				<th>Due</th>
				<th>Action</th>
			</tr>
		</thead>
		<?php 
			foreach ($expeaditure as $expeaditures) {
			?>

		<tbody>
			<tr>
				<td><?php echo $expeaditures->vouchar_date;?></td>
				<td><?php echo $expeaditures->vouchar_no;?></td>

				<td>
					<?php  
						$cat = $this->Walet_model->getallprojectByid($expeaditures->project_id);
						echo $cat->project_name;
					?>
				</td>
				<td>
					<?php  
						$cat = $this->Walet_model->getcategoryByid($expeaditures->service_cat_id);
						echo $cat->category_name;
					?>

				</td>

				<td><?php echo $expeaditures->description;?></td>
				<td><?php echo $expeaditures->unit_price ;?>&nbsp;&nbsp;*&nbsp;&nbsp;<?php echo $expeaditures->quantity;?></td>
				<td><?php echo $expeaditures->total_amount;?></td>
				<td><?php echo $expeaditures->payment;?></td>
				<td><?php echo $expeaditures->due;?></td>
			
					<td>			
					  <div class="btn-group" role="group" aria-label="...">
					  <a href="<?php echo base_url('index.php/Dashboard/expeaditure_update/');?><?php echo $expeaditures->id;?>" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>

					  <a href="<?php echo base_url('index.php/expeaditures/UserDelete/');?><?php echo $expeaditures->id;?>" type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					 </div>
					 <!------------------------------------------------------------------------------------------------->
					<!------------------------------------------------------------------------------------------------->
					 <!-- Modal -->
					</td>	
			</tr>
		</tbody>

			<?php 
			}
		?>
	  </table>
  
  </section>