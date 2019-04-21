<!-- Done-->

<?php
include 'connect.php';

  // htmlspecialchars converts special characters entered in fields except phone to HTML characters
  $name = htmlspecialchars($_POST['cliname']);
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);
  $address = htmlspecialchars($_POST['address']);
  $phone = $_POST['phone'];

  // to handle special characters during insert
  $name = mysqli_real_escape_string($con, $_POST['cliname']);
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $address = mysqli_real_escape_string($con, $_POST['address']);

  // query to insert clinic into the table
  $sql = "INSERT INTO clinics (cl_name, username, password, cl_address, cl_mobile) 
          VALUES ('$name', '$username', '$password', '$address', $phone);";

  if ($con->query($sql) === TRUE) 
  {
    echo "<script type='text/javascript'>
    alert('Clinic Registered Successfully');
    window.location='index.html';
    </script>";
  } 

  else 
  {
    echo "Error: " . $sql . "<br>" . $con->error;
  }

?>
