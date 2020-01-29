<?php 
	$db = mysqli_connect('localhost', 'root', '', 'slpost');
	if (!$db)
	{
    	die("Database Connection Failed" . mysqli_error($db));
	}

	if (isset($_POST['uname']) and isset($_POST['password']))
	{
  		//$query = "INSERT INTO post_office (PO_id, Location, Head_name, password) VALUES('". $_POST["poid"]."','". $_POST["location"]."', '". $_POST["head"]."', '". $_POST["password"]."')";
		$uname =  $_POST['uname'];
		$password =  $_POST['password'];
    $type = $_POST['type'];

    
      if($type == 'employee')
      {

            $query = "SELECT * FROM employee WHERE Emp_user_name = '$uname' and Emp_password = '$password' ";
      
      
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            $count = mysqli_num_rows($result);


            
        
            if($count == 1) {
            // session_register("myusername");
             //$_SESSION['login_user'] = $myusername;
             
             header('location: Home.html');
          
            }
            else {
            echo "<script>alert('Your Login Name or Password is invalid')</script>";
             
            } 
      


      }


      if($type == 'post_office')
      {

            $query = "SELECT * FROM post_office WHERE PO_Head_Uname = '$uname' and password = '$password' ";
      
      
            $result = mysqli_query($db, $query) or die(mysqli_error($db));
            $count = mysqli_num_rows($result);


            
        
            if($count == 1) {
            // session_register("myusername");
             //$_SESSION['login_user'] = $myusername;
             
             header('location: Home.html');
          
            }
            else {
             $error = "Your Login Name or Password is invalid";
            } 
      


      }
  		
    	
	}

?>

<html>
<head>

  <title>SLPOST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style ="width:auto;overflow-x: hidden;height: 100%;background: white">

    <div class="row">
      	<div class="col-md-5" >
	      	<br><br><br><br><br><br><br><br><br><br><br><br>
	      	<p class="font-weight-bold" align="center" style="font-size:50px;margin-bottom: 0;color: #2196F3";>SL POST</p>
	   		<p class="font-italic" align="center" style="margin-top: 0;color: black">Secure your parcels wih us</p>   
	    </div>
      
      	<div class="col-md-7">
            <div class="card" style="width: 56rem;height:47rem; background :#2196F3;margin-top:0;padding-top: 0;">
            	<br><br><br><br><br><br><br><br><br>
            	<div class="row justify-content-around">

              		<form method="post" action="mylogin.php">
	              		<input type="radio" name="type" value="admin"><label style="color: white" >&nbsp;Admin&emsp;&emsp;</label>

					    <input type="radio" name="type" <?php if (isset($type) && $type=="post_office") echo "checked";?>value="post_office"><label style="color: white" >&nbsp;Manager&emsp;&emsp;</label>
					    <input type="radio" name="type"<?php if (isset($type) && $type=="employee") echo "checked";?>value="employee"><label style="color: white">&nbsp;Officer</label>

 						<br><br><br><br>

					    <div class="input-group">
					      <label style="color: white">User Name&emsp;</label>
					      <input type="text" class="form-control" name="uname" value="">
					    </div>
				   		<br> 
					    <div class="input-group">
					      <label style="color: white">Password&emsp;&nbsp;&nbsp;&nbsp;</label>
					      <input type="password" class="form-control"  name="password">
					    </div>
				     	<br> <br>
				    
				      	<button type="submit" class="btn btn-light" name="log_user" style="color:#2196F3; " >Login</button>
				    
				  	</form>
            	</div>
            </div>

      	</div>
    </div>
</body>
</html>
      	