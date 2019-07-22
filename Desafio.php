<?php
echo "Mostrar numeros impares de 0 a 100\n";
for($numero = 0; $numero <= 100; $numero++){
    if ($numero % 2 != 0){
        echo "Numero impar $numero\n";
    }
}

echo "Tabuada de um numero\n";
$numero = 2;
for ($i = 1; $i < 10; $i++) {
    echo "$numero x $i = " . $numero * $i . PHP_EOL;
}

echo "Calcular o IMC\n";
$altura = 1.70;
$peso = 70;
$imc = $peso / ($altura ** 2);
echo "Seu IMC é de $imc. Seu IMC está ";
if ($imc < 18.5) {
    echo "abaixo";
} else if ($imc >= 25) {
    echo "acima";
} else {
    echo "dentro";
}
echo " do nível recomendado\n";