<?php  
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  
  <style>
    table 
    {
        width: 50%;
        border-collapse: collapse;
        table-layout: fixed;
    }
    table, td, th 
    {
        border: 1px solid black;
        padding: 5px;
    }
    th {text-align: left;}
  
    .container 
    {
      width: 400px;
      clear: both;
    }
    .container input
    {
      width: 400px;
      clear: both;
    }
  





  </style>

</head>

<body background="images/admin.jpg">
    
<h2>Confirm Your Order</h2>

  <form name ="order", action="orderplaced.php", onsubmit = "return validateForm()", method="post">

    <?php

    $total = 0;
    $cli_id = $_POST['q'];

    $ordereditem = $_POST['orderedpkg'];

    if(empty($ordereditem)) 
    {
      echo("You have not selected any package.");
    } 
    else 
    {
      echo "<table>
      <tr>
      <th>Package Name</th>
      <th>Package Details</th>
      <th>Price Per Person (€)</th>
      </tr>
      </table>";

      if ($con->connect_error) 
      {
          die("Connection failed: " . $con->connect_error);
      } 
      
      $sql="SELECT pkg_name, pkg_description, pkg_price FROM packages WHERE pkg_id  = '$ordereditem[0]';";
      $result = mysqli_query($con,$sql);
  
      while($row = mysqli_fetch_array($result)) 
      {
          echo "<table>";
          echo "<tr>";
          echo "<td>" . $row['pkg_name'] . "</td>";
          echo "<td>" . $row['pkg_description'] . "</td>";
          echo "<td>" . $row['pkg_price'] . "</td>";          
          echo "</tr>";        
          $total = $total + $row['pkg_price'];            
          $name = $row['pkg_name'];    
          $desc = $row['pkg_description'];    
          $price = $row['pkg_price'];   
      }
      echo "</table>";
          
      echo "<div class='container'>";

      echo "<br>";
      echo "<label>Enter your Name : </label>";
      echo "<input type='text' name = 'custname'>";

      echo "<br>";
      echo "<br>";
      echo "<label>Enter your Address : </label>";
      echo "<input type='text' name = 'custaddress'>";

      echo "<br>";
      echo "<br>";
      echo "<label>Your Mobile Number : </label>";
      echo "<input type='number' name = 'custnumber'>";

      echo "</div>";
   
      echo "<h2 name ='total'> Total Cost (€): " . $total . "</h2> ";

    }
    ?>

    <br>

    <!-- Variables being passed to next page-->
    
    <input type="hidden" name="total" value="<?php echo $total;?>">
    
    <input type="hidden" name="cl_id" value="<?php echo $_POST['q'];?>"> 
    
    <input type="hidden" name="pkg_name" value="<?php echo $name;?>">
    <input type="hidden" name="pkg_desc" value="<?php echo $desc;?>">
    <input type="hidden" name="pkg_price" value="<?php echo $price;?>">

    <input type="submit" value="Confirm order">
  
  </form>

  

</body>
</html>
