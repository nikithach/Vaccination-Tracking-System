<?php
                $servername ="localhost";
                $username = "root";
                $password = "";
                $database = "vaccination_tracking_system";

	$conn =  mysqli_connect($servername, $username, $password, $database);
	$prj= mysqli_query($conn,"select * from federal_data") or die(mysqli_error($conn));
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
    <title>Federal Data</title>
</head>

<body>
    <div class="wrapper">
        <div class="topNav">
        </div>
        <nav>
        </nav>

        <section class="content">
            <table>
                <caption>Federal Data</caption>
                <thead>
                    <tr>
                    <th scope="col">Vaccine name</th>
                    <th scope="col">Shipped to location</th>
                    <th scope="col">Count procured</th>
                    <th scope="col">manufacturer name</th>
                    <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($record as $rec){ ?>
                    <tr>
                    <td><?php echo $rec['vaccine_name']; ?></td>
                    <td><?php echo $rec['Shipped_to_location']; ?></td>
                    <td><?php echo $rec['Count_procured']; ?></td>
                    <td><?php echo $rec['manufacturer_name']; ?></td>
                    <td><?php echo $rec['date_federal']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
        </section>
    </div>
</body>

</html>
