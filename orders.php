<?php
include('connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 	

    <!-- Page Title -->
    <title>Orders</title>
    <!-- Favicon - Title page icon -->
    <link rel="shortcut icon" href="assets/images/logo/eyelogo.png" type="image/x-icon">

    <script>
        function showUser(str) 
        {
            if (str == "") 
            {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } 
            else 
            {
                if (window.XMLHttpRequest) 
                {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
                } 
                else 
                {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() 
                {
                    if (this.readyState == 4 && this.status == 200) 
                    {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","changeorderstatus.php?q="+str,true);
                xmlhttp.send();
            }
        }
    </script>

    <style>

        table {
        border-collapse: collapse;
        width: 100%;
        border: 1px solid black;
        }

        th, td {
        text-align: left;
        padding: 8px;
        }

        tr:nth-child(even){background-color: #f2f2f2}

        th {
        background-color: #4CAF50;
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
            box-shadow: 10px 10px grey;
            }

    </style>

</head>

<body background="images/admin.jpg">

    <h2>

    <?php
        // Echo session variables that were set on previous page
        echo "Clinic Name: " . $_SESSION["name"] . "<br>";

    ?>
    </h2>

    <h3>Manage Your Orders Here: </h3>

    <form action="changeorderstatus.php" method="post">
    <?php

        $id = $_SESSION['user_id']; //this is clinic id
        // echo $id;

        $sql="SELECT * FROM orders WHERE cl_id = '".$id."'";
        $result = mysqli_query($con,$sql);

        echo "<table>
        <tr>
        <th>Select</th>
        <th>ID</th>
        <th>Package</th>
        <th>Description</th>
        <th>Price in Euros</th>
        <th>Customer Name</th>
        <th>Customer Mobile</th>
        <th>Customer Address</th>
        <th>Order Status</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) 
        {
            echo "<tr>";
            echo "<td> <input type='radio' name='order' value=" . $row['ord_id'] ."> </td>";
            echo "<td>" . $row['ord_id'] . "</td>";
            echo "<td>" . $row['pkg_name'] . "</td>";     
            echo "<td>" . $row['pkg_description'] . "</td>";     
            echo "<td>" . $row['pkg_price'] . "</td>";     
            echo "<td>" . $row['cust_name'] . "</td>";
            echo "<td>" . $row['cust_mobile'] . "</td>";
            echo "<td>" . $row['cust_address'] . "</td>";
            echo "<td>" . $row['ord_status'] . "</td>";    
            echo "</tr>";
        }
        echo "</table>";
    ?>

        <br>
        <label for="">New Status : </label>
        
        <select name="orderstatus">
            <option value="Created">Order Created</option>
            <option value="Accepted">Order Accepted</option>
            <option value="Completed">Order Completed</option>
        </select>

        <input type="submit" name="formSubmit" value="Select the Order from table and Click here to Change its Status" />

    </form>
    <br>
</body>

<br>

    <a href="admin.php" class="button">Back to Admin Page</a>

</html>
