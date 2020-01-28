<?php

 
include('libs/phpqrcode/qrlib.php'); 

function getUsernameFromEmail($sendername) {
	$find = '@';
	$pos = strpos($sendername, $find);
	$username = substr($sendername, 0, $pos);
	return $username;
}

if(isset($_POST['generateQr']) ) {
	$tempDir = 'temp/'; 
	$sendername = $_POST['sendername'];
	$sendernic =  $_POST['sendernic'];
	$filename = getUsernameFromEmail($sendername);
	$sendertel =  $_POST['sendertel'];
	$qrid = $_POST['qrid'];
	$from = $_POST['from'];
	$to = $_POST['to'];
	$initialpo = $_POST['initialpo'];
	$codeContents = 'mailto:'.$sendername.'?sendernic='.urlencode($sendernic).'&sendertel='.urlencode($sendertel).'&qrid='.urlencode($qrid).'&from='.urldecode($from).'&to='.urldecode($to).'&initialpo='.urldecode($initialpo).'&from='.urldecode($from).'&from='.urldecode($from).'&from='.urldecode($from).'&from='.urldecode($from); 
	

	QRcode::png($codeContents, $tempDir.''.$filename.'.png', QR_ECLEVEL_L, 5);

	
}
?>


<?php

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'slpost');


// REGISTER USER
if (isset($_POST['Register'])) {
  

    $query = "INSERT INTO package (Sender_name, Sender_nic, Sender_contact_no,Sender_address,Receiver_address, Initial_PO, Destination_PO, Current_PO,Package_weight, Send_Date, Package_code) 
          VALUES('". $_POST["sendername"]."', '". $_POST["sendernic"]."', '". $_POST["sendertel"]."','". $_POST["from"]."', '". $_POST["to"]."', '". $_POST["initialpo"]."', '". $_POST["destipo"]."', '". $_POST["currentpo"]."', '". $_POST["weight"]."', '". $_POST["regdate"]."', '". $_POST["qrid"]."')";
    
    mysqli_query($db, $query);
    
    header('location: Home.html');
}
?>



