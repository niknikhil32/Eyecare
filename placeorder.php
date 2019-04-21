<?php  
include("connect.php");
?>

<!DOCTYPE html>
<html>
<head>

<script>
    function showpkg(str) 
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
                // calling orderpkg.php with clinic id (q) as a parameter
                xmlhttp.open("GET","orderpkg.php?q="+str,true);
                xmlhttp.send();
            }
        }       
</script>

<style>
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
            box-shadow: 10px 10px yellow;
            }

</style>

</head>


<body background="images/admin.jpg">

<h2>Select Clinic & Package from Dropdown to place an order: </h2>

<?php
     $result = mysqli_query($con, "SELECT cl_id, cl_name FROM clinics;");

    // showpkg function written in script above gets called when we select clinic
    echo "<select name='cliniclist' id='clinicdropdown' onchange = 'showpkg(this.value)'>";
    echo "<option value= ''> Choose Clinic from fropdown for Your Order </option>";

    while ($row = mysqli_fetch_array($result))
    {
        echo "<option value='" . $row['cl_id'] ."'>" . $row['cl_name'] . "</option>";
    }
    echo "</select>";

?>
 
<br> <br>
<div id="txtHint"><b>Packages for selected Clinic will be listed below </b></div>

<br>

<a href="index.html" class="button">Back to Home Page</a>

</body>

</html>