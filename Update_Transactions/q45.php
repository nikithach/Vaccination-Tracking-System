<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "vaccination_tracking_system";
$conn = new mysqli($servername, $username, $password, $database);
if(isset($_POST['Submit']))
{
 session_start();

 $fullname=$_POST['fullname'];
 $contact=$_POST['contact'];
 $adverse_reaction=$_POST['adverse_reaction'];
 $sql1="SELECT fullname,contact FROM doses_administered WHERE fullname='$fullname' AND contact='$contact';";
 $result=mysqli_query($conn,$sql1);
 $count  = mysqli_num_rows($result);
    if($count==0) {
      echo '<script>alert("patient not found")</script>';
    } 
    else{ 
      $sql = "UPDATE doses_administered SET adverse_reaction = '$adverse_reaction' WHERE fullname='$fullname' AND contact='$contact';";
      mysqli_query($conn,$sql);
      echo 'found';
      echo '<script>alert("Adverse reaction for a patient is recorded")</script>';
      header('Location:http://localhost/dbp/q451.php' ) ;
    }

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
      <h1>To report an adverse reaction for a patient after administration</h1>
    </div>

    <div class="signupdiv">
    <form method="POST" enctype="multipart/form-data" name="form">
      
      <br>
      <br>
        <label> <b> Fullname: &nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="fullname" placeholder="Please enter your fullname" title="Please enter the unit" pattern="[A-Za-z0-9@$&# ]{0,25}">
        <br>
        <br>
        <label> <b> contact: &nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="contact" placeholder="Enter contact" pattern="[A-Za-z0-9@$&# ]{0,25}">
        <br>
        <br>
        <label> <b> adverse_reaction &emsp;&emsp;</b></label> <input type="text" placeholder="Enter the adverse_reaction" name="adverse_reaction">
        <br>
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