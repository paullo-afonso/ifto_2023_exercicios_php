<?php

$nome = "Paulo";
$sobrenome = "Afonso";
$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto . "<hr>";

$profissao = "Professor ";
$nome2 = "Paulo ";
$sobrenome2 = "Afonso";
$usuario = $profissao;
$usuario .= $nome2;
$usuario.= $sobrenome2;

echo $usuario . "<hr>";

$nome3 = "Maria";
$idade = 30;
$mensagem = "Olá, " . $nome3 . "! Você tem " . $idade . " anos. <hr>";

$alternativa = "Olá, $nome3! Você tem $idade anos";
echo $mensagem;

echo $alternativa;