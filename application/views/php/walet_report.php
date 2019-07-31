  <!------------------------------------------------>
  <!--------------add accounce --------------------->
  <!------------------------------------------------>
  
  <section class="col-md-12" style="background:#fff;min-height:592px;">
	<div class=" col-md-6 Report_item">Report List</div>
	<div class=" col-md-6 Report_item text-right"><p>Total:<?php echo $total_expense->payment;?></p></div>
				
		
	  <table border="1" id="mytableId1" class="display">
		<thead>
			<tr>
			<tr>
				<th>Date</th>
				<th>voucher No</th>
				<th>Project</th>
				<th>category</th>
				<th>Description</th>
				<th>Quantity</th>
				<th>Unit price</th>
				<th>Amount</th>
				<th>Payment</th>
				<th>Due</th>
			</tr>
			</tr>
		</thead>
		
		<tbody>
		
		<?php
			foreach ($walet_report as $reports){
		?>

			<tr>
				<td><?php echo $reports->vouchar_date;?></td>
				<td><?php echo $reports->vouchar_no;?></td>
				<td>
					<?php  
						$cat = $this->Walet_model->getallprojectByid($reports->project_id);
						echo $cat->project_name;
					?>

				</td>
				<td>
					<?php  
						$cat = $this->Walet_model->getcategoryByid($reports->service_cat_id);
						echo $cat->category_name;
					?>

				</td>
				<td><?php echo $reports->description;?></td>
				<td><?php echo $reports->quantity;?></td>
				<td><?php echo $reports->unit_price;?></td>
				<td><?php echo $reports->total_amount;?></td>
				<td><?php echo $reports->payment;?></td>
				<td><?php echo $reports->due;?></td>
				
			</tr>	
			
		<?php 
			}
		?>
		
		</tbody>
	  </table>
</section>
 <br/>
 <br/>
  <!--------------------------------------------->
  <!--------------------------------------------->