<?php
                $servername ="localhost";
                $username = "root";
                $password = "";
                $database = "vaccination_tracking_system";

	$conn =  mysqli_connect($servername, $username, $password, $database);
	$prj= mysqli_query($conn,"select * from manufacturers") or die(mysqli_error($conn));
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
    <title>Manufacturers Data</title>
</head>

<body>
    <div class="wrapper">
        <div class="topNav">
        </div>
        <nav>
        </nav>

        <section class="content">
            <table>
                <caption>Manufacturer Data</caption>
                <thead>
                    <tr>
                    <th scope="col">manufacturer name</th>
                    <th scope="col">vaccine name</th>
                    <th scope="col">distributed to</th>
                    <th scope="col">Count</th>
                    <th scope="col">Date manufactured</th>

                    </tr>
                </thead>
                <tbody>
                <?php foreach($record as $rec){ ?>
                    <tr>
                    <td><?php echo $rec['manufacturer_name']; ?></td>
                    <td><?php echo $rec['vaccine_name']; ?></td>
                    <td><?php echo $rec['distributed_to']; ?></td>
                    <td><?php echo $rec['Count_distributed']; ?></td>
                    <td><?php echo $rec['date_manufactured']; ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>
        </section>

    </div>
</body>

</html>
