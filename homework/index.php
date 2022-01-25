<?php


$cpu = [
    [
        'name' => 'AMD',
        'socket' => 'AM4',
        'frequency' => '3.4Ghz',
        'cores' => 8
    ],
    [
        'name' => 'Intel i7',
        'socket' => '1151',
        'frequency' => '4 Ghz',
        'cores' => 8
    ]
];

$mainboard = [
    [
        'name' => 'MSI',
        'socket' => 'AM4',
        'ramType' => 'DDR4'
    ],
    [
        'name' => 'AsRock',
        'socket' => '1151',
        'ramType' => 'DDR3'
    ]
];

$memory = [
    [   
        'name' => 'Corsair',
        'type' => 'DDR4',
        'memory' => '8 Gb'
    ]   
];

function getComp($cpu, $mainboard, $memory) {
    $result = [];
    foreach($cpu as $cpSocket) {
        foreach($mainboard as $mbSoccket) {
            if ($cpSocket["socket"] === $mbSoccket["socket"]) {
                $result_push($cpSocket["name"], $mbSoccket["name"]);
                echo $cpSocket["socket"];
            };
        };
    };
    return $result; 
};

$result = getComp($cpu, $mainboard, $memory);

print_r($result);

function printDetails($details) {
    foreach($details as $detail) {
        echo '<div style="width: 300px; height: 300px; background-color: lightblue; margin: 0 10px 10px 0">';        
            echo "<h2>" .$detail["name"]. "</h2>";            
            echo "<h4>" .$detail["socket"]. "</h4>";
            echo "<h4>" .$detail["frequency"]. "</h4>";
            echo "<h4>" .$detail["cores"]. "</h4>";
            echo "<h4>" .$detail["ramType"]. "</h4>";
            echo "<h4>" .$detail["type"]. "</h4>";
            echo "<h4>" .$detail["memory"]. "</h4>"; 
        echo '</div>';        
    };
};

echo '<div style="display: flex; flex-wrap: wrap">';
printDetails($cpu);

printDetails($mainboard);

printDetails($memory);

printDetails($result);

echo '</div>';

