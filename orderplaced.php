<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body background="images/admin.jpg">
    
    <?php
    include('connect.php');
    session_start();

    $amount = $_POST['total'];
    $custname = $_POST['custname'];
    $custaddress = $_POST['custaddress'];
    $phone = $_POST['custnumber'];
    $cl_id = $_POST['cl_id'];
    $pkg_name = $_POST['pkg_name'];
    $pkg_desc = $_POST['pkg_desc'];
    $pkg_price = $_POST['pkg_price'];

    // to handle special characters during insert
    $custname = mysqli_real_escape_string($con, $_POST['custname']);
    $custaddress = mysqli_real_escape_string($con, $_POST['custaddress']);
    $pkg_name  = mysqli_real_escape_string($con, $_POST['pkg_name']);
    $pkg_desc  = mysqli_real_escape_string($con, $_POST['pkg_desc']);


    $sql = "INSERT INTO orders (cl_id, pkg_name, pkg_description, pkg_price, cust_name, cust_mobile, cust_address, ord_status) 
    VALUES ($cl_id,'$pkg_name','$pkg_desc',$pkg_price,'$custname',$phone,'$custaddress','New')";

    if ($con->query($sql) === TRUE) 
    {
        $last_id = $con->insert_id;
        echo "Order Placed successfully. Order ID is: " . $last_id;
    } else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    echo "<br>";
    echo "<br>";
    echo "<a href='track.php'>Track your order</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='placeorder.php'>Place another order</a>";
    echo "<br>";
    echo "<br>";
    echo "<a href='index.html'>Go to Home</a>";

    ?>

</body>
</html>
