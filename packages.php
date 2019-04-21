<!-- Done -->

<?php
session_start();
include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 	

    <!-- Page Title -->
    <title>Manage Packages</title>
    <!-- Favicon - Title page icon -->
    <link rel="shortcut icon" href="assets/images/logo/eyelogo.png" type="image/x-icon">

    <!-- css for formatting table -->
    <style>
    table 
    {
        width: 100%;
        border-collapse: collapse;
        width: 50%
    }

    table, td, th 
    {
        border: 1px solid black;
        padding: 5px;
    }
        th {text-align: left;}

        .button {
            background-color: green;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            width: 200px;
            cursor: pointer;
            box-shadow: 10px 10px grey;
            }
    </style>


</head>

<body background="images/admin.jpg">
    
    <h2>    
    <?php
    // Echo session variables that were set on previous page
    echo "Welcome: " . $_SESSION["name"] . "<br>";
    ?>
    </h2>

    <h3>List of Packages at your Clinic: </h3>
   
    <br>

    <form name="packages_display">

        <?php

            // $resname = $_SESSION["name"];
            $id = $_SESSION['user_id'];
    
            // fetching all packages in result variable for specific clinic
            $sql="SELECT * FROM packages WHERE cl_id = '".$id."'";
            $result = mysqli_query($con,$sql);
        
            echo "<table width=300>
            <tr>
            <th>Package Name</th>
            <th>Description</th>
            <th>Price of the Package (in €)</th>
            </tr>";
    
            // for as many rows as number of items
            while($row = mysqli_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td>" . $row['pkg_name'] . "</td>";
                echo "<td>" . $row['pkg_description'] . "</td>";
                echo "<td>" . $row['pkg_price'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>  

    </form>

    <br>
    <br>

    <a href="add_package.php" class="button">Add New Package to your Clinic</a> <br><br>
    <a href="admin.php" class="button">Back to Admin Page</a>

    

</body>

</html>