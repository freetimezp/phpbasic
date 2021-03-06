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

echo '<hr>';
/*lesson 7*/

$a = 1;

if($a == 1) {
    echo 'yes';
}

echo '<hr>';

$a = '1';

if($a === 1) {
    echo 'yes';
}

echo '<hr>';

$a = '1';

if($a !== 1) {
    echo 'yes';
}elseif($a === 2) {
    echo 3;
}else{
    echo 'no';
}

echo '<hr>';

$a = 1;
$b = 4;
$c = 5;

if($a === 1 && $b === 2 || $c === 3) {
    echo '123';
}else{
    echo '321';
}

echo '<hr>';

$a = 2;

$d = $a === 2 ? 'yes' : 'no';
echo $d;
var_dump($d);

$d = $a === 2 ?: 'no';
var_dump($d);

$d = $a ?: 'no';
var_dump($d);

echo '<hr>';
/*lesson 8*/

$b = 2;

switch($b) {
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 'default';
}
echo '<hr>';

switch(true) {
    case $b === 1:
        echo 1;
        break;
    case $b === 2:
        echo 2;
        break;
    case $b === 3:
        echo 3;
        break;
    default:
        echo 'default';
}

echo '<hr>';
/*lesson 9*/

for($i = 0; $i < 10; $i++) {
    echo 222 . '<br>';
}

echo '<hr>';

$a = 0;
for(;;) {
    echo 333 , '<br>';
    $a++;
    if($a === 10) {
        break;
    }
}

echo '<hr>';

$i = 0;

while($i < 10) {
    echo 444 . '<br>';
    $i++;
}

echo '<hr>';

$i = 0;

do {
    echo 555 . '<br>';
    $i++;
}while($i < 10);

echo '<hr>';
/*lesson 10*/

$meshok = [
    '??????????????' => 500,
    '??????????????' => '???????????????? ????????????',
    '??????????' => false,
    '????????????????' => [
        'ipad', 'ipod', ['samsung', 'lenovo']
    ]
];

foreach ($meshok as $key => $item) {
    echo '$key - ';
    var_dump($key) . '<br>';
    echo '$item - ';
    var_dump($item) . '<br>';
}

for($i = 0; $i < count($meshok['????????????????']); $i++) {
    var_dump($meshok['????????????????'][$i]) . '<br>';
}
echo '<br>';

foreach ($meshok as $key => $item) {
    $meshok[$key] .= '!!!';
    echo $meshok[$key] , '<br>';
    echo '$item - ' . $item . '<br>';
}




