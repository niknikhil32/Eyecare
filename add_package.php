<!-- Done -->

<?php  
include("connect.php");
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Manage Packages</title>


  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 25%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

</style>


</head>

<body background="images/admin.jpg">

<form name="register", action="package_insert.php",  method="post">

  <div class="container">
    <h1>ADD PACKAGE</h1>

    <hr>

    <label for="pkg_name"><b>Package Name</b></label>
    <input type="text" placeholder="Enter Package Name" name="pkg_name" required>

    <label for="pkg_desc"><b>Brief Package Description </b></label>
    <input type="text" placeholder="Enter Package Description" name="pkg_desc" required>

    <label for="pkg_price"><b>Price in Euros </b></label> <br><br>
    <input type="number" step="0.1" placeholder="Enter Package Price" name="pkg_price" required>

    <br><br>

    <div class="clearfix">
      <button type="submit" class="signupbtn">ADD Package</button>
    </div>

</div>

</form>


  <form action="admin.php">
        <input type="submit" value="Go to Admin Page" />
  </form>

<br>

<form action="index.html">
<input type="submit" value="Go to Home Page" />
</form>

</body>
</html>