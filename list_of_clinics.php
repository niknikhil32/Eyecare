<!-- done -->

<html>
<head> 
<title> List of eye Clinics in Dublin</title>

<style>
        table {
        border-collapse: collapse;
        width: 50%;
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

    </style>


</head>

<body>

<?php

    include 'connect.php';

    if (!$con) 
    {
        die('Could not connect: ' . mysqli_error($con));
    }

    $sql="SELECT * FROM clinics";
    $result = mysqli_query($con,$sql);

    echo "<h1>List of Registered Clinics in Dublin</h1>";

    echo "<table>
    <tr>
    <th>Clinic Name</th>
    <th>Clinic Mobile</th>
    <th>Clinic Address</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result)) 
    {
        echo "<tr>";
        echo "<td>" . $row['cl_name'] . "</td>";
        echo "<td>" . $row['cl_mobile'] . "</td>";
        echo "<td>" . $row['cl_address'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    ?>
    <br>
    <form action="index.html">
        <input type="submit" value="Go To Home Page" />
    </form>

</body>
</html>


