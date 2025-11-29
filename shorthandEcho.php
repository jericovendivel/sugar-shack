<?php
$store_name = "Sugon Snack";
$product = "Adobe Express Nodes Tinkercad";
$price = 45;
$quantity = 3;
$total = $price * $quantity;
$thank_you = "Thank you for supporting local sweets";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <title>Shorthand Echo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<h1><?php echo $store_name; ?></h1>

<h2>Order Summary</h2>

<p><strong>Product:</strong> <?php echo $product; ?></p>
<p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
<p><strong>Price per Pack:</strong> ₱<?php echo $price; ?></p>
<p><strong>Total:</strong> ₱<?php echo $total; ?></p>

<p><?php echo $thank_you; ?></p>

</body>
</html>
