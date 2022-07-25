<!DOCTYPE html>
<html>
<head>
	<title>Patient login: </title>
	<link rel="stylesheet" type="text/css" href="patient_login.css">
</head>
<body>
	<h1>Patient login: </h1>
	<form>
		<label for="P_id">P_id: </label>
		<input type="text" name="P_id" id="P_id" class="P_id">
		<br><Br>
		<label for="Email">Email: </label>
		<input type="text" name="Email" id="Email" class="P_id">
		<br><br>
		<label for="Password">Password: </label>
		<input type="password" name="Password" id="password" class="P_id">
		<br><br>
		<input type="submit" name="submit" value="Login">
		<br><br>
	</form>
	<?php
		$P_id=0;
		$Email=0;
		$Password=0;
		$con=mysqli_connect("localhost","root","","hospital_db");
		/*if($con)
		{
			echo "The connection is made<Br>";
		}
		else
		{
			echo "The connection is NOT made<Br>";	
		}*/
		if(isset($_GET['P_id']))
		{
			$P_id=$_GET['P_id'];
			//echo $P_id;
			echo "<br>";
		}
		if(isset($_GET['Email']))
		{
			$Email=$_GET['Email'];
			//echo $Email;
			echo "<br>";
		}
		if(isset($_GET['Password']))
		{
			$Password=$_GET['Password'];
			//echo $Password;
			echo "<br>";
		}
		$result=mysqli_query($con,"SELECT * FROM patient WHERE P_id='$P_id' AND Email='$Email' AND Password='$Password'");
		$rs=mysqli_fetch_array($result);
		if(isset($rs))
		{
			echo "<br><br>Login successful";
			header('Location: http://localhost/project/patient/patient_module.php');
		}
		else
		{
			//echo "<br><br>Login not yet successful";
		}
	?>
</body>
</html>