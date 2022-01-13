<?php
$age = 32;
echo $age;
echo '<br>';
$myName = 'Hell';
$age = 'тридцать';
echo $age;
echo "<p>Hello, World! My name is <span>\"{$myName}\"</span>!<p>";
// ассоциативные массивы
//              // ключ       значение
// $fruits = array('yellow'=>'banana');  СТАРЫЙ ВАРИАНТ ЗАПИСИ

$fruits = ['yellow'=>'banana', 'red' => 'cherry', 'black' => 'man'];  // лучше так
echo '<br> Array <br>';
print_r($fruits);

echo '<br> asort <br>';
asort($fruits); // сортировка по индексу
print_r($fruits);
echo '<br> ksort <br>';
ksort($fruits); // сортировка по индексу
print_r($fruits);
echo '<br> arsort <br>';
arsort($fruits); // от большего
print_r($fruits);
echo '<br> krsort <br>';
krsort($fruits); // к большему
print_r($fruits);
echo '<br>';
echo '<br>';
echo '<br>';

foreach ($fruits as $fruit) {
    echo "$fruit <br>";
};
echo '<br>';
echo '<br>';
echo '<br>';
// работа с массивами:
echo count($fruits);  // выводит длину массива(количество элементов)
// индексные массивы
echo '<br>';
echo '<br>';
echo '<br>';
$newArray = ['phone', 'nettop', 'laptop'];
sort($newArray);   // сортировка по значению
print_r($newArray);
echo '<br>';
rsort($newArray);  // сортировка по значению
print_r($newArray);
echo '<br>';
echo '<br>';
echo '<br>';
foreach ($fruits as $k => $v) {
    echo "Key: \"$K\" Value:\"$v\"";
};