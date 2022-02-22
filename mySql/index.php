<?php 
// 1й вариант подключения\ к ДБ
// $dataBase = mysqli_connect('localhost', 'root', '');
// $shop = mysqli_select_db($dataBase, 'shop');
// $products = mysqli_query($dataBase, 'SELECT * FROM product;');

// 2й вариант подключения\ к ДБ
$shop = new mysqli('localhost', 'root', '', 'shop');
$products = $shop->query('SELECT * FROM product;');
echo '<div style="display: flex; flex-direction: column; align-items: center;">';
foreach ($products as $product) {
    echo '<div style="margin-bottom: 5px; background-color: lightgray; width: 300px; height: 50px; display: flex;
    justify-content: center; align-items: center">' . $product['id'] . '.' . ' ' . $product['name'] . '</div>';
};

// далее для каждого запроса своё имя и выводим

echo '<h2>Первое</h2>';

$productsWithoutCategory = $shop->query('SELECT `product`.`name`, `product`.`price`, `category`.`name` AS `category` FROM `product`
LEFT JOIN `category`
ON `category`.`id` = `product`.`id_category`
WHERE `product`.`id_category` IS NULL'
);

foreach ($productsWithoutCategory as $product) {
    echo '<div style="margin-bottom: 5px; background-color: lightgray; width: 300px; height: 50px; display: flex;
    justify-content: center; align-items: center">' . $product['name'] . '.' . ' ' . $product['price'] . $product['category'] . '</div>';
};


echo '<h2>2</h2>';

$productsWithCategory = $shop->query('SELECT `product`.`name`, `product`.`price`, `category`.`name` AS `category` FROM `product`
LEFT JOIN `category`
ON `category`.`id` = `product`.`id_category`'
);

foreach ($productsWithCategory as $product) {  
    echo '<div style="margin-bottom: 5px; background-color: lightgray; width: 300px; height: 50px; display: flex;
    justify-content: center; align-items: center">' . $product['name'] . ':' . ' ' . $product['price'] . '     '.  $product['category'] . '</div>';
};

echo '</div>';