<?php
 session_start();

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'slpost');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  

    $query = "INSERT INTO post_office (PO_id, Branch, PO_Address, PO_Head_Id, Head_name, PO_Head_Address, PO_Head_Contact_no, PO_Head_Email, PO_Head_Uname, password) 
          VALUES('". $_POST["poid"]."','". $_POST["pobranch"]."','". $_POST["poaddress"]."','". $_POST["pohid"]."','". $_POST["pohname"]."','". $_POST["pohaddr"]."','". $_POST["pohtel"]."','". $_POST["pohmail"]."', '". $_POST["pohuname"]."', '". $_POST["pohpwd"]."')";
    
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
  
  <form method="post" action="PO Register.php">
    
    <div class="PO_reg_form">
      <label>Post Office ID</label>
      <input type="text" name="poid" value=""><br/>
   
      <label>Branch</label>
      <input type="text" name="pobranch" value=""><br/>

      <label>Post Office Address</label>
      <input type="text" name="poaddress" value=""><br/>

      <label>PO Head ID</label>
      <input type="text" name="pohid"><br/>
   
      <label>POHead Name</label>
      <input type="text" name="pohname"><br/>

      <label>PO Head Address</label>
      <input type="text" name="pohaddr"><br/>

      <label>PO Head Contact NO</label>
      <input type="text" name="pohtel"><br/>

      <label>PO Head Email</label>
      <input type="email" name="pohmail"><br/>

      <label>PO Head User Name</label>
      <input type="text" name="pohuname"><br/>
   
      <label>PO Password</label>
      <input type="password" name="pohpwd">


    </div>
    <div class="Reg_button">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>

</body>
</html>





