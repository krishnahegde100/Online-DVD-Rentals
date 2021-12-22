
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title></title>

    <link href="bootstrap.min.css" rel="stylesheet">


    <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

    
    <link href="dashboard.css" rel="stylesheet">

    <script src="ie-emulation-modes-warning.js"></script>

  
  </head>

  <body  background="r22.jpg">

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <a class="navbar-brand" href="\minidb/dvd/index.php">ONLINE DVD RENTAL </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
          
        </div>
      </div>
    </nav>

   
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">DATABASE</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index.php"><img src="images (23).jpg" width="350" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
           <h4>Customer</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index1.php"><img src="download.jpg" width="350" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>film</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index2.php"><img src="images (7).png" width="350" height="350" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>category</h4>
              <span class="text-muted"></span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index3.php"><img src="images (22).jpg" width="300" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>actor</h4>
              <span class="text-muted"></span>
            </div>
          </div>

          <h2 class="sub-header">Customer</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>customer_id</th>
				  <th>name</th>
                  <th>Email</th>
                  <th>moviename</th>
                  
                </tr>
              </thead>
              <tbody>
               <?php
					$link = mysqli_connect("localhost", "root", "", "dvr1");
					if($link === false){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					/*if(isset($_POST['search']))
					{
						$searchq = $_POST['search'];
						$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
						$sql = "SELECT fname,lname,specialisation,type,experience FROM doctor as d INNER JOIN employee as e ON d.e_id = e.e_id  WHERE fname LIKE '%$searchq%' OR lname LIKE '%$searchq%'" ;
					}	
					else 
					{*/
						$sql = "SELECT customer_id,fullname,email,movie_name FROM customer";
					if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['customer_id'] . "</td>";
						echo "<td>" . $row['fullname'] . "</td>";
                        echo "<td>" . $row['email'] . "</td>";
                        echo "<td>" . $row['movie_name'] . "</td>";
                       
                        echo "</tr>";
                    }
                mysqli_free_result($result);
            } else{
                  echo "Could not search";
                }
            } else{
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
			mysqli_close($link);
		?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
