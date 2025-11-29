<?php
require "includes/header.php";
require "includes/helpers.php";

$store_name = "Sugar Shack";
$owner = "Vendivel Jerico   ";
$items_available = 120;
$best_sellers = ["Toy", "NY", "Chorp", "Crinkle Cookies"];
$branches = ["Manila", "Cebu", "Taguig", "Davao"];
?>

<h1><?php echo $store_name; ?></h1>
<p>Owner: <?php echo $owner; ?></p>
<p>Items Available: <?php echo $items_available; ?></p>

<h2>Best Sellers</h2>
<ul>
<?php foreach ($best_sellers as $item): ?>
    <li><?php echo $item; ?></li>
<?php endforeach; ?>
</ul>

<h2>Branches</h2>
<ul>
<?php foreach ($branches as $branch): ?>
    <li><?php echo $branch; ?></li>
<?php endforeach; ?>
</ul>

<h2>Ready to Order?</h2>
<p><a href="ExpressionsAndOperators.php">Start Order →</a></p>

<?php require "includes/footer.php"; ?>
