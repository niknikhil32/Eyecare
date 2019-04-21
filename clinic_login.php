<!-- Done -->

<?php
   include("connect.php");
   session_start(); 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <title>Clinic Login</title>

  <style type="text/css">
    form    
    {
        display: inline-block;
    }
</style>


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

.button1 {
            background-color: grey;
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
            }


button {
  background-color: grey;
  border: none;
  color: white;
  padding: 15px 32px;
  margin: 4px 2px;
  font-size: 20px;
  border: none;
  cursor: pointer;
  width: 200px;
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

input[type=text] {
  border: 2px solid red;
  border-radius: 4px;
}

input[type=password] {
  border: 2px solid red;
  border-radius: 4px;
}
</style>

</head>


<body>

<form name="login", action="check_credentials.php",  method="post">

  <div class="container">
    <h1>Login - Clinic</h1>
    
    <hr>


    <label for="username"><b>User Name</b></label>
    <input type="text" placeholder="Enter User Name for Login" name="username" required>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>


    <div class="clearfix">
      <button type="submit" class="signupbtn">LOGIN</button>
    </div>
  
</div>

</form>

<br>

<a href="index.html" class="button1">Go Home</a>
<a href="clinic_register.php" class="button1">Sign Up</a>


</body>

</html>
