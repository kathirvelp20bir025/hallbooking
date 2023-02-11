<?php 

include "config.php";

$sql = "SELECT * FROM rrr";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users</h2>

<table class="table">

    <thead>

        <tr>

        <th>Check_in_Date</th>

        <th>Check_out_Date</th>

        <th>Choose_seminar_hall</th>

        <th>Name</th>

        <th>Email</th>

        <th>Phone</th>

        <th>Number_of_persons_expected</th>

        <th>Choose_session</th>

        <th>Purpose_of_the_event</th>

        <th>id</th>
        
        <th>actions</th>



    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['Check_in_Date']; ?></td>

                    <td><?php echo $row['Check_out_Date']; ?></td>

                    <td><?php echo $row['Choose_seminar_hall']; ?></td>

                    <td><?php echo $row['Name']; ?></td>

                    <td><?php echo $row['Email']; ?></td>

                    <td><?php echo $row['Phone']; ?></td>

                    <td><?php echo $row['Number_of_persons_expected']; ?></td>

                    <td><?php echo $row['Choose_session']; ?></td>

                    <td><?php echo $row['Purpose_of_the_event']; ?></td>

                    <td><?php echo $row['id']; ?></td>

                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>