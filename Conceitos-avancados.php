<?php
//ARRAY LIST
echo "ARRAYS\n";
$idadeList = /*array(21, 22, 24, 30, 17) ou */ [21, 22, 24, 30, 17];
$idade1 = $idadeList[0];

echo $idade1 . PHP_EOL;

echo "--Listando o array--\n";
for ($i = 0; $i < /*5 ou */ count($idadeList); $i++) {
    echo "Idade $i = " . $idadeList[$i] . PHP_EOL;
}

//ARRAY COM VÁRIOS TIPOS
echo "\nARRAYS DE ARRAYS\n";
$conta1 = [
    'titular' => 'Alexandre',
    'saldo' => 500
];
$conta2 = [
    'titular' => 'Vinicius',
    'saldo' => 1000
];
$conta3 = [
    'titular' => 'Maria',
    'saldo' => 10000
];

echo $conta2['saldo'] . PHP_EOL;

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}

//FOREACH
echo "\nFOREACH\n";
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Alexandre',
        'saldo' => 500
    ],
    12345678911 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678912 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF $cpf do " . $conta['titular'] . PHP_EOL;
}

//ADICIONANDO DADOS
echo "\nADICIONANDO NO ARRAY\n";

$contasCorrentes[12345678913] = [
    'titular' => 'Claudia',
    'saldo' => 350
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF $cpf do " . $conta['titular'] . PHP_EOL;
}

echo "--Adicionando sem indice--\n";

$contasCorrentes[] = [
    'titular' => 'João',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF $cpf do " . $conta['titular'] . PHP_EOL;
}

echo "--Adicionando sem indice com string--\n";

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Alexandre',
        'saldo' => 500
    ],
    "123.456.789-11" => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    "123.456.789-12" => [
        'titular' => 'Maria',
        'saldo' => 10000
    ]
];

$contasCorrentes[] = [
    'titular' => 'João',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo "CPF $cpf do " . $conta['titular'] . PHP_EOL;
}

//TIPOS CHAVES
echo "\nTIPOS NA CHAVE\n";

$arrayList = [
    1 => 'a',   //Indice inteiro
    '1' => 'b', //Caso possível a string será convertida para inteiro
    1.5 => 'c', //O valor decimal será arredondado para inteiro
    true => 'd' //TRUE = 1, FALSE = 0
];

foreach ($arrayList as $item) {
    echo $item . PHP_EOL;
}

//PRATICANDO
echo "\nPRATICANDO\n";

$carsList = [
    'LMS-2312' => [
        'marca' => 'VW',
        'modelo' => 'Golf'
    ],
    'KLM-1324' => [
        'marca' => 'Ford',
        'modelo' => 'Fiesta'
    ],
    'OPN-5612' => [
        'marca' => 'Fiat',
        'modelo' => 'Uno'
    ]
];

foreach ($carsList as $placa => $carro) {
    echo $placa . ': ' .
        "\tMarca: " . $carro['marca'] .
        "\n\t\tModelo: " . $carro['modelo'] . PHP_EOL;
}