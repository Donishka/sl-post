<?php
session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'slpost');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
 /*$poid = mysqli_real_escape_string($db, $_POST["poid"]);
  $location = mysqli_real_escape_string($db, $_POST["location"]);
  $head = mysqli_real_escape_string($db, $_POST["head"]);
  $password = mysqli_real_escape_string($db, $_POST["password"]);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  /*if (empty($poid)) { array_push($errors, "Post office ID is required"); }
  if (empty($location)) { array_push($errors, "Location is required"); }
  if (empty($head)) { array_push($errors, "Name of head is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }*/

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  /*$user_check_query = "SELECT * FROM post_office WHERE PO_id='$poid' OR Location='$location' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }
*/
  // Finally, register user if there are no errors in the form
  /*if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database*/

    $query = "INSERT INTO post_office (PO_id, Location, Head_name, password) 
          VALUES('". $_POST["poid"]."','". $_POST["location"]."', '". $_POST["head"]."', '". $_POST["password"]."')";
    mysqli_query($db, $query);
    
    //header('location: home.html');
  }
  ?>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">


</head>


<body>

  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="server.php">
    
    <div class="input-group">
      <label>Post Office ID</label>
      <input type="text" name="poid" value="">
    </div>
    <div class="input-group">
      <label>Location</label>
      <input type="email" name="location" value="">
    </div>
    <div class="input-group">
      <label>Head</label>
      <input type="password" name="head">
    </div>
    <div class="input-group">
      <label>Passord</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

</body>
</html>


