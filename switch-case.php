<?php

$diaSemana = "terça";
switch ($diaSemana) {
    case "segunda":
    case "terça":
    case "quarta":
    case "quinta":
    case "sexta":
        echo "É um dia útil.";
        break;
    case "sábado":
    case "domingo":
        echo "É um fim de semana.";
        break;
    default:
        echo "Dia inválido.";
}

