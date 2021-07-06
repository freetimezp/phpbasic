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

echo '<hr>';
/*lesson 5*/

$long_text = <<< HEREDOC
"I am learning {$arr['language']}"
'I am learning "PHP"';
HEREDOC;
var_dump($long_text);

$long_text = `dir`;
var_dump($long_text);

echo '<hr>';
/*lesson 6*/

$a = 1;
$str = '2.2E2st2ring';

$final = $a + $str;
var_dump($final);
$final = $a . $str;
var_dump($final);

var_dump($str);

$str = (float)$str;

var_dump($str);