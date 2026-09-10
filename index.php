<?php
 
function hello() {
    var_dump('Hello');
}
 
hello();
 
function helloName($name='Nameless', $age='unknown') {
    var_dump("Hello, $name! You are $age years old!");
}
 
helloName('Mats', 20);

function square($a) {
    if($a<0) {
        return 0;
    }
    return $a * $a;
}

$answer = square(2);
var_dump($answer);
var_dump(square(4));

function recursion($i) {
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}

recursion(0);