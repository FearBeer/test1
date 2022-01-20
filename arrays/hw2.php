<?php 

$array = [1,4,2,6,9,10,2,3,4,0];

echo "<h1> Input Array: ";
    foreach ($array as $item ) {
        echo "$item ";
    }
echo "</h1>";

echo "<h2> Следующий больше предыдущего: ";
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] > $array[$i-1]) {
            echo "$array[$i] ";
        }
    }
    
echo "</h2>";

// function sum($carry, $item)
// {
//     $carry += $item;
//     return $carry;
// }

// echo "<h2>";

// echo "СУММА: ";
// echo array_reduce($array, "sum");
// echo '<br>';
// echo "Среднее: ";
// echo array_reduce($array, "sum")/count($array);
    
// echo "</h2>";

function averageItems($array) {
    $avrgArray = sumItems($array) / count($array);
    return $avrgArray;
}

function sumItems($array) {
    return array_sum($array);
}

function printElement($array) {
    echo '<h3> Sum of elements: '  .sumItems($array). '</h3>' ;
    echo '<h3> Sum of elements: '  .averageItems($array). '</h3>' ;

}

printElement($array);



