<?php

$frutas = array("maçã", "banana", "laranja");

foreach ($frutas as $fruta) {
    echo "A fruta é: " . $fruta . '<br>';
}

echo '<hr>';

$frutas = array("maçã" => "vermelha", "banana" => "amarela", "laranja" => "laranja");

foreach ($frutas as $nome => $cor) {
    echo "A $nome é de cor $cor. <br>";
}

