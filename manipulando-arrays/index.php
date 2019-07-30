<?php

require_once "Calculadora.php";

$notas = [9, 5, 10, 3];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média das notas é: $media";
} else {
    echo "Não foi possível calcular a média";
}