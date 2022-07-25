<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="doctor_module.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Doctor </title>
</head>
	<body>
    <div class="navigation">
			<nav>
				<div class="w3-top">
					<div class="w3-bar">
						<a href="#prescription">Prescription</a>
						&emsp;&emsp;&emsp;
						<a href="#booked">Booked</a>
						&emsp;&emsp;&emsp;
						<a href="#previous records">Previous records</a>
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
		<h3 style="font-family: cursive;"><bold>The prescription details are:</bold></h3>
		<?php
			$P_id=0;
			$D_id=0;
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
				$P_id=$_POST['P_id'];
				//echo $P_id;
			}
			if (isset($_POST['D_id']))
            {
                $D_id=$_POST['D_id'];
                //echo $D_id;
            
            }

			$result=mysqli_query($con,"SELECT * FROM patient_to_pharmacist WHERE P_id='$P_id' AND D_id='$D_id'");
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
            	//echo "The data from the database has not yet been accessed..........!";
            }
        ?>
            <div id="Booked" class="booked">
			<h1><bold>booked:</bold></h1>
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
		<h3 style="font-family: cursive;"><bold>Booked appointment details: </bold></h3>
		<?php
			$P_id=0;
			$D_id=0;
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
				$P_id=$_POST['P_id'];
				//echo $P_id;
			}
			if (isset($_POST['D_id']))
            {
                $D_id=$_POST['D_id'];
                //echo $D_id;

            }

			$result=mysqli_query($con,"SELECT * FROM patient_to_appoitnemnt WHERE P_id='$P_id' AND D_id='$D_id'");
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
            	//echo "The data from the database has not yet been accessed..........!";
            }
        ?>
            <div id="Previous record" class="prescription">
			<h1><bold>Previous record:</bold></h1>
            <div class="previous record_form">
				<form method="post">
					<label for="P_id">Patient ID: </label>
					<input type="text" name="P_id" class="P_id">
					<br><br>
					<label for="H_id">Hospital ID: </label>
					<input type="text" name="H_id" class="H_id">
					<br><br>
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<h3 style="font-family: cursive; "><bold>The Previous record details are: </bold></h3>
		<?php
			$P_id=0;
			$H_id=0;
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
				$P_id=$_POST['P_id'];
				//echo $P_id;
			}
			if (isset($_POST['H_id']))
            {
                $H_id=$_POST['H_id'];
                //echo $H_id;
            }
            
			$result=mysqli_query($con,"SELECT * FROM patient_to_prev_records WHERE P_id='$P_id' AND H_id='$H_id'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<br>Record ID: ";
				echo $rs['Record_id'];
				echo "<br>Patient ID: ";
				echo $rs['P_id'];
				echo "<br>Patient name: ";
				echo $rs['P_name'];
				echo "<br>Doctor ID: ";
				echo $rs['D_id'];
				echo "<br>Doctor name: ";
				echo $rs['D_name'];
				echo "<br>Hospital ID: ";
				echo $rs['H_id'];
				echo "<br>Hospital contact number: ";
				echo $rs['H_ph_no'];
				echo "<br>Record details: ";
				echo $rs['Record_details'];
				echo "<br>Record date: ";
				echo $rs['Record_Date'];
            }
            else
            {
            	//echo "The data from the database has not yet been accessed..........!";
            }
        ?>
    </body>
</html>