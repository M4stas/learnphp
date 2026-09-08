<?php
$num = 10;
if($num > 10) {
    var_dump('bigger');
}

if($num > 10) {
    var_dump('bigger');
} else {
    var_dump('Smaller');
}

if($num > 10) {
    var_dump('bigger');
} elseif($num < 10) {
    var_dump('Smaller');
} else {
    var_dump('equal');
}

$day = intval(date('w'));
$day = (int) (date('w'));
var_dump($day);
if (day == 0) {
    var_dump('Sunday');
} elseif ($day == 1) {
    var_dump('Monday');
} elseif ($day == 2) {
    var_dump('Tuesday');
} elseif ($day == 3) {
    var_dump('Wednesday');
} elseif ($day == 4) {
    var_dump('Thursday');
} elseif ($day == 5 || $day == 6) {
    var_dump('Party day');
} elseif ($day == 6) {
    var_dump('Saturday');
} else {
    var_dump('weird');
}

switch ($day) {
    case 0:
        var_dump('Sunday');
        break;
    case 1:
        var_dump('Monday');
        break;
    case 2:
        var_dump('Tuesday');
        break;
    case 3:
        var_dump('Wednesday');
        break;
    case 4:
        var_dump('Thursday');
        break;
    case 5:
    case 6:
        var_dump('Party day');
        break;
    default:
        var_dump('weird');
}