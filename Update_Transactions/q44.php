<?php
$servername ="localhost";
$username = "root";
$password = "";
$database = "vaccination_tracking_system";
$conn = new mysqli($servername, $username, $password, $database);

if(isset($_POST['Submit']))
{
  session_start();
  $vaccine_name=$_POST['vaccine_name'];
 $distributed_by=$_POST['distributed_by'];
 $fullname=$_POST['fullname'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];
 $age=$_POST['age'];
 $medicalcond=$_POST['medical'];
 $allergy=$_POST['allergy'];
 $vphase=$_POST['vphase'];
 $vdose=$_POST['vdose'];
 $vlocation=$_POST['vlocation'];
 $datedose=$_POST['datedose'];
 $areaction=$_POST['areaction'];
    $sql = "INSERT INTO doses_administered  VALUES ('$vaccine_name','$distributed_by','$fullname','$address','$contact','$age','$medicalcond','$allergy','$vphase','$vdose','$vlocation','$datedose','$areaction')";
    mysqli_query($conn,$sql);
    header('Location:http://localhost/dbp/q451.php' ) ;
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
         <h1>To add information about a new dose administered</h1>
      <br>

    </div>

    <div class="signupdiv">
    <form method="POST" enctype="multipart/form-data" name="form">
      <br>   
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
        <label> <b> Vaccine name: &nbsp;&nbsp;&nbsp;&emsp; &emsp;&emsp;&nbsp;&nbsp;</b></label> <input type="text" name="vaccine_name" placeholder="Enter vaccine name" title="Please enter the state" >
        <br>
        <br>
        <b>distributed_by:</b>&emsp;&emsp;
        <input type="radio" id="Manufacturer" name="distributed_by" value="Manufacturer" checked>
        <label for="distributed_by">Manufacturer</label>&emsp;
        <input type="radio" id="Federal" name="distributed_by"  value="Federal">
        <label for="distributed_by">Federal</label>&emsp;
        <br>
        <br>
        <label> <b> Full name &emsp;&emsp;</b></label> <input type="text" placeholder="Full name" name="fullname">
        <br>
        <br>
        <label> <b> Address &emsp;&emsp;</b></label> <input type="text" placeholder="Address" name="address">
        <br>
        <br>
        <label> <b> Contact &emsp;&emsp;</b></label> <input type="number" placeholder="(xxx)-xxx-xxxx" name="contact">
        <br>
        <br><label> <b> Age &emsp;&emsp;</b></label> <input type="number" placeholder="Age" name="age">
        <br>
        <br>
        <label> <b> Medical conditions &emsp;&emsp;</b></label> <input type="text" placeholder="Medical conditions" name="medical">
        <br>
        <br>

        <label> <b> Any Allergy &emsp;&emsp;</b></label> <input type="text" placeholder="Any allergy" name="allergy">
        <br>
        <br>
        <label> <b> Vaccination Phase &emsp;&emsp;</b></label> <input type="text" placeholder="Vaccination Phase" name="vphase">
        <br>
        <br>
        <b>Vaccination dose:</b>&emsp;&emsp;
        <input type="radio" id="Manufacturer" name="vdose" value="First dose" checked>
        <label for="distributed_by">First dose</label>&emsp;
        <input type="radio" id="Federal" name="vdose"  value="Second dose">
        <label for="distributed_by">Second dose</label>&emsp;
        <br>
        <br>
        <label> <b> Vaccinations location &emsp;&emsp;</b></label> <input type="text" placeholder="Vaccination location" name="vlocation">
        <br>
        <br>
        <label> <b> date &emsp;&emsp;</b></label> <input type="text" placeholder="MM/DD/YYYY" name="datedose">
        <br>
        <br>
        <label> <b> Adverse reactions &emsp;&emsp;</b></label> <input type="text" placeholder="Adverse reactions" name="areaction">
        <br>
        <br>
        <!--<input type="submit" value="Submit" style="width: 25%; height:5%; margin-left: auto;" />-->
        <input type="submit" name="Submit" value="  Submit  ">
      </form> 

    </div>
  </div>
</body>
</html>