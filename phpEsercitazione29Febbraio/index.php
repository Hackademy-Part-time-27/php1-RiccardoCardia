<?php

// Traccia 1

$users = [
    [
        'name' => 'Davide',
        'surname' => 'Poggi',
        'gender' => 'male',
    ],
    [
        'name' => 'Riccardo',
        'surname' => 'Cardia',
        'gender' => 'male',
    ],
    [
        'name' => 'Anna',
        'surname' => 'Ferrucci ',
        'gender' => 'female',
    ],
    [
        'name' => 'Ludovica',
        'surname' => 'Lecis',
        'gender' => 'female',
    ],
    [
        'name' => 'Camilla',
        'surname' => 'Zonza',
        'gender' => 'female',
    ],
    [
        'name' => 'Giovanni',
        'surname' => 'Medda',
        'gender' => 'male',
    ]


];


foreach ($users as $user) {
    if ($user['gender'] == 'male') {
        echo 'Buongiorno Sig. ' . $user['name'] . ' ' . $user['surname'] . '!!' . "\n";
    } else if ($user['gender'] == 'NB') {
        echo 'Buongiorno ' . $user['name'] . ' ' . $usern['surname'] . '!' . "\n";

    } else {
        echo 'Buongiorno Sig.ra ' . $user['name'] . ' ' . $user['surname'] . '!' . "\n";
    }
}

//traccia 2
//$numbers = [20,34,56,78,24,12,9,76,89,150];
$numbers = [2, 3, 4, 5, 6, 7, 8, 9, 10];
$total = 0;
$pari = 0;
foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $total = $total + $number;
        $pari++;
    }
    ;
}
;

$mediapari = ($total / $pari);
echo $total . "\n";
echo $pari . "\n";
echo $mediapari . "\n";

//traccia 3

$i = 1;
while ($i <= 100) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo 'HACKADEMY ' . $i . ' è multiplo di 5 e di 3' . "\n";

    } else if ($i % 3 == 0) {
        echo 'PHP ' . $i . ' è multiplo di 3' . "\n";
    } else if ($i % 5 == 0) {
        echo 'JAVASCRIPT ' . $i . ' è multiplo di 5' . "\n";
    }
    $i++;
}
//Creare una lista di soli numeri pari da 1 a 100
$i = 1;
$numeripari = [];
$numeridispari = [];
while ($i <= 100) {
    if ($i % 2 == 0) {
        array_push($numeripari, $i);
    } else {
        array_push($numeridispari, $i);

    }
    $i++;
}

var_dump($numeripari);
var_dump($numeridispari);

//riordinare in ordine decrescente una lista di numeri
$lista = [45, 36, 78, 100, 22, 34, 54, 67];
$listaordinata = [];
$lunghezzalista = count($lista);

$j = 0;
$k = 0;

$numeromaggiore = $lista[0];

while ($k < $lunghezzalista) {

    foreach ($lista as $key => $item) {
        if ($item >= $numeromaggiore) {
            $numeromaggiore = $item;
            $j = $key;
        }
    }
    unset($lista[$j]);
    array_push($listaordinata, $numeromaggiore);
    if(count($lista)!=0){
        $numeromaggiore = $lista[array_key_first($lista)];
    }
    $k++;

}

var_dump($listaordinata);
var_dump($lista);


$lista1=[-2,56,7,8,90,-110,76,45,67];
$listadecrescente=[];
$contatore=0;
$index;
$numeropiugrande=$lista1[0];
$lunghezza=count($lista1);

while($contatore<$lunghezza) {
    foreach($lista1 as $key => $item){
        if($item>=$numeropiugrande){
            $numeropiugrande=$item;
            $index=$key;
        }
    }
    array_push($listadecrescente, $numeropiugrande);
    unset($lista1[$index]);
    $contatore++;
    $numeropiugrande=$lista1[array_key_first($lista1)];

}
$listacrescente=array_reverse($listadecrescente);

var_dump($listadecrescente);
var_dump($listacrescente);