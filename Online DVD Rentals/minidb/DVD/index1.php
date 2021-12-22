<!DOCTYPE html>
<?php
  session_start();
  
  // connect to database 
  $db=mysqli_connect("localhost", "root", "", "dvr1");
  
  if (isset($_POST['register_btn'])){
	  
	  $customer_id = $_POST['customer_id'];
	  $fullname = $_POST['fullname'];
	  
	  $ph_no = $_POST['ph_no'];
	  $email = $_POST['email'];
	  $movie_name = $_POST['movie_name'];
	 
	  
	 
	  
		  $sql="insert into customer(customer_id,fullname,ph_no,email,movie_name) values('$customer_id','$fullname','$ph_no','$email','$movie_name')";
		  mysqli_query($db,$sql);
		  
		 
		  
		  header('Location:index.php'); 
	  
  }
?>
<html>
<head>

<title></title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <link rel="stylesheet" type="text/css" href="demo.css" media="all" />
</head>
<body background ="r22.jpg" >
<div  class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <a href="index.php" target="_blank">Home</a>
                <span class="right">
                    <a href="Dash/index1.php">
                        <strong>Database</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ freshdesignweb top bar -->
			<header>
				<h1><span>Customer Details</span></h1>
            </header>       
      <div  class="form">
    		<form id="contactform" method="POST"> 
    			
    			 
    			<p class="contact"><label for="email">Customer_Id</label></p> 
    			<input id="email" name="customer_id" placeholder="7771" required=""> 
				
				<p class="contact"><label for="name"> name</label></p> 
    			<input id="name" name="fullname" placeholder="Name" required="" tabindex="1" type="text"> 
				
				<p class="contact"><label for="username">phonenumber</label></p> 
    			<input id="username" name="ph_no" placeholder="10 digits" required="" tabindex="2" type="text"> 
				
				<p class="contact"><label for="email">email</label></p> 
    			<input id="email" name="email" placeholder="example@domain.com" required="" type="email"> 
    			
                
                <p class="contact"><label for="username">moviename</label></p> 
    			<input id="username" name="movie_name" required="" tabindex="2" type="text"> 
    			 
                 
				
            <input class="buttom" name="register_btn" id="submit" tabindex="5" value="Submit" type="submit"> 	 
        </form> 
      </div>      
     </div>

      </body>
  </html>