<!DOCTYPE html>
<html lang="en-US">
	<head>
	<title>QR Code Generator</title>
	<!--<link rel="icon" href="img/favicon.ico" type="image/png">
	<link rel="stylesheet" href="libs/css/bootstrap.min.css">
	<link rel="stylesheet" href="libs/style.css">
	<script src="libs/navbarclock.js"></script>-->
	</head>
	<body onload="startTime()">
		<nav class="navbar-inverse" role="navigation">
			
			<div id="clockdate">
				<div class="clockdate-wrapper">
					<div id="clock"></div>
					<div id="date"><?php echo date('l, F j, Y'); ?></div>
				</div>
			</div>
			<div class="pagevisit">
				
			</div>
		</nav>
		<div class="myoutput">
			
			<div class="input-field">
				
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
					<div class="form-group">
						<label>Sender Name</label>
						<input type="text" class="form-control" name="sendername" style="width:20em;" placeholder="Enter sender name" value="<?php echo @$sendername; ?>" required />
					</div>
					<div class="form-group">
						<label>Sender NIC</label>
						<input type="text" class="form-control" name="sendernic" style="width:20em;" placeholder="Enter sender NIC" value="<?php echo @$sendernic; ?>" required pattern="[0-9]+" />
					</div>
					<div class="form-group">
						<label>Sender Contact NO</label>
						<input type="text" class="form-control" name="sendertel" style="width:20em;" value="<?php echo @$sendertel; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>From</label>
						<input type="text" class="form-control" name="from" style="width:20em;" value="<?php echo @$from; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>To</label>
						<input type="text" class="form-control" name="to" style="width:20em;" value="<?php echo @$to; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>Initial Post Office</label>
						<input type="text" class="form-control" name="initialpo" style="width:20em;" value="<?php echo @$initialpo; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>Destination Post Office</label>
						<input type="text" class="form-control" name="destipo" style="width:20em;" value="<?php echo @$destipo; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>Current Post Office</label>
						<input type="text" class="form-control" name="currentpo" style="width:20em;" value="<?php echo @$currentpo; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>Package weight</label>
						<input type="text" class="form-control" name="weight" style="width:20em;" value="<?php echo @$weight; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					<div class="form-group">
						<label>Package Register date</label>
						<input type="text" class="form-control" name="regdate" style="width:20em;" value="<?php echo @$regdate; ?>" required pattern="[a-zA-Z0-9 .]+" placeholder="Enter your message">
					</div>
					
					<div class="form-group">
						<label>Package id</label>
						<input type="text" class="form-control" name="qrid" style="width:20em;" value="<?php echo @$qrid; ?>"  placeholder="Package id">
					</div>
					<div class="form-group">
						<input type="submit" name="generateId" value="Generate ID" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>

					<div class="form-group">
						<input type="submit" name="generateQr" value="Generate QR Code" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>
					<div class="form-group">
						<input type="submit" name="Register" value="Register" class="btn btn-primary submitBtn" style="width:20em; margin:0;" />
					</div>

				</form>
			</div>
			<?php
			if(!isset($filename)){
				$filename = "author";
			}
			?>
			<div class="qr-field">
				<h2 style="text-align:center">QR Code Result: </h2>
				<center>
					<div class="qrframe" style="border:2px solid black; width:210px; height:210px;">
							<?php echo '<img src="temp/'. @$filename.'.png" style="width:200px; height:200px;"><br>'; ?>
					</div>
					<a class="btn btn-primary submitBtn" style="width:210px; margin:5px 0;" href="download.php?file=<?php echo $filename; ?>.png ">Download QR Code</a>
				</center>
			</div>
			
		</div>
	</body>
	<footer></footer>
</html>


<!--<?php

// initializing variables

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'slpost');


// REGISTER USER
if (isset($_POST['reg_user'])) {
  

    $query = "INSERT INTO package (Sender_name, Sender_nic, Sender_contact_no,Sender_address,Receiver_address, Initial_PO, Destination_PO, Current_PO,Package_weight, Send_Date, Package_code) 
          VALUES('". $_POST["sendername"]."', '". $_POST["sendernic"]."', '". $_POST["sendertel"]."','". $_POST["from"]."', '". $_POST["to"]."', '". $_POST["initialpo"]."', '". $_POST["destipo"]."', '". $_POST["currentpo"]."', '". $_POST["weight"]."', '". $_POST["date"]."', '". $_POST["barcoede"]."')";
    
    mysqli_query($db, $query);
    
    header('location: Home.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Parcel Rgister</title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
    <h2>Register</h2>
  </div>
 
		
			<form method="post" action="Parcel Register.php">
    
		    <div class="Parcel_reg_form">
		      
		      <label>Sender Name</label>
		      <input type="text" name="sendername" value=""><br/>

		      <label>Sender NIC</label>
		      <input type="text" name="sendernic" value=""><br/>

		      <label>Sender Contact NO</label>
		      <input type="text" name="sendertel"><br/>
		   
		      <label>From</label>
		      <input type="text" name="from"><br/>

		      <label>To</label>
		      <input type="text" name="to"><br/>

		      <label>Initial Post Office</label>
		      <input type="text" name="initialpo"><br/>

		      <label>Destination Post Office</label>
		      <input type="text" name="destipo"><br/>

		      <label>Current Post Office</label>
		      <input type="text" name="currentpo"><br/>

		      <label>Package weight</label>
		      <input type="text" name="weight"><br/>
		   
		      <label>Package Register date</label><br/>
		      <input type="text" name="date">

		      <label>Package code</label>
		      <input type="text" name="barcoede">

		     <div class="Qr_button">
		      <button type="submit" class="btn" name="qr_gen">Generate QR Code</button>
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


