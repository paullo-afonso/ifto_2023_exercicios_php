<?php

// contando o numero de caracteres da string

// $comprimento = strlen("Olá, mundo!");
// echo $comprimento;

// calculando a potencia, função com parametros obrigatórios

// function potencia($base, $expoente) {
//     return $base ** $expoente;
// }

// $resultado = potencia(3,5);
// echo $resultado;


// função com parametro opcional padrão informado

function potencia($base, $expoente = 2) {
    return $base ** $expoente;
}
$resultado = potencia(3);
echo $resultado;

