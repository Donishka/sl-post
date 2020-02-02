<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php require 'layout/header.php'?>
</head>


<body class="w3-white">
    <?php require 'layout/top-nav.php'?>
    <?php require 'layout/left-nav.php'?>

    <!-- !PAGE CONTENT! -->
    <div class="w3-main" style="margin-left:300px;margin-top:43px;">
        <div class="w3-row-padding">
            <p style="margin-top: 80px !important;"> </p>
            <div class="w3-col l10">
                <p></p>
            </div>
            <div class="w3-col l2">
                <input class="w3-input w3-border  w3-round-xxlarge" type="text" placeholder="&#x1F50E Search">
            </div>
        </div>
        <!-- Place content here -->
        <div class="w3-container w3-padding-32">
            <table class="w3-table w3-bordered w3-striped w3-border test w3-hoverable">
                <tbody>
                    <tr class="w3-blue">
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>NIC</th>
                        <th>Address</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Designation</th>
                        <th>User name</th>
                        <th>Password</th>
                    </tr>
                </tbody>
                <tbody>

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

$table = "officerdetail";
      $showf = "
          SELECT * FROM $table  

            ";
$result = $connect -> query($showf);
if($result ){
  

    while($row=mysqli_fetch_assoc($result)){
        print("
        <tr>
                        <td>".$row['officer_id']."</td>
                        <td>".$row['officer_first_name']."</td>
                        <td>".$row['officer_last_name']."</td>
                        <td>".$row['officer_nic']."</td>
                        <td>".$row['officer_dob']."</td>
                        <td>".$row['officer_addr']."</td>
                        <td>".$row['officer_email']."</td>
                        <td>".$row['designation']."</td>
                        <td>".$row['officer_uname']."</td>
                        <td>".$row['officer_pwd']."</td>
                    </tr>
        ");
    }   
    
}
      

      
  




?>

                    
                </tbody>
            </table>
        </div>
    </div>
    <!-- End content here -->
</body>

</html>