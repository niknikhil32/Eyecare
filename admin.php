<!-- Done -->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

<style>
.button {
  background-color: white;
  border: none;
  color: green;
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


    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 	

    <!-- Page Title -->
    <title>Administer Your Clinic</title>
    <!-- Favicon - Title page icon -->
    <link rel="shortcut icon" href="assets/images/logo/eyelogo.png" type="image/x-icon">
</head>

<body background="images/admin.jpg">    
    
    <h2>    
    <?php
    // to fetch session variables that were set on the previous page
    echo " Manage your clinic's packages and orders from customers" . "<br>";
    ?>
    </h2>
    
    <a href="packages.php" class="button">Manage Your Clinic's Packages</a> <br><br>
    <a href="orders.php" class="button">Manage Your Incoming Orders</a> <br><br>
    <a href="logout.php" class="button">Logout & Go Back to Home Page</a>
    
</body>
    
</html>









