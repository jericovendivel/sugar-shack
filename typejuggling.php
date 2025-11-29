<?php
// Variables
$price = 74;             
$quantity = 20;             
$total = $price * $quantity; 

$bool_add = true;           
$concat = "Candy";           

$subtotal = 120 + 30;        
$tax = $subtotal * 0.12;    
$total_with_tax = $subtotal + $tax;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Typo Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1>Sugar Shack</h1>
<h2>Typo Juggling Demo</h2>

<p>Price: <?php echo $price; ?></p>
<p>Quantity: <?php echo $quantity; ?></p>
<p>Total (price × quantity): <?php echo $total; ?></p>

<p>Sample Boolean Value: <?php echo $bool_add ? "true" : "false"; ?></p>

<p>Concat Example: <?php echo $concat; ?></p>

<p>Subtotal (120 + 30): <?php echo $subtotal; ?></p>
<p>Tax (12%): <?php echo $tax; ?></p>
<p>Total with Tax: <?php echo $total_with_tax; ?></p>

</body>
</html>
