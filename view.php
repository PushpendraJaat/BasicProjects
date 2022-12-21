<?php 

include "functions.php";

$sql = "SELECT * FROM customers";

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

        <h2>Customers Data</h2>

<table class="table">

    <thead>

        <tr>

        <th>ID</th>

        <th>First Name</th>

        <th>Last Name</th>

        <th>Email</th>

        <th>Gender</th>

        <th>Fav Food</th>

        

    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['cid']; ?></td>

                    <td><?php echo $row['cname']; ?></td>

                    <td><?php echo $row['clastname']; ?></td>

                    <td><?php echo $row['cemail']; ?></td>

                    <td><?php echo $row['cgender']; ?></td>

                    <td><?php echo $row['favfoodchk']; ?></td>

                    

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>