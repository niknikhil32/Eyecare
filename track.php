<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 	

    <!-- Page Title -->
    <title>Order Tracking</title>


        <style> 
        input[type=number] {
        width: 20%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid red;
        border-radius: 4px;
        }


        .button {
            background-color: green;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: left;
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

<h2>Enter Order ID for Tracking your Order</h2>

<form name="track", action="searchorder.php", method="post">
  <label for="orderid">Order ID</label>
  <input type="number" id="orderid" name="orderid"> <br>
  <input type="submit" class="button" value="Track Your Order">
</form>

</body>

<br>
<a href="index.html" class="button">Back to Home</a>


</html>