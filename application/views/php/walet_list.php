   <!--------------------------------------------->
   <!--------------------------------------------->
   <!---------List accounce -- ------------------->
  <section class="col-md-12"style="background:#fff;min-height:600px;"> 
	<div class="col-md-5"> 
	  <div class=" col-md-12 accounce" >Receiver List</div>
		  <table border='.5' id="mytableId1" class="display">
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
	  
  <!--------------------------------------------->
  <!--------------------------------------------->
  <div class="col-md-7" style="margin-bottom:60px;"> 
	<div class=" col-md-12 accounce" >Expeaditure List</div>
	  <table border='.5' id="mytableId" class="display">
		<thead>
			<tr>
				<th>Date</th>
				<th>voucher No</th>
				<th>category</th>
				<th>Description</th>
				<th>Unit price</th>
				<th>Amount</th>
				<th>Payment</th>
				<th>Due</th>
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
						$cat = $this->Walet_model->getcategoryByid($expeaditures->service_cat_id);
						echo $cat->category_name;
					?>

				</td>

				<td><?php echo $expeaditures->description;?></td>
				<td><?php echo $expeaditures->unit_price ;?>&nbsp;&nbsp;*&nbsp;&nbsp;<?php echo $expeaditures->quantity;?></td>
				<td><?php echo $expeaditures->total_amount;?></td>
				<td><?php echo $expeaditures->payment;?></td>
				<td><?php echo $expeaditures->due;?></td>
			</tr>
		</tbody>

			<?php 
			}
		?>
	  </table>
  </div>
  <!--------------------------------------------->
<div class="col-md-12">
	<div class=" col-md-4 accounce" >Receiver :<?php echo $total_deposit->payment;?></div>
	<div class=" col-md-4 accounce" >Expeaditure :<?php echo $total_expense->payment;?></div>
	<div class=" col-md-4 accounce" >total : <?php echo ($total_deposit->payment-$total_expense->payment);?></div>
 </div>
  <!--------------------------------------------->

  <br/>
  <br/>
  <br/>
  
  </section>