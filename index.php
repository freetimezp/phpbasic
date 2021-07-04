<?php

/*lesson 3*/
$a = 4;
$b = 2;

$c = $a + $b;
var_dump($c);

$c = $a - $b;
var_dump($c);

$c = $a * $b;
var_dump($c);

$c = $a / $b;
var_dump($c);

$d = 1;
$c = $d + $a / $b;
var_dump($c);
$c = ($d + $a) / $b;
var_dump($c);

$d += $a; // $d = $d + $a
var_dump($d);

$d -= $a;
var_dump($d);
$d *= $a;
var_dump($d);
$d /= $a;
var_dump($d);

$d++; // $d-- --$d ++$d
var_dump($d);

$d = 1;

$d += $d++ + ++$d; // $d += 1 + 3; // 7
var_dump($d);

echo '<hr>';