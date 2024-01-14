<?php
require_once 'functions.php';

$id = 2; // of ander id-nummer van een product
$product = select_product($id);

if ($product) {
    $product_name = $product['product_name'];
    $price_per_piece = $product['price_per_piece'];
    $description = $product['description'];
} else {
    echo "0 results";
}
?>

<form method="post" action="">
    <label for="product_name">Product naam:</label><br>
    <input type="text" id="product_name" name="product_name" value="<?php echo $product_name; ?>"><br>
    <label for="price_per_piece">Prijs per stuk:</label><br>
    <input type="text" id="price_per_piece" name="price_per_piece" value="<?php echo $price_per_piece; ?>"><br>
    <label for="description">Omschrijving:</label><br>
    <textarea id="description" name="description"><?php echo $description; ?></textarea><br>
    <input type="submit" name="submit" value="Submit">
</form>