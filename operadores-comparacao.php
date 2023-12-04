<?php

$a = 3;
$b = 6;
$c = '3';

$igual = $a == $b;
echo "a == b? ";
var_dump($igual);

$igual = $a == $c;
echo ' <hr> a == c? ';
var_dump($igual);

echo ' <hr> a === c? ';
$identico = $a === $c;
var_dump($identico);


