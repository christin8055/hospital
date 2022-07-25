<!DOCTYPE html>
<html>
<head>
	<title>PHARMACIST: </title>
	<link rel="stylesheet" type="text/css" href="pharmacist_login.css">
</head>
<body>
	<h1>Pharmacist: </h1>
	<form>
		<label for="order_id">Order id: </label>
		<input type="text" name="Order_id" id="Order_id" class="Order_id">
	
		<br><Br>
		
		<input type="submit" name="submit" value="Search">
		<br><br>
	</form>
	<h2 style="font-family: cursive;"><br>Order Details:</h2>
	<p style="font-family: cursive;">
	<?php
		$Order_id=0;
		$con=mysqli_connect("localhost","root","","hospital_db");
		/*if($con)
		{
			echo "The connection is made<Br>";
		}
		else
		{
			echo "The connection is NOT made<Br>";	
		}*/
		if(isset($_GET['Order_id']))
		{
			$Order_id=$_GET['Order_id'];
		}
		
		$result=mysqli_query($con,"SELECT * FROM pharmacist WHERE order_id='$Order_id' ");
		$rs=mysqli_fetch_array($result);
		if(isset($rs))
		{
			echo "<br>Date: ";
			echo $rs['date'];
			echo "<br>Time: ";
			echo $rs['Time'];
			echo "<br>Amount: ";
			echo $rs['Amt'];
			echo "<br>Medicine: ";
			echo $rs['Medicine_name'];
			
		}
		else
		{
			//echo "<br><br>No values from the databse accessed yet..........!";
		}
	?>
	</p>
</body>
</html>