<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="patient_module.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Patient </title>
</head>
	<body>
    <div class="navigation">
			<nav>
				<div class="w3-top">
					<div class="w3-bar">
						<a href="#prescription">prescription</a>
						&emsp;&emsp;&emsp;
						<a href="#booked">booked</a>
						&emsp;&emsp;&emsp;
						<a href="#consulted_by">consulted_by</a>
						&emsp;&emsp;&emsp;
                        <a href="#insurance">insurance</a>
						&emsp;&emsp;&emsp;
					</div>
				</div>
			</nav>
		</div>
		<div id="prescription" class="prescription">
			<h1><bold>Prescription:</bold></h1>
            <div class="presription_form">
				<form method="post">
					<label for="P_id">Patient ID: </label>
					<input type="text" name="P_id" class="P_id">
					<br><br>
					<label for="D_id">Doctor ID: </label>
					<input type="text" name="D_id" class="D_id">
					<br><br>
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<p style="text-align: right;">
		<h3 style="font-family: cursive;"><bold>The prescription details are:</bold></h3>
		<?php
			$P_id_1=0;
			$D_id_1=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
            {
				echo "The connection is made<Br>";
			}
			else
			{
				echo "The connection is NOT made<Br>";	
			}*/
			if (isset($_POST['P_id'])) 
			{
				$P_id_1=$_POST['P_id'];
				//echo $P_id;
				echo "<br>";
			}
			if (isset($_POST['D_id']))
            {
                $D_id_1=$_POST['D_id'];
                //echo $D_id;
				echo "<br>";
            
            }

			$result=mysqli_query($con,"SELECT * FROM patient_to_pharmacist WHERE P_id='$P_id_1' AND D_id='$D_id_1'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<br>Order id: ";
				echo $rs['Order_id'];
				echo "<br>Patient id: ";
				echo $rs['P_id'];
				echo "<br>Doctor id: ";
				echo $rs['D_id'];
				echo "<br>Patient name: ";
				echo $rs['P_name'];
				echo "<br>Doctor name: ";
				echo $rs['D_name'];
				echo "<br>Order date: ";
				echo $rs['date'];
				echo "<br>Order time: ";
				echo $rs['Time'];
				echo "<br>Order amount: ";
				echo $rs['Amt'];
				echo "<br>Ordered medicines: ";
				echo $rs['Medicine_name'];
            }
            else
            {
            	echo "The values have not yet been accessed from the database........!";
            }
        ?></p>
            <div id="booked" class="booked">
			<h1><bold>Booked:</bold></h1>
            <div class="booked_form">
				<form method="post">
					<label for="P_id">Patient ID: </label>
					<input type="text" name="P_id" class="P_id">
					<br><br>
					<label for="D_id">Doctor ID: </label>
					<input type="text" name="D_id" class="D_id">
					<br><br>
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<h3 style="font-family: cursive;"><bold>Appointment details: 
			</bold></h3>
		<?php
			$P_id_2=0;
			$D_id_2=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
            {
				echo "The connection is made<Br>";
			}
			else
			{
				echo "The connection is NOT made<Br>";	
			}*/
			if (isset($_POST['P_id'])) 
			{
				$P_id_2=$_POST['P_id'];
				//echo $P_id;
				echo "<br>";
			}
			if (isset($_POST['D_id']))
            {
                $D_id_2=$_POST['D_id'];
                //echo $D_id;
				echo "<br>";

            }

			$result=mysqli_query($con,"SELECT * FROM patient_to_appoitnemnt WHERE P_id='$P_id_2' AND D_id='$D_id_2'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<br>Apointment id: ";
				echo $rs['A_id'];
				echo "<br>Doctor id: ";
				echo $rs['D_id'];
				echo "<br>Patient ID: ";
				echo $rs['P_id'];
				echo "<br>Doctor name: ";
				echo $rs['D_name'];
				echo "<br>Patient name: ";
				echo $rs['P_name'];
				echo "<br>Pateitne age: ";
				echo $rs['Age'];
				echo "<br>Patient gender: ";
				echo $rs['Gender'];
				echo "<br>Patient phone number: ";
				echo $rs['Ph_no'];
				echo "<br>Apointment date: ";
				echo $rs['date'];
				echo "<br>Apointment time: ";
				echo $rs['Time'];
				echo "<br>Fee: ";
				echo $rs['Fee'];
				echo "<br>Apointment status: ";
				echo $rs['app_status'];
            }
            else
            {
            	//echo "The values have not yet been accessed from the database........!";
            }
        ?>    
            <div id="consulted_by" class="consulted_by">
			<h1><bold>Consulted by:</bold></h1>
            <div class="consulted_by_form">
				<form method="post">
					<label for="P_id">Patient ID: </label>
					<input type="text" name="P_id" class="P_id">
					<br><br>
					
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<h3 style="font-family: cursive;"><bold>Consultation details: </bold></h3>
		<?php
			$P_id_3=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
            {
				echo "The connection is made<Br>";
			}
			else
			{
				echo "The connection is NOT made<Br>";	
			}*/
			if (isset($_POST['P_id'])) 
			{
				$P_id_3=$_POST['P_id'];
				
				echo "<br>";
			}
			
            

			$result=mysqli_query($con,"SELECT * FROM patient_to_doctor WHERE P_id='$P_id_3'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<br>Doctor ID: ";
				echo $rs['D_id'];
				echo "<br>Patient ID: ";
				echo $rs['P_id'];
				echo "<br>Patient name: ";
				echo $rs['P_name'];
				echo "<br>Doctor name: ";
				echo $rs['D_name'];
				echo "<br>Doctor phone number: ";
				echo $rs['d_ph_no'];
				echo "<br>Doctor specialization: ";
				echo $rs['d_specl'];
            }
            else
            {
            	//echo "The values have not yet been accessed from the database........!";
            }
        ?>
        <div id="insurance" class="insurance">
			<h1><bold>Insurance:</bold></h1>
            <div class="insurance_form">
				<form method="post">
					<label for="P_id">Patient ID: </label>
					<input type="text" name="P_id" class="P_id">
					<br><br>
					
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<h3 style="font-family: cursive;"><bold>Insurance details: </bold></h3>
		<?php
			$P_id_4=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
            {
				echo "The connection is made<Br>";
			}
			else
			{
				echo "The connection is NOT made<Br>";	
			}*/
			if (isset($_POST['P_id'])) 
			{
				$P_id_4=$_POST['P_id'];
				
				echo "<br>";
			}
			
            

			$result=mysqli_query($con,"SELECT * FROM insurance WHERE P_id='$P_id_4'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<Br>Insurance id: ";
				echo $rs['I_id'];
				echo "<br>Expiry date: ";
				echo $rs['exp_date'];
				echo "<br>Amount: Rs.";
				echo $rs['amt'];
            }
            else
            {
            	//echo "The values have not yet been accessed from the database........!";
            }
        ?> 


    </body>
</html>