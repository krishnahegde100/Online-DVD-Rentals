<?php
/*	$con=mysqli_connect("localhost","root","","dvr1");
	mysql_select_db("dvr1");
	if(isset($_POST['Register']))
	{
		$username=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$repassword=$_POST['repassword'];
		if($password!=$repassword)
		{
			echo "<script> alert('password didnt match'); </script>";
		}
		else 
		{
			$statement="insert into register(username,email,password) values('$username','$email','$password')";
			$res=mysqli_query($con,$statement);
			header('Location: login.php');
		}
	}
*/?>
<html>
<head>
<title> registration form </title>
<style>
body{
background-image : url("r22.jpg");
}
</style>
<link rel="stylesheet" href="login2.css" />
</head>
<body align="center">
				     
		<div class="div1">
			<br/><br/><br/>
			<form method="post" action="">
				<div class="input-form">
					<input type="text" name="username" placeholder="Enter Username" required>
				</div><br/>
				<div class="input-form">
					<input type="text" name="email" placeholder="Enter Email" required pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}.">
				</div><br/>
				<div class="input-form">
					<input type="password"name="password" placeholder="Enter Password" required>
				</div>
				<div class="input-form">
					<input type="password"name="repassword" placeholder="confirm Password" required>
				</div><br/>
				<div id="reg">
					<input type="submit" name="Register" value="Register" class="submit1" size="20">
				</div>
			</form>
	</div>
</div>
</body>
</html>
