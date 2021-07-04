<?php

/*lesson 1*/

$a = 1; //integer
$b = 2;
echo $a + $b . '<br>';
var_dump($a+$b);

$a = 154.0; //float
$b = 1.54E2;
var_dump($a);
var_dump($b);

$a = 'Letter from friend'; //string
var_dump($a);

$bool = false; //boolean
var_dump($bool);
var_dump(isset($bool));

$null = null; //nul
var_dump($null);
var_dump(isset($null));
$null = '';
var_dump(isset($null));

echo '<hr>';
/*lesson 2*/

$bars1 = array(100, 'псьмо', true); //array
$meshok = [
    'кошелек' => 500,
    'конверт' => 'курсовая работа',
    'чехол' => false,
    'барсетка' => [
        'ipad', 'ipod', ['samsung', 'lenovo']
    ]
];
var_dump($bars1);
var_dump($meshok);

$obj = new stdClass(); //object
var_dump($obj);
$obj->a = 'I am property a';
var_dump($obj);
$obj->b = $meshok;
var_dump($obj);

$f = fopen('text.txt', 'r'); // resource
var_dump($f);

echo '<hr>';
/*lesson 3*/
