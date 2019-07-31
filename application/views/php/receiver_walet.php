   <!--------------------------------------------->
   <!--------------------------------------------->
   <!---------List accounce -- ------------------->
  <section class="col-md-12"style="background:#fff;height:585px;"> 
	
	  <div class=" col-md-6 accounce" >Receiver List</div>
	<div class=" col-md-6 Report_item text-right"><p>Total:<?php echo $total_deposit->payment;?></p></div>
				
		  <table border='.8' id="mytableId" class="display">
			<thead>
				<tr>
					<th>Date</th>
					<th>Category</th>
					<th>Description</th>
					<th>Amount</th>
					<th>Payment</th>
				</tr>
			</thead>
			<?php 
				foreach ($add_payment as $payment) {
			?>

			<tbody>
				<tr>
					<td><?php echo $payment->issue_date;?></td>
					<td><?php echo $payment->credit_category;?></td>
					<td><?php echo $payment->description;?></td>
					<td><?php echo $payment->amount;?></td>
					<td><?php echo $payment->payment;?></td>
				</tr>
			</tbody>
			<?php 
				}
			?>
		  </table>
	  </div>
	</section>
	  