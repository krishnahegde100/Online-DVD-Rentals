
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

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Hospital</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right" method="POST">
            <input type="text" class="form-control" name="search" placeholder="Search..."/>
			<input type="submit" class ="form-control " value=">>"/>
          </form>
        </div>
      </div>
    </nav>

		<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Dashboard</h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index.php"><img src="im1.jpg" width="350" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>Doctor</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index1.php"><img src="im2.jpg" width="350" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>Nurse</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index2.php"><img src="im3.jpg" width="350" height="350" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>Department</h4>
              <span class="text-muted">Something else</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <a href="index3.php"><img src="im4.jpg" width="300" height="300" class="img-responsive" alt="Generic placeholder thumbnail"></a>
              <h4>Patient</h4>
              <span class="text-muted">Something else</span>
            </div>
          </div>
          <h2 class="sub-header">Patient</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Patient_Id</th>
				  <th>First_Name</th>
				  <th>Last_Name</th>
                  <th>Date_In</th>
				  <th>Date_Out</th>
				  <th>Gender</th>
				  <th>Phone</th>
				  <th>Address</th>
				  <th>Age</th>
				  <th>Patient_Type</th>
                </tr>
              </thead>
              <tbody>
               <?php
					$link = mysqli_connect("localhost", "root", "", "hospital");
					if($link === false){
						die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					if(isset($_POST['search']))
					{
						$searchq = $_POST['search'];
						$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
						$sql = "DELETE FROM patient WHERE p_id = $searchq ";
						$retval = mysqli_query( $link, $sql );
						if(!$retval ) {
								echo "Could not delete data";
						}
						else if($retval = null) 
							echo "Enter Value";
						if($retval)
							echo "Data Deleted ";
					}
					$sql = "SELECT * FROM patient";
					if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>" . $row['p_id'] . "</td>";
						echo "<td>" . $row['fname'] . "</td>";
						echo "<td>" . $row['lname'] . "</td>";
                        echo "<td>" . $row['date_in'] . "</td>";
						echo "<td>" . $row['date_out'] . "</td>";
						echo "<td>" . $row['gender'] . "</td>";
						echo "<td>" . $row['phone'] . "</td>";
						echo "<td>" . $row['address'] . "</td>";
						echo "<td>" . $row['age'] . "</td>";
						echo "<td>" . $row['p_type'] . "</td>";
                        echo "</tr>";
                    }
                mysqli_free_result($result);
            } else{
                  echo "No records matching your query were found.";
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
