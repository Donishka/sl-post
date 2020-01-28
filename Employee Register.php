<?php
 session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'slpost');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  

    $query = "INSERT INTO employee (Emp_id, Emp_name, Emp_nic,Emp_contact_no,Emp_address, Designation, Branch, Emp_user_name,Emp_password,Emp_email) 
          VALUES('". $_POST["empid"]."','". $_POST["empname"]."', '". $_POST["empnic"]."', '". $_POST["emptel"]."','". $_POST["empaddr"]."', '". $_POST["empdesg"]."', '". $_POST["empbranch"]."', '". $_POST["empuname"]."', '". $_POST["emppwd"]."', '". $_POST["empemail"]."')";
    
    mysqli_query($db, $query);
    
    header('location: Home.html');
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
  
  <form method="post" action="Employee Register.php">
    
    <div class="Emp_reg_form">
      <label>Employee ID</label>
      <input type="text" name="empid" value=""><br/>
   
      <label>Employee Name</label>
      <input type="text" name="empname" value=""><br/>

      <label>NIC</label>
      <input type="text" name="empnic" value=""><br/>

      <label>Employee Contact NO</label>
      <input type="text" name="emptel"><br/>
   
      <label>Employee Address</label>
      <input type="text" name="empaddr"><br/>

      <label>Designation</label>
      <input type="text" name="empdesg"><br/>

      <label>Branch</label>
      <input type="text" name="empbranch"><br/>

      <label>User Name</label>
      <input type="text" name="empuname"><br/>
   
      <label>Password</label>
      <input type="password" name="emppwd"><br/>

      <label>Email</label>
      <input type="text" name="empemail">


    </div>
    <div class="Reg_button">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
<p>dfghjkl</p>
</body>
</html>





