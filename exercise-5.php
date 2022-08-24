<?php
$bmw = [
    'model' => 'X5',
    'speed' => '140',
    'doors' => '5',
    'yaer'  => '2015',
];

$toyota = [
    'model' => 'camry',
    'speed' => '120',
    'doors' => '5',
    'yaer'  => '2010',
];

$opel = [
    'model' => 'Astra',
    'speed' => '105',
    'doors' => '5',
    'yaer'  => '2005',
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];

function car_screen($cars)
{
    foreach ($cars as $name => $car) {
        echo "CAR: $name<br>";
        echo implode(' ', $car) . '<br>';
    }
}