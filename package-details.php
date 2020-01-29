<!DOCTYPE html>
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

<body style ="width:auto;overflow-x: hidden;height: 100%;background: #2196F3">

  <br>
    <div class="row">
      <div class="col-md-3">
        <p class="font-weight-bold" style="font-size:50px;margin-bottom: 0;color: white">&nbsp;&nbsp;&nbsp;&nbsp;SL POST</p>
        <p class="font-italic" style="margin-top: 0;color: white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secure your parcels wih us</p> 
      </div>

      <div class="col-md-6">
        <br><br><br><br><br><br>
        <div class="container" style="height: 100%;display: flex;justify-content: center;">
         <div class="row justify-content-around">
          <form class="form-inline my-2 my-lg-0" method="post" action="package-details.php">
            <input type="text" class="form-control" name="pcode" placeholder="Search your parcel code here...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" class="search_bar" style="float: right;padding: 6px;border: none;margin-top: 8px;margin-right: 16px;font-size: 17px;width: 500px;margin-bottom: 0;">
            <p>&nbsp;&nbsp;</p>
            <button type="submit" class="btn btn-light" name="submit" value="Search" style="margin-bottom: 0;color:#2196F3" >Search</button>
          </form>
        </div>
      </div>
<?php
if (isset($_POST['submit'])) {
  print("
  <p style='margin-top: 0;color: white'>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Initial Post Office &emsp;&emsp;&emsp;&emsp;&emsp;Current Post Office&emsp;&emsp;&emsp;&emsp;&emsp;Received Date </p>
  
  ");
}
?>
           
      <div class="row justify-content-around">
        <div class="card" style="width: 35rem;">
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
          print("
             <p>".$row['Initial_PO']."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row['Current_PO']."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".$row['Date']."</p>
                              ");
                
          
                
            }
          
          
          
          
          ?>

          
        </div>
      </div>
    </div>
      <div class="col-md-3">
         <ul class="list-inline">
            <li class="list-inline-item" style="color: white">About Us &nbsp;&nbsp;</li>
            <li class="list-inline-item" style="color: white">Information &nbsp;&nbsp;</li>
            <li class="list-inline-item" style="color: white">Contact Us &nbsp;&nbsp;</li>
        </ul>
      </div>
    </div>

                
               
                    
               

 

</body>
</html>