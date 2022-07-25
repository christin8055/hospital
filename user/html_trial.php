<html>
	<head>
		<title>User login</title>
		<link rel="stylesheet" type="text/css" href="userpage.css">
		<meta name="viewport" content="width=device-width, initial-scale=0.0">
	</head>
	<body >
		<br><br><br>   
		<div class="navigation" id="navig">
			<nav>
				<p>
					&emsp;&emsp;&emsp;
					<a href="#Introduction"><i>Introduction:</i></a>
					&emsp;&emsp;&emsp;
					<a href="#Login"><i>Login:</i></a>
					&emsp;&emsp;&emsp;
					<a href="#Contact_info"><i>Contact information:</i></a>
					&emsp;&emsp;&emsp;
					<a href="#About_us"><i>About us:</i></a>
				</p>
			</nav>
		</div>

		<h2 id="Introduction"><i><strong>Introduction:</strong></i></h2>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<h2 id="Login"><i><strong>LOGIN:</strong></i></h2>

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

			<input type="submit" value="submit" class="submission">
			</form>
		
			<?php
				/*$U_id=$_POST['U_id'];
				$F_name=$_POST['F_name'];
				$L_name=$_POST['L_name'];
				$Email=$_POST['Email'];
				$Password=$_POST['Password'];
				$Role=$_POST['Role'];
				$Emergency=$_POST['Emergency'];
				$Emergency_id=$_POST['Emergency_id'];
				$U_id = isset($U_id) ? $U_id : '';
				$F_name = isset($F_name) ? $F_name : '';
				$L_name = isset($L_name) ? $L_name : '';
				$Email = isset($Email) ? $Email : '';
				$Password = isset($Password) ? $Password : '';
				$Role = isset($Role) ? $Role : '';
				$Emergency = isset($Emergency) ? $Emergency : '';
				$Emergency_id = isset($Emergency_id) ? $Emergency_id : '';
				$sql="INSERT INTO 'user' ('U_id','F_name','L_name','Email','Password','Role','Emergency','Emergency_id') VALUES ('$U_id','$F_name','$L_name','$Email','$Password','$Role','$Emergency','$Emergency_id')";
				$rs=mysqli_query($con,$sql);*/
				$Server="localhost";
				$con=mysqli_connect($Server,'root','','hospital_db');
				if($con)
				{
					echo "<br>The Database is connected.<br>";
				}
				if (isset($_POST['U_id'])) 
				{
					$U_id=$_POST['U_id'];
					echo $U_id;
				}
				if (isset($_POST['F_name'])) 
				{
					$F_name=$_POST['F_name'];
					echo $F_name;
				}
				if (isset($_POST['L_name'])) 
				{
					$L_name=$_POST['L_name'];
					echo $L_name;
				}
				if (isset($_POST['Email'])) 
				{
					$Email=$_POST['Email'];
					echo $Email;
				}
				if (isset($_POST['Password']))
				{
					$Password=$_POST['Password'];
					echo $Password;
				}
				if (isset($_POST['Role'])) 
				{
					$Role=$_POST['Role'];
					echo $Role;
				}
				if (isset($_POST['Emergency'])) 
				{
					$Emergency=$_POST['Emergency'];
					echo $Emergency;
				}
				if (isset($_POST['Emergency_id'])) 
				{
					$Emergency_id=$_POST['Emergency_id'];
					echo $Emergency_id;
				}
				$sql1="INSERT INTO 'user' ('U_id','F_name','L_name','Email','Password','Role','Emergency','Emergency_id')  VALUES ('$U_id','$F_name','$L_name','$Email','$Password','$Role','$Emergency','$Emergency_id')";
				$sql2="SELECT * FROM user";
				if($Emergency="yes")
				{
					echo "<br> The emergency status is: YES";
					exec('http://localhost/project/user/Emergency.php');
				}
				/*if($result=mysqli_query($con,"SELECT F_name FROM user WHERE Emergency='yes'"))
				{
					echo mysqli_fetch($result);
				}
				$rs=mysqli_query($con,$sql1);
				if($rs)
				{
					echo "The data values have been inserted";
				}*/
				/*$rs=mysqli_query($con,"SELECT F_name FROM user WHERE Emergency='yes'");
				$row=mysqli_fetch_assoc($rs);
				echo "The value is: $row";*/
				$rs=mysqli_query($con,$sql1);
				if($rs)
				{
					echo " The data have been entered. ";
				}
				mysqli_close($con);
			?>
		<form method="Emergency.php">
			<input type="submit" value="Emergency" class="Emergency_submission">
		</form>	

		<h2 id="Contact_info"><i><strong>Contact information:</strong></i></h2>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

		<h2 id="About_us"><i><strong>About us: </strong></i></h2>
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
	</body>
</html>