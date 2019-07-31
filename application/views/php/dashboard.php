

<div class="col-md-9 " style="">
	
	<div class="col-md-6" style="margin-top:100px;">
 
		<script>

		window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			theme: "light2", // "light1", "light2", "dark1", "dark2"
			title:{
				text: "Walet Acc"
			},
			axisY: {
				title: "Bar chart"
			},
			data: [{        
				type: "column",  
				showInLegend: true, 
				legendMarkerColor: "grey",
				legendText: "Bar chart ",
				dataPoints: [      
					{ y:<?php echo $total_deposit->payment;?>, label: "Deposit" },
					{ y: <?php echo $total_expense->payment;?>,  label: "Expense" }
				]
			}]
		});
		chart.render();

		}
		</script>
		<div id="chartContainer" style="height: 370px; max-width: 600px; margin: 0px auto;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		
</div>

<!------------------------------------------------------------------------------------------>
<!----------------------------------------------------------------------------------------
	<div class="col-md-4" style="margin-top:60px;  text-align: center;">

<h4>Project chart</h4>
<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  <?php
  	foreach($Project as $projects) {
  	?>

  ['<?php echo $projects->project_name;?>',

  <?php 
  $pid = $projects->id;
  echo $pid;
 // $pro = $this->Walet_model->getprojectDeposit($pid);

  ?>],

//
  	<?php
  	}
  ?>
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'My Average Day', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>.
	</div>-->
</div>
</div>
