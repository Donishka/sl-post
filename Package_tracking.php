<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container">

    

<form method="post" action="Package_tracking.php">
    
    <div class="Id_update_form">

    	<!--radio button to select po-->
      <label>Package ID</label>
		<input type="text" class="form-control" name="pcode" style="width:20em;" placeholder="Enter package id" value="<?php echo @$pcode; ?>" required />
					
    </div>
    <div class="Update_button">
      <button type="submit" class="btn" name="submit">Submit</button>
    </div>
    
  </form>


<?php
$host = 'localhost';
$sqluser = 'root';
$sqlpass = '';
$dbname= 'slpost';

$connect = mysqli_connect($host,$sqluser,$sqlpass);

if ($connect) //echo('SQL connceted <hr>");
//else echo("SQL connection faild <hr>");

$query_db = "CREATE DATABASE IF NOT EXISTS $dbname";
//$connect->query($query_db);

if($connect->query($query_db)) //echo ("Database connected <hr>");
//else echo ("Database connection faild <hr>");

mysqli_select_db($connect,$dbname);

if (isset($_POST['submit'])) 
	{
		$pcode = $_POST['pcode'];
    
	    $showf = "
          SELECT * FROM package 
          WHERE Package_code = '$pcode'  

            ";
$result = $connect -> query($showf);
$row=mysqli_fetch_assoc($result);
print("<p style='font-size:large'>
                    Name &nbsp&nbsp&nbsp&nbsp:&nbsp".$row['package_No']."<br>
                    Package weight &nbsp&nbsp&nbsp:&nbsp ".$row['Package_weight']."<br>
                    Sender_name &nbsp&nbsp&nbsp:&nbsp ".$row['Sender_name']."<br>
                    Sender_nic &nbsp&nbsp&nbsp:&nbsp ".$row['Sender_nic']."<br>
                    Receiver_address &nbsp&nbsp&nbsp:&nbsp ".$row['Receiver_address']."<br>
                    Initial_PO &nbsp&nbsp&nbsp:&nbsp ".$row['Initial_PO']."<br>
                    Destination_PO &nbsp&nbsp&nbsp:&nbsp ".$row['Destination_PO']."<br>
                    Current_PO &nbsp&nbsp&nbsp:&nbsp ".$row['Current_PO']."<br>
                    ");
	    

	    
	}




?>
</div>
</body>