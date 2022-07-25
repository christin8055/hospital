<!DOCTYPE html>
<html>
<head>
	<title>Doctor login: </title>
	<link rel="stylesheet" type="text/css" href="doctor_login.css">
</head>
<body>
	<h1>Doctor login: </h1>
	<form>
		<label for="D_id">D_id: </label>
		<input type="text" name="D_id" id="D_id" class="D_id">
		<br><Br>
		<label for="Email">Email: </label>
		<input type="text" name="Email" id="Email" class="D_id">
		<br><br>
		<label for="Password">Password: </label>
		<input type="password" name="Password" id="password" class="D_id">
		<br><br>
		<input type="submit" name="submit" value="Login">
		<br><br>
	</form>
	<?php
		$D_id=0;
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
		if(isset($_GET['D_id']))
		{
			$D_id=$_GET['D_id'];
			echo $D_id;
			echo "<br>";
		}
		if(isset($_GET['Email']))
		{
			$Email=$_GET['Email'];
			echo $Email;
			echo "<br>";
		}
		if(isset($_GET['Password']))
		{
			$Password=$_GET['Password'];
			echo $Password;
			echo "<br>";
		}
		$result=mysqli_query($con,"SELECT * FROM doctor WHERE D_id='$D_id' AND Email='$Email' AND Password='$Password'");
		$rs=mysqli_fetch_array($result);
		if(isset($rs))
		{
			//echo "<br><br>Login successful";
			header('Location: http://localhost/project/doctor/doctor_module.php');
		}
		else
		{
			//echo "<br><br>Login not yet successfully completed.......!";
		}
	?>
</body>
</html>