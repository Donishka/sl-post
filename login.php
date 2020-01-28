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


  		//$query = "SELECT * FROM post_office WHERE uname = '". $_POST["uname"]."' and password = '". $_POST["password"]."' ";
  		$query = "SELECT * FROM post_office WHERE uname = $uname and password = $password ";
  		//$query = "SELECT Head_name, password FROM post_office";

    	//mysqli_query($db, $query);
    	
    	$result = mysqli_query($db, $query);
     	//$row = mysqli_fetch_array($result);

     	//$active = $row['active'];
      
      	$count = mysqli_num_rows($result);

      	if($count > 0)
      	{
      		echo "$count results found";
      	}
      	

        //$count = $row['cntUser'];

      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      	if($count == 1) {
        // session_register("myusername");
         //$_SESSION['login_user'] = $myusername;
         
         header('location: Home.html');
     	
     	}
      	else {
         $error = "Your Login Name or Password is invalid";
      	}
    	
    	
	}

?>

<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">

</head>


<body>

  <div class="header">
    <h2>Login</h2>
  </div>
  
  <form method="post" action="login.php">
    
    <div class="input-group">
      <label>User Name</label>
      <input type="text" name="uname" value="">
    </div>
   
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="log_user">Login</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

</body>
</html>

