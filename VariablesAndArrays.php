<?php
$store_name = "Sugar Shack";
$owner = "Vandtvel Jarico";
$items_available = 120;
$best_sellers = ["Toy", "NY", "Chorp", "Crinkle Cookies"];
$branches = ["Manila", "Cebu", "Taguig", "Davao"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables & Arrays</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

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

</body>
</html>
