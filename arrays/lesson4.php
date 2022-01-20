<?php 

// дз 3: массивы с фигруками

function getFigures():array {
    $figures = [
        
        [
            'name' => 'circle',
            'width' => '40px',
            'height' => '40px',
            'background-color' => 'green',
            'position' => 'absolute',
            'top' => 25,
            'left' => 25,
            'border-radius' => '50%'
        ],

        [
            'name' => 'square',
            'width' => '40px',
            'height' => '40px',
            'background-color' => 'red',
            'position' => 'absolute',
            'top' => 60,
            'left' => 60,
            'border-radius' => 0
        ],

        [
            'name' => 'rounded-square',
            'width' => '40px',
            'height' => '40px',
            'background-color' => 'blue',
            'position' => 'absolute',
            'top' => 50,
            'left' => 150,
            'border-radius' => '10%'
        ],        
    ];
    return $figures;
};

function printElement() {
    
    $figures = getFigures();
    foreach ($figures as $prop) {
       
        echo '<div style = "width:' .$prop["width"].
        '; height:' .$prop["height"].
        '; background-color:' .$prop["background-color"]. 
        '; position:' .$prop["position"].
        ';top:' .$prop["top"].
        ';left:' .$prop["left"].
        ';border-radius:' .$prop["border-radius"].
        ' "></div> ';        
    };
    
};

printElement();
