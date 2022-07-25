<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="user_login.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<title>Hospital database: </title>
</head>
	<body>
		<div class="navigation">
			<nav>
				<div class="w3-top">
					<div class="w3-bar">
						<a href="#Introduction">Introduction</a>
						&emsp;&emsp;&emsp;
						<a href="#Login">Login</a>
						&emsp;&emsp;&emsp;
						<a href="#Contact">Contact</a>
						&emsp;&emsp;&emsp;
					</div>
				</div>
			</nav>
		</div>
		<div id="Introduction" class="Introduction">
			<h1><bold>Introduction:</bold></h1>
			<p style="font-family: cursive;"><bold>
				Welcome to this makeshift hospital database our team has made. We have implemented this so 
				<br><br>that this would have a potential in decreasing the time needed for emergency cases in contacting nearby cities, which can possibly save a life.
				<br><br>Modules for Patients, Doctors and also Pharmacists have been added as a start, to show how the users with different roles can access
				<br><br> the information. So hoping that this would be of some help to the people out there, you may proceed to login using the interface below.
				<br><br>Suppose you do not have an accoutn already, you can also sign in so that you can be a part of the family. =)
			</bold></p>
		</div>
		<div id="Login" class="Login">
			<h1><bold>User Login:</bold></h1>
			<div class="Login_form">
				<form method="post">
					<label for="U_id">User ID: </label>
					<input type="text" name="U_id" class="U_id">
					<br><br>
					<label for="Email">Email ID: </label>
					<input type="text" name="Email" class="Email">
					<br><br>
					<label for="Password">Password: </label>
					<input type="password" name="Password" class="Password">
					<br><br>
					<input type="submit" name="submit" value="submit">
					<br><br>
				</form>
			</div>
		</div>
		<?php
		$U_id=0;
		$Email=0;
		$Password=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
			{
				echo "The connection is made<Br>";
			}
			else
			{
				echo "The connection is not yet made<Br>";	
			}*/
			if (isset($_POST['U_id'])) 
			{
				$U_id=$_POST['U_id'];
				//echo $U_id;
				echo "<br>";
			}
			if (isset($_POST['Email'])) 
			{
				$Email=$_POST['Email'];
				//echo $Email;
				echo "<br>";
			}
			if (isset($_POST['Password'])) 
			{
				$Password=$_POST['Password'];
				//echo $Password;
				echo "<br>";
			}
			$result=mysqli_query($con,"SELECT * FROM user WHERE U_id='$U_id' AND Email='$Email' AND Password='$Password'");
			$rs=mysqli_fetch_array($result);
			if(isset($rs))
			{
				echo "<br>The values are there in the database. Login successful!";
				//sleep(2);
				//$emergency=mysqli_query($con,"SELECT * FROM user WHERE U_id='$U_id' AND Email='$Email' AND Password='$Password'");
				//$Emergency_check=mysqli_fetch_array($emergency);
				/*while ($emergency_check=mysqli_fetch_array($emergency,MYSQLI_ASSOC)) 
				{
					if($emergency_check['Emergency']="yes")
					{
						echo "<br>Emergency: {$emergency_check['Emergency']}, U_id: {$emergency_check['U_id']}";
						echo "<br>It is an Emergency case.";
					}
					else
					{
						echo "<br>It is NOT an Emergency case.";
					}
				}*/
				//$emergency_check=mysqli_fetch_row($emergency);
				if($rs['Emergency']=="yes")
				{
					echo "<br> F_name: {$rs['F_name']}, Emergency: {$rs['Emergency']}";
					echo "<br>It is an Emergency case";
					header('Location: http://localhost/project/user/Emergency.php');	
				}
				else
				{
					echo "<br>It is NOT an Emergency case";
					sleep(3);
					if($rs['Role']=="Doctor")
					{
						echo "<br> F_name: {$rs['F_name']}, Role(Doctor): {$rs['Role']}";
						header('Location: http://localhost/project/doctor/doctor_login.php');
					}
					else if($rs['Role']=="Patient")
					{
						echo "<br> F_name: {$rs['F_name']}, Role(patient): {$rs['Role']}";
						header('Location: http://localhost/project/patient/patient_login.php');
					}
					else if($rs['Role']=="Pharmacist")
					{
						echo "<br> F_name: {$rs['F_name']}, Role: {$rs['Role']}";
						header('Location: http://localhost/project/pharmacist/pharmacist_login.php');
					}
				}
			}
			mysqli_close($con);
		?>
		<div id="Sign_up">
			<form id="Sign_up" action="http://localhost/project/user/user_sign_in.php">
				<input type="submit" name="Sign_up" value="Sign in">
			</form>
		</div>
		<Br><Br><Br>
		<div id="Contact" class="Contact">
			<h1><bold>Contact:</bold></h1>
			Contace no: +91 XXXXXXXXXX,+91 YYYYYYYYYY,+91 ZZZZZZZZZZ
			<br><a href="https://www.instagram.com/christintkunjumon/"></Bold>Instagram</Bold></a>
			<br><a href="https://www.facebook.com/MasashiKishimotoManga/"></Bold>Facebook</Bold></a>
		</div>
	</body>
</html>