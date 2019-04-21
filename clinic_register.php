<!-- Done-->

<?php  
include("connect.php");
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Clinic Registration</title>

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


<body>

<form name="register", action="add_clinic.php",  method="post">

  <div class="container">
    <h1>Sign Up - Clinic</h1>
    <p>Please fill in this form to register your clinic.</p>
    <hr>

    <label for="cliname"><b>Clinic Name</b></label>
    <input type="text" placeholder="Enter Clinic Name" name="cliname" required>

    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name for Login" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Clinic Address" name="address" required>

    <label for="phone"><b>Clinic Mobile Number</b></label>
    <input type="number" placeholder="Enter Mobile" name="phone" required>

    <div class="clearfix">
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
    <p>By creating an account you agree to our Terms & Privacy.</p>
</div>

</form>

<form action="index.html">
<input type="submit" value="Go Home" />
</form>

</body>
</html>
