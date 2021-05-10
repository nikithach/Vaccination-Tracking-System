<?php
                $servername ="localhost";
                $username = "root";
                $password = "";
                $database = "vaccination_tracking_system";

	$conn =  mysqli_connect($servername, $username, $password, $database);
	$prj= mysqli_query($conn,"select * from doses_administered ") or die(mysqli_error($conn));
        $record = array();
        while($row = mysqli_fetch_assoc($prj)){
            $record[] = $row;

        }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./new.css">
    <title>q451</title>
</head>

<body>
    <div class="wrapper">
        <div class="topNav">
        </div>
        <nav>
        </nav>

        <section class="content">
            <table>
                <caption>Report an adverse reaction for a patient after administration</caption>
                <thead>
                    <tr>
                    <th scope="col">vaccine_name</th>
                    <th scope="col">Distributed_by</th>
                    <th scope="col">Fullname</th>
                    <th scope="col">Address</th>
                    <th scope="col">contact</th>
                    <th scope="col">Age</th>
                    <th scope="col">Medical Conditions</th>
                    <th scope="col">Any Allergy</th>
                    <th scope="col">vaccination phase</th>
                    <th scope="col">vaccination dose</th>
                    <th scope="col">vaccination location</th>
                    <th scope="col">date</th>
                    <th scope="col">Adverse_reaction</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($record as $rec){ ?>
                    <tr>
                    <td><?php echo $rec['vaccine_name']; ?></td>
                    <td><?php echo $rec['Distributed_by']; ?></td>
                    <td><?php echo $rec['fullname']; ?></td>
                    <td><?php echo $rec['address']; ?></td>
                    <td><?php echo $rec['contact']; ?></td>
                    <td><?php echo $rec['age']; ?></td>
                    <td><?php echo $rec['medical_conditions']; ?></td>
                    <td><?php echo $rec['any_allergy']; ?></td>
                    <td><?php echo $rec['vaccination_phase']; ?></td>
                    <td><?php echo $rec['vaccination_dose']; ?></td>
                    <td><?php echo $rec['vaccination_location']; ?></td>
                    <td><?php echo $rec['date']; ?></td>
                    <td><?php echo $rec['adverse_reaction']; ?></td>

                    </tr>
                    <?php } ?>
                </tbody>
                </table>
        </section>
    </div>
</body>

</html>