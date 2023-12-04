<?php

echo "Condição lógica aninhada: tomando decisões em etapas" . '<br> <br>';

$idade = 15;
$nacionalidade = "brasileira";

if ($idade >= 18) {
    if ($nacionalidade == "brasileira") {
        echo "Você é maior de idade e brasileiro.";
    } else {
        echo "Você é maior de idade, mas não é brasileiro.";
    }
} else {
    echo "Você é menor de idade." . '<hr>';
}


$idade = 15;
$cidade = "Belém";

if ($idade >= 18) {
    if ($cidade == "Macapá") {
        echo "Você é maior de idade e é Macapaense." . '<hr>';
    } else {
        echo "Você é maior de idade, mas não é macapaense." . '<hr>';
    }
} else {
    echo "Você é menor de idade." . '<hr><br>';
}

echo "Condições Lógicas Encadeadas: Tomando Múltiplas Decisões" . '<br><br>';

$nota = 115;

if ($nota >= 90) {
    echo "Você tirou uma nota A." . '<hr>';
} elseif ($nota >= 80) {
    echo "Você tirou uma nota B." . '<hr>';
} elseif ($nota >= 70) {
    echo "Você tirou uma nota C." . '<hr>';
} else {
    echo "Você tirou uma nota abaixo de C." . '<hr>';
}

$idade = 18;
$cidade = 'Belém';

if ($idade >= 18 && $cidade == "Macapá") {
    echo "Você é maior de idade e macapaense." . '<hr>';
} elseif ($idade < 18 && $cidade != "Macapá") {
    echo "Você é menor de idade e não é macapaense" . '<hr>';
} elseif ($idade >= 18 && $cidade != "Macapá") {
    echo "Você é maior de idade e não é macapaense" . '<hr>';
} else {
    echo "Você é menor de idade e mora em $cidade." . '<hr>';
}


