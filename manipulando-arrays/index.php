<?php declare(strict_types=1); /* Declaração explicada da classe ArrayUtils */

namespace Alura;

require "autoload.php";

echo "<h2>CALCULADORA DE MÉDIA</h2>";

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
/*-----------------------------------------------------------------------------------*/
echo "<h2>ARRAYS ASSOCIATIVOS</h2>";

$correntistas = ["Giovanni", "João", "Maria", "Luis", "Luisa", "Rafael"];
$correntistasNaoPagantes = ["Luis", "Luisa", "Rafael",];
$saldos = [2500, 3000, 4400, 1000, 8700, 9000];

$array_associativo = [
    "Giovanni" => 2500,
    "João" => 3000,
    "Maria" => 4400
];

/* array_diff -> Retorna um array contendo os elementos diferentes entre dois arrays */
$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo "<pre>";
var_dump ($correntistasPagantes);
echo "</pre>";

/* array_merge -> Junta dois arrays em um só, contudo ele apenas adiciona um array em
 * outro, ele não faz a associação entre os arrays */
$relacionados = array_merge($correntistas, $saldos);

echo "<pre>";
var_dump ($relacionados);
echo "</pre>";

/* array_combine -> Faz a associação entre os arrays, transformando um deles em chaves */
$combinados = array_combine($correntistas, $saldos);

$combinados["Matheus"] = 4500;

echo "<pre>";
var_dump ($combinados);
echo "</pre>";

echo "O saldo do Giovanni é: {$combinados["Giovanni"]}";

if(array_key_exists("Joao", $combinados)){
    echo "<p>O saldo do João é: {$combinados["Joao"]}</p>";
} else {
    echo "<p>Nao foi encontrado</p>";
}

$maiores = ArrayUtils::maiorSaldo(3000, $combinados);

echo "<pre>";
var_dump ($maiores);
echo "</pre>";