<?php
//Prima traccia
$integer = 6;
$float = 6.2;
$string = 'Ciao sono una stringa';
$boolean = true;

echo gettype($integer) . "\n";
echo gettype($float) . "\n";
echo gettype($string) . "\n";
echo gettype($boolean) . "\n";

var_dump($integer);
var_dump($float);
var_dump($string);
var_dump($boolean);

//Seconda traccia

$text1 = "Marco";
$text2 = "hai";
$textModificato = strtoupper($text2[0]) . "ai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$te_xt6 = '$text2';
$text7 = 'bevuto';
$text8 = "tutto";
echo "$text1 $textModificato $text3 ? $text5 $text2 $text7 $text8 ? ";

//Terza traccia 


$words1 = [
    'una',
    67,
    'vita',
    'colle',
    'mi',
    'rosso',
    [
        'oscura',
        'era',
        89,
        [
            'mezzo',
            [
                'cammin',
                'Nel',
                [
                    'selva',
                    'la',
                    [
                        'via',
                        'una',
                        true,
                    ]
                ],
            ]
        ],
        'ritrovai',
        'per'
    ],
    'diritta'
];

$words2 = [
    'elemento1' => 25.89,
    'elemento2' => 'nostra',
    'elemento3' => [
        'Virgilio',
        'smarrita',
        'ché'
    ]
];



array_push($words1, 'di');
array_push($words1,'via' );
print_r($words1);

$results = $words1[6][3][1][1].' '. $words1[6][3][0]. ' '. $words1[8]. ' '. $words1[6][3][1][0]. ' '. $words1[8]. ' '. $words2['elemento2']. ' ' . $words1[2]. ' '. $words1[4]. ' '. $words1[6][4]. ' '.  $words1[6][5]. ' '. $words1[6][3][1][2][2][1]. ' ' . $words1[6][3][1][2][0] . ' ' . $words1[6][0]. ', '. $words2['elemento3'][2]. ' ' . $words1[6][3][1][2][1]. ' '. $words1[7]. ' '. $words1[9]. ' '. $words1[6][1]. ' '. $words2['elemento3'][1]  ;
echo $results;


