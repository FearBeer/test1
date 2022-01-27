<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
</head>
<body>
    <form method="post">
        <label for="name">Name of product</label>
        <input type="text" name="name" placeholder="Name of product">

        <label for="price">Price of product</label>
        <input type="text" name="price" placeholder="Price of product">

        <button name="add" value="Add"> ADD </button>
    </form>
</body>
</html>

<?php
require_once('Classes/Product.php');
$products = [];
if (isset($_POST['add'])) {
    $products[] = array_push($products, new Product($_POST['name'], $_POST['price']));
    foreach($products as $product) {
        echo $product->getProduct();
    }
}


