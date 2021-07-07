<?php
/*lesson 11*/

$a = foo();

echo $a;

function foo($num1 = 1, $num2 = 2, $num3 = 3) {
    return $num1 + $num2 + $num3 . '<br>';
}

echo foo(50,50,50   );
