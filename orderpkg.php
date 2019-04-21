<?php
include('connect.php');
?>

<!DOCTYPE html>
<html>

<head>
    <style>
        table 
        {
            width: 50%;
            border-collapse: collapse;
        }

        table, td, th 
        {
            border: 1px solid black;
            padding: 5px;
        }
        th {text-align: left;}
    </style>
</head>

<body>
    <form action="confirmorder.php" method="post">
    
        <?php
            // q is clinic id received as session parameter from placeorder.php page
            $q = $_GET['q'];

            if (!$con) 
            {
                die('Could not connect: ' . mysqli_error($con));
            }

            // only available packages will be displayed to the ordering customer
            $sql="SELECT * FROM packages WHERE cl_id = '".$q."'";
            $result = mysqli_query($con,$sql);

            echo "<table>
            <tr>
            <th>Select</th>
            <th>Package Name</th>
            <th>Package Description</th>
            <th>Price Per Person (€)</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) 
            {
                echo "<tr>";
                echo "<td> <input type='radio' name='orderedpkg[]' value=" . $row['pkg_id'] ."> </td>";
                echo "<td>" . $row['pkg_name'] . "</td>";
                echo "<td>" . $row['pkg_description'] . "</td>";
                echo "<td>" . $row['pkg_price'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        ?>

        <input type="hidden" name="q" value="<?php echo $q;?>">            
        <br>
        <input type="submit" name="formSubmit" value="Select Package & Place Your Order" />

    </form>

</body>

</html>