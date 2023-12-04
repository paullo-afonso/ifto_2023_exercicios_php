<?php

$semparentese = 5 + 4 * 3;
echo $semparentese.'<hr>';
$comparentese = (5 + 4) * 3;
echo $comparentese.'<hr>';

$x = 5;
$y = 2 * ++$x;
echo $y.'<hr>';

$resultado = 5+9>12;
var_dump($resultado).'<hr>';

$a = true;
$b = false;
$c = false;
$resultado_sem_parentese = $a || $b && $c;
$resultado_com_parentese = ($a || $b) && $c;
var_dump($resultado_sem_parentese);
echo '<hr>';
var_dump($resultado_com_parentese);

