<!DOCTYPE html>
<html>
<head>
	<title>User sign in: </title>
	<link rel="stylesheet" type="text/css" href="user_sign_in.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.0">
</head>
	<body>
		<h2 id="Sign_in"><i><strong>SIGN IN:</strong></i></h2>

		<form  method="post">

			<label for="U_id_label">User ID: </label>&emsp;
			<input type="text" id="U_id" name="U_id" class="U_id" style="background-color:grey"><br><br>

			<label for="F_name_label">First name: </label>&emsp;
			<input type="text" id="F_name" name="F_name" class="F_name" style="background-color:grey"><br><br>

			<label for="L_name_label">Last name: </label>&emsp;
			<input type="text" id="L_name" name="L_name" class="L_name" style="background-color:grey"><br><br>

			<label for="Email_label">Email: </label>&emsp;
			<input type="text" id="Email" name="Email" class="Email" style="background-color:grey"><br><br>

			<label for="Password_label">Password: </label>&emsp;
			<input type="Password" id="Password" name="Password" class="Password" style="background-color:grey"><br><br>

			<label for="Role_label">Role: </label>&emsp;
			<input type="text" id="Role" name="Role" class="Role" style="background-color:grey"><br><br>

			<label for="Emergency_label">Emergency: </label>&emsp;
			<input type="text" id="Emergency" name="Emergency" class="Emergency" style="background-color:grey"><br><br>

			<label for="Emergency_id_label">Emergency ID: </label>&emsp;
			<input type="text" id="Emergency_id" name="Emergency_id" class="Emergency_id" style="background-color:grey"><br><br>

			<input type="submit" value="Sign in" class="submission">
		</form>
		<?php
			$U_id=0;
			$F_name=0;
			$L_name=0;
			$Email=0;
			$Password=0;
			$Role=0;
			$Emergency=0;
			$Emergency_id=0;
			$con=mysqli_connect("localhost","root","","hospital_db");
			/*if($con)
			{
				echo "<Br>The connection is made";
			}
			else
			{
				echo "<Br>The connection is NOT made";	
			}*/
			if (isset($_POST['U_id'])) 
			{
				$U_id=$_POST['U_id'];
				//echo $U_id;
				//echo "<br>";
			}
			if (isset($_POST['F_name'])) 
			{
				$F_name=$_POST['F_name'];
				//echo $F_name;
				//echo "<br>";
			}
			if (isset($_POST['L_name'])) 
			{
				$L_name=$_POST['L_name'];
				//echo $L_name;
				//echo "<br>";
			}
			if (isset($_POST['Email'])) 
			{
				$Email=$_POST['Email'];
				//echo $Email;
				//echo "<br>";
			}
			if (isset($_POST['Password']))
			{
				$Password=$_POST['Password'];
				//echo $Password;
				//echo "<br>";
			}
			if (isset($_POST['Role'])) 
			{
				$Role=$_POST['Role'];
				//echo $Role;
				//echo "<br>";
			}
			if (isset($_POST['Emergency'])) 
			{
				$Emergency=$_POST['Emergency'];
				//echo $Emergency;
				echo "<br>";
			}
			if (isset($_POST['Emergency_id'])) 
			{
				$Emergency_id=$_POST['Emergency_id'];
				//echo $Emergency_id;
				echo "<br>";
			}
			$sql="INSERT INTO user VALUES('$U_id','$F_name','$L_name','$Email','$Password','$Role','$Emergency','$Emergency_id')";
			$rs=mysqli_query($con, $sql);
			/*if($rs)
			{
				echo "<br> Singin successful!!.";
			}
			else
			{
				echo "<br> Singin is not yet successful!!.";
			}*/
		?>
	</body>
</html>