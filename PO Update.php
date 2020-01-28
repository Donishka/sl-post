<?php 

	$db = mysqli_connect('localhost', 'root', '', 'slpost');

	

	if (isset($_POST['update_qrid'])) 
	{
	    $currentpo = $_POST['$currentpo'];
		$qrid = $_POST['qrid'];
    
	    $query = "UPDATE package SET Current_PO = '$currentpo' WHERE Package_code = '$qrid' ";
	    mysqli_query($db, $query);
	    

	    if ($db->query($query) === TRUE) {
    		header('location: Home.html');
		} 
		else 
		{
    		echo "Error updating record: " . $db->error;
		}

	    
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>

  <div class="header">
    <h2>Register</h2>
  </div>
  
  <form method="post" action="PO Update.php">
    
    <div class="Id_update_form">

    	<!--radio button to select po-->
      <label>Package ID</label>
		<input type="text" class="form-control" name="qrid" style="width:20em;" placeholder="Enter package id" value="<?php echo @$qrid; ?>" required />

		<label>Post Office</label>
		<input type="text" class="form-control" name="currentpo" style="width:20em;" placeholder="Enter post office" value="<?php echo @$currentpo; ?>" required />
					
    </div>
    <div class="Update_button">
      <button type="submit" class="btn" name="update_qrid">Submit</button>
    </div>
    
  </form>
<p>dfghjkl</p>
</body>
</html>
