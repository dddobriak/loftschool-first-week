<?php
require_once('src/functions.php');

$str_array = [
    'Lorem ipsum dolor sit amet.',
    'Eveniet repellendus exercitationem ipsum provident.',
    'Illum expedita natus provident numquam.'
];

task1($str_array, true);
task2('/', 1,2,3);
//task3(5, 5);
task_3_rec(5);

// #4
date_default_timezone_set('Europe/Bucharest');
echo date("d.m.Y H:i");
echo '<br>';
echo date("d.m.Y H:i", strtotime('24.02.2016 00:00:00'));
echo '<br>';

// #5
$str1 = "Карл у Клары украл Кораллы";
echo str_replace('К', '', $str1);
echo '<br>';
$str2 = "Две бутылки лимонада";
echo str_replace('Две', 'Три', $str2);
echo '<br>';

// #6
// $str = "Hello again!";
// $fp = fopen('data.txt', 'a');
// fwrite($fp, $str . "\n");
// fclose($fp);

// read_file('data.txt');