<?php declare(strict_types=1); /* Declaração explicada da classe ArrayUtils */

echo "<h2>CALCULADORA DE MÉDIA</h2>";

require_once "Calculadora.php";

$notas = [];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média das notas é: $media";
} else {
    echo "Não foi possível calcular a média";
}
/*-----------------------------------------------------------------------------------*/
echo "<h2>ORDENANDO SALDOS</h2>";
$saldos = [2500, 3000, 1000, 8700, 9000];

foreach ($saldos as $saldo) {
    echo "<p>O saldo é $saldo</p>";
}

/* sort() -> Faz ordenação do array de forma crescente */
sort($saldos);

echo "O menor saldo é $saldos[0]";
/*-----------------------------------------------------------------------------------*/
echo "<h2>SEPARANDO E JUNTANDO NOMES</h2>";
$nomes = "Giovanni, João, Maria, Pedro";

/* explode() -> Separa a string em um array de acordo com o delimitador */
$arrayNomes = explode(", ", $nomes);

foreach ($arrayNomes as $nome) {
    echo "<p>Olá $nome</p>";
}

/* implode() -> Junta os arrays em uma string */
$stringNomes = implode(", ", $arrayNomes);

echo "$stringNomes";
/*-----------------------------------------------------------------------------------*/
echo "<h2>REMOÇÃO DE ELEMENTOS, TYPE JUGGLING E TIPAGEM ESTRITA</h2>";

require_once "ArrayUtils.php";

$correntistas_e_compras = [
    "Giovanni",
    12,
    "Maria",
    25,
    "Luis",
    "Luísa",
    "12"
];

echo "<pre>";
var_dump ($correntistas_e_compras);
ArrayUtils::remover(12, $correntistas_e_compras);
var_dump($correntistas_e_compras);
echo "</pre>";