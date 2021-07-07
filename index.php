<?php
/*lesson 11*/

$a = foo();

echo $a;

function foo($num1 = 1, $num2 = 2, $num3 = 3) {
    return $num1 + $num2 + $num3 . '<br>';
}

echo foo(50,50,50   );

echo '<hr>';
/*lesson 12*/

$glob = 'Masha';

function hello($str) {
    global $glob;
    echo $str . ' ' . $glob . '<br>';
}

$hello = 'hello';
$hello1 = 'hi';
hello($hello);
hello($hello1);

$glob = 'Masha';

$foo = function ($str) use($glob) {
    echo '<br>' . $str . ' ' . $glob , '<br>';
    $glob = 'Maxim';
};

$foo('Hello');

echo '<hr>';
/*lesson 13*/