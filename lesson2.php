<?php

$fruits = ['orange', 'apple', 'lemon'];

/**
 * @param array $fruitsArray
 */
function myFirstFunction(/*сообщаем функции что ждём массив */array $fruitsArray):void {
    echo "Fruits: <ul>";
    foreach ($fruitsArray as $fruit) {
      echo "<li>$fruit</li>";
    } 
    echo '</ul>';  
};

myFirstFunction($fruits); // запуск функции

function addNumberColor($num1, $num2, $color = '#ee33ff') {
    $sum = $num1 + $num2;
    echo "Sum is: <span style='color: $color';>\" $sum \"</span><br>";
    // echo "Sum is: <span style='color: $color;'>" . ($num1 + $num2) . "</span><br>";
}

addNumberColor(1,2);

function addNumberColor2($num1, $num2, $color = '#ee33ff') {
  $sum = $num1 + $num2;
  $result = [$sum, $color];
  return $result;
}

$params = addNumberColor2(10,2);
echo "Sum is: <span style='color: $params[1]';>\" $params[0] \"</span><br>";
// echo "Sum is: <span style='color: $color;'>" . ($num1 + $num2) . "</span><br>";


function render(): void {
  $params = addNumberColor2(10,2);
  echo "Sum is: <span style='color: $params[1]';>\" $params[0] \"</span><br>";
  echo 'Render is Ok!';
} 

render();
