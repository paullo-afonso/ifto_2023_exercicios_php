<?php

$frutas = array("maçã", "banana");
array_push($frutas, "laranja");
$numeroDeFrutas = count($frutas);

echo 'Minha cesta de frutas contém: ' . $frutas[0] . ', ' . $frutas[1] . ', ' . $frutas[2] . '.';

echo '<hr>';

$alunos = array(
    array("nome" => "João", "nota" => 85),
    array("nome" => "Maria", "nota" => 92),
    array("nome" => "Pedro", "nota" => 78),
);

echo 'A nota de ' . $alunos[0]["nome"] . ' é ' .$alunos[0]["nota"].'.';

