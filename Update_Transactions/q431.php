<?php
                $servername ="localhost";
                $username = "root";
                $password = "";
                $database = "vaccination_tracking_system";

	$conn =  mysqli_connect($servername, $username, $password, $database);
	$prj= mysqli_query($conn,"select * from unit_distribution") or die(mysqli_error($conn));
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
    <title>Vaccines distributed to a particular unit</title>
</head>

<body>
    <div class="wrapper">
        <div class="topNav">
        </div>
        <nav>
        </nav>

        <section class="content">
            <table>
                <caption>Vaccines distributed to a particular Unit</caption>
                <thead>
                    <tr>
                    <th scope="col">Unit Location</th>
                    <th scope="col">vaccine name</th>
                    <th scope="col">vaccine procured count</th>
                    <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($record as $rec){ ?>
                    <tr>
                    <td><?php echo $rec['unit_location_name']; ?></td>
                    <td><?php echo $rec['vaccine_name']; ?></td>
                    <td><?php echo $rec['vaccine_procured_count']; ?></td>
                    <td><?php echo $rec['Date_wise']; ?></td>
                    
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
        </section>
    </div>
</body>

</html>