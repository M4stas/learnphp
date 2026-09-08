<?php
$test = array(1, 2, 3);
$test = [1, 2, 3];
$test = [1,'asdas', false, [1,2,3]];
$test = [
    1,
    'name' => 'Mats',
    'age'=> 18,
    3,
    'aadsas',
    true,
    100 => 'lol',
    'troll',
];
 
 
 
 
var_dump($test['101']);
array_push($test, 'added', 'shimishimiaa', 3);
$test[] = 'new valus';
$test['name'] = 'Mats';
$test[1] = 9999;
var_dump($test);
unset($test[3]);