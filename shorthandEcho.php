<?php
require "includes/header.php";
require "includes/helpers.php";
session_start();

$store = "Sugar Shack";

$product  = $_SESSION['product']  ?? "Unknown Item";
$quantity = $_SESSION['quantity'] ?? 0;
$total    = $_SESSION['final_total'] ?? 0;

?>

<h1><?=$store?></h1>
<h2>Order Summary</h2>

<p><strong>Product:</strong> <?=$product?></p>
<p><strong>Quantity:</strong> <?=$quantity?></p>
<p><strong>Total:</strong> ₱<?=$total?></p>

<p>Thank you for supporting local sweets!</p>

<a href="typejuggling.php">See System Info →</a>

<?php require "includes/footer.php"; ?>
