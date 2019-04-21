<?php  
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 	

    <!-- Page Title -->
    <title>Dublin Eye Clinics</title>

    <!-- Favicon - Title page icon -->
    <link rel="shortcut icon" href="assets/images/logo/eyelogo.png" type="image/x-icon">

    <style>
            table {
        border-collapse: collapse;
        width: 60%;
        border: 1px solid black;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
        background-color: blue;
        color: white;
        }

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
            box-shadow: 10px 10px yellow;
            }

    </style>

</head>

<body background="images/admin.jpg">
    
<h3>Tracking Your Order</h3>

<?php
    $enteredid = $_POST['orderid'];

    //echo $enteredid;
    $sql="SELECT * FROM orders WHERE ord_id = '".$enteredid."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
    <tr>
    <th>Order ID</th>
    <th>Name of the ordering Customer</th>
    <th>Latest Order Status</th>
    </tr>";

    while($row = mysqli_fetch_array($result)) 
    {
        echo "<tr>";
        echo "<td>" . $row['ord_id'] . "</td>";
        echo "<td>" . $row['cust_name'] . "</td>";
        echo "<td>" . $row['ord_status'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
?>

<br>

<a href="track.php" class="button">Back to Tracking</a>

<br> <br>

<a href="index.html" class="button">Back to Home Page</a>

</body>
</html>