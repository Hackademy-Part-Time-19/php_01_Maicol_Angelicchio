<?php

//traccia 1

$intero = 11;
$float = 1.5;
$stringa = "Primo esercizio php!";
$booleano = true;

var_dump($intero);
var_dump($float);
var_dump($stringa);
var_dump($booleano);



//traccia 2

$text1="Marco";
$text2="hai";
$text3="sete";
$text4="?";
$text5="Perchè";
$text6=$text2;
$text7='bevuto';
$text8="tutto";

echo $text1 . ' ' . $text2 . ' ' . $text3 . $text4 . ' ' . $text5 . ' ' . $text6 . ' ' . $text7 . ' ' . $text8;


//Traccia 3

$words1=[
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
        ['oscura',
        'era',
        89,
            ['mezzo',
                ['cammin',
                'Nel',
                    ['selva',
                    'la',
                        ['via',
                        'una',
                        true,
                        ]
                    ],
                ]
            ],
            'ritrovai','per'
        ],'diritta'
    ];

$words2=['elemento1'=>25.89,'elemento2'=>'nostra','elemento3'=>['Virgilio','smarrita','ché']];

$words3=[' ','di',',','.'];

$results = $words1[6][3][1][1].$words3[0].$words1[6][3][0].$words3[0].$words3[1].$words3[0].$words1[6][3][1][0].$words3[0].$words3[1].$words3[0]
.$words2['elemento2'].$words3[0].$words1[2].$words3[0].$words1[4].$words3[0].$words1[6][4].$words3[0].$words1[6][5].$words3[0].$words1[0]
.$words3[0].$words1[6][3][1][2][0].$words3[0].$words1[6][0].$words3[2].$words3[0].$words2['elemento3'][2].$words3[0].$words1[6][3][1][2][1]
.$words3[0].$words1[7].$words3[0].$words1[6][3][1][2][2][0].$words3[0].$words1[6][1].$words3[0].$words2['elemento3'][1].$words3[3];

echo $results;



//Traccia 4

$x = 10;
$y = 20;
$z = "20";
$w = 10;

var_dump($x<$y);
var_dump($x<=$w);
var_dump($y==$z);
var_dump($y===$z);
var_dump($y!==$z);
var_dump($y<$z);