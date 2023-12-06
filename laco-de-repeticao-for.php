<table border='1'>
<?php

for ($i = 1; $i <= 6; $i++) {
    echo "Número: " . $i . '<br>';
}

$colunas = 5;
$linhas = 3;
for ($l = 1; $l <=$linhas; $l++) {
    echo '<tr>';
    for($c = 1; $c<=$colunas; $c++){
        echo "<td>linha $l - coluna $c</td>";
    }
    echo '</tr>';
}
?>
</table>