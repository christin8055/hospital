<html>
	<head>
		<TITLE>Hospital</TITLE>
		<meta name="viewport" content="width=device-width, initial-scale=0.0">
		<link rel="stylesheet" type="text/css" href="Emergency.css">
	</head>
	<body >
		<div class="bg_image">
		<div>
			<form action="" method="post">
				<label for="City_info"><br>Please your user id: </label>
				<input type="text" name="u_id" placeholder="Search" class="u_id">
				<label for="City_info"><br>Please enter the city: </label>
				<input type="text" name="city_name" placeholder="Search" class="city_enter">
				<button type="submit" name="submit">Search</button>
			</form>
		</div>
		<div id="Emergency_info">
			<div id="DB_Connection">
				<?php
					$con=mysqli_connect('localhost','root','','hospital_db');
					/*if($con)
					{
						echo "NOTE: The Database has been connected.<br>";
					}
					else
					{
						echo "NOTE: The Database has NOT been connected.<br>";
					}*/
				?>
			</div>
			<!--<h1>
				<Br>Patient information:  <Br>
			</h1>-->
			<div id="Emergency_Patients_list">
				<?php
					$U_id=0;
					if(isset($_POST['u_id'])) 
					{
						$U_id=$_POST['u_id'];
						//echo $City;
					}
					$rs=mysqli_query($con,"SELECT U_id,F_name,L_name,Emergency_id FROM user WHERE U_id='$U_id'");
					if($rs)
					{
						echo "<h1>Patient information: </h1>";
					}
					else
					{
						//echo "NOTE: The patient information has NOT been retrieved.<br>";
					}

					while ($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)) 
					{
						echo "User ID :{$row['U_id']}  <br> "."User First NAME : {$row['F_name']} <br> "."User last SALARY : {$row['L_name']} <br> "."User emergency id : {$row['Emergency_id']} <br> "."--------------------------------<br>";
					}
				?>
			</div>
			<h1>
				<Br>The list of all the Hospitals in the same city as enterd: <Br>
			</h1>
			<div id="Hospital_in_same_city">
				<?php
					$City=0;
					if(isset($_POST['city_name'])) 
					{
						$City=$_POST['city_name'];
						//echo $City;
					}
					$rs1=mysqli_query($con,"SELECT H_id,City,Speciality,Ranking,contact_no FROM hospital WHERE City='$City'");
					if($rs1)
					{
						//echo "The Hospital has been found<br>";
					}
					else
					{
						//echo "The Hospital has NOT been found<br>";
					}
					while ($row1=mysqli_fetch_array($rs1,MYSQLI_ASSOC)) 
					{
						echo "Hospital id: " . $row1['H_id']. "<br>City: " . $row1['City']. " <br>Speciality: " . $row1['Speciality']. "<br>Ranking: " . $row1['Ranking']."<br>contact number: " . $row1['contact_no']."<br>--------------------------------<br>";
					}
				?>
			</div>
			
		</div>
		</div>
	</body>
</html>