<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "vaccination_tracking_system";
$conn = new mysqli($servername, $username, $password, $database);
if(isset($_POST['Submit']))
{
 session_start();
 $location=$_POST['location'];
 $vaccine_name=$_POST['vname'];
 $no_of_vaccines=$_POST['no_of_vaccines'];
 $date=$_POST['date'];
 $manufacturer_name=$_POST['manname'];
 $sql = "INSERT INTO federal_data VALUES ('$vaccine_name','$location','$no_of_vaccines','$manufacturer_name','$date')";
 mysqli_query($conn,$sql);
 echo '<script>alert("Given amount of vaccines are distributed to a particular state.")</script>';
 header('Location:http://localhost/dbp/q422.php');
 }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="cataloguesystem.css">
  <script>
 function img(x)
 {
  if(x==0)
    document.getElementById('mname').style.display='block';
    //document.getElementById('mname1').style.display='block';
  else
    document.getElementById('mname').style.display='none';
    //document.getElementById('mname1').style.display='none';
    return
 }


</script>
</head>
<body>
  <div class="wrapper">
    <div class="topnav">

    </div>

    <div class="middlenav">
      <h1>To procure Vaccines</h1>
    </div>

    <div class="signupdiv">
    <form method="POST" enctype="multipart/form-data" name="form">
      
      <br>
      <br>
        <label> <b> Location: &nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="location" placeholder="Please enter your location" title="Please enter the location" pattern="[A-Za-z0-9@$&# ]{0,25}">
        <br>
        <br>
        <label> <b> Vaccine name: &nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="vname" placeholder="Enter name of vaccine" pattern="[A-Za-z0-9@$&# ]{0,25}">
        <br>
        <br>
        <label> <b> Number of vaccines distributed &emsp;&emsp;</b></label> <input type="number" placeholder="Enter vaccine count"name="no_of_vaccines"pattern="[0-9]{0,4}">
        <br>
        <br>
        <label> <b> Date: &emsp;&emsp;</b></label> <input type="text" placeholder="MM/DD/YYYY"name="date">
        <br>
        <br>
        <div>
        <label><b>Manufacturer Name: </b></label><input type="text"  id="mname" name="manname" placeholder="Enter manufacturer name" title="Please enter the state" pattern="[A-Za-z0-9@$&# ]{0,25}">

        </div>
        <br>
        <br>
        <br>
        <!--<input type="submit" value="Submit" style="width: 25%; height:5%; margin-left: auto;" />-->
        <input type="submit" name="Submit" value="  Submit  ">
      </form> 

    </div>

<footer>
  <div class="Foot">
    <br>
    <br>
    <div class="login_txt">
    <hr style="width:90%;margin-left:05%; align-items: center;">
    <br>
      <font color="#FFFFFF" style="margin-left: 05%;">Created by</font>
      <div class="sub_txt">
      <font color="#FFFFFF" style="margin-left: 75%;">All Rights Reserved</font>
    </div>
  </div>
  </div>
</footer>
  </div>
</body>
</html>