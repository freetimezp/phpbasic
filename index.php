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
/*lesson 4*/

$language = 'php';

$str = 'I am learning "PHP"';
var_dump($str);
$str = 'I am learning $language';
var_dump($str);
$str = "I am learning $language";
var_dump($str);
$str = 'I am learning ' . $language;
var_dump($str);

$str_end = '... I know php';

$final = $str . $str_end;
var_dump($final);

$arr['language'] = 'php';

$str = "I am learning {$arr['language']}";
var_dump($str);

$final2 = 'Hello ';
$str2 = 'php';
$final2 .= $str2;
var_dump($final2);
