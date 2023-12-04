<?php

$idade = 20;
$mensagem = ($idade >= 18) ? "Maior de idade" . '<hr>' : "Menor de idade" . '<hr>';
echo $mensagem;

$idade = 18;
$cidade = 'Macapá';
$mensagem = ($idade >= 18 && $cidade == 'Macapá') ? "Maior de idade e macapaense" . '<hr>' : "Menor de idade" . '<hr>';
echo $mensagem;