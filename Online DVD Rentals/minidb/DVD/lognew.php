<doctype html>
<?php
/*	session_start();
	$host="localhost";
	$user="root";
	$pass="";
	$db="dvr1";
	mysqli_connect($host,$user,$pass,$db);
	mysqli_select_db($db);
	if(isset($_POST['username']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql= "SELECT * FROM register WHERE username='".$username."'AND password='".$password."'LIMIT 1";
		$res=mysqli_query($sql);
		if(mysqli_num_rows($res)==1)
		{
			echo "<script> alert('you have successfully logged in')</script>";
			$_SESSION["username"]=$_POST['username'];
			header('Location:index.php');
		}else
		{
			echo "<script> alert('invalid login')</script>";
		}
	}
*/?>
<html>
<head>
<title>
Rental
</title>
</head>
<style>
body{
background-image : url("r22.jpg");
}
</style>
<body align="center">
	<div class="div1">
			<img src="rent.jpg">
			<form method="post" action="">
				<div class="input-form">
					<br/><input type="text" name="username" placeholder="Enter Username" required>
				</div>
				<div class="input-form">
					<input type="password"name="password" placeholder="Enter Password" required>
				</div>
				<div id="keep">
					<br/><input type="checkbox" name="login" value="check">Keep me logged In<br>
				</div>
				<div id="reg">
					<pre><input type="submit" name="login" value="Login" class="submit1" size="20">  <a href="signup.php"><input type="button" name="register" value="Register" class="submit1" size="20" maxlength="8"></a></pre>
				</div>
			</form>
	</div>
</body>
</html>
