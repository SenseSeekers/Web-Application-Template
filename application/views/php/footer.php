
<div class="" style="text-align:center; color:#fff;background:#1B2A47;padding: 10px;">copy &copy;2019 AIMS__365 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url();?>js/jquery.dataTables.js"></script>
<div id="chartContainer" style="height:00px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	
<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<script>
$(document).ready( function () {
    $('#mytableId').DataTable();
} );
</script>

<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<script>
$(document).ready( function () {
    $('#mytableId1').DataTable();
} );
</script>

<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<script>
	function total_amount()
	{
	        num1 = document.getElementById("unit_price").value;
	        num2 = document.getElementById("quantity").value;
	        document.getElementById("total_amount").innerHTML = num1 * num2;
	}
	function due()
			{
        num1 = document.getElementById("unit_price").value;
        num2 = document.getElementById("quantity").value;
        num3 = document.getElementById("payment").value;
		
		var a = parseInt(num1)
		var b = parseInt(num2)
		var c = parseInt(num3); 	
		
		var y = ((a*b)-c); 
		
        document.getElementById("due").innerHTML = y;
}	
</script>

<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->
<!-------------------------------------------------------------------------------------------------------------->

  </body>
</html>