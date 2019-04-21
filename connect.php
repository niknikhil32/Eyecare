<!-- Done -->

<?php

// servername
$servername = "localhost";

// database name for the project
$dbname = "eyecare";

// database user name name - by default "root"
$server_user = "root";

// server password - be default it is empty
$server_pass = "";

// creating connection object
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>