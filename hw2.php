<?php 

$array = [1,4,2,6,9,10,2,3,4,0];

echo "<h1> Input Array: ";
    foreach ($array as $item ) {
        echo "$item ";
    }
echo "</h1>";

echo "<h2> Следующий больше предыдущего: ";
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $array[$i+1]) {
            echo "$array[$i]";
        }
    }
    
echo "</h2>";
