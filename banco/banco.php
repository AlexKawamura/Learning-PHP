<?php
//INCLUDE da apenas um WARNING, usado para arquivos não necessários para o código
//include 'funcoes.php';

//REQUIRE da um ERRO, usado para arquivos essenciais para o código
require 'funcoes.php';

//REQUIRE_ONCE realiza a importação uma única vez no código, verificando se já foi importada
require_once 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
                                            $contasCorrentes['123.456.789-10'],
                                            500);
$contasCorrentes['123.456.689-11'] = sacar(
                                            $contasCorrentes['123.456.689-11'],
                                            500);

$contasCorrentes['123.256.789-12'] = depositar(
                                                $contasCorrentes['123.256.789-12'],
                                                -900);

//PASSANDO PARÂMETRO POR REFERÊNCIA
titularMaiusculo($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
//    ESTRUTURA DE STRING SIMPLE
//    echo exibeMensagem(
//        "$cpf $conta[titular] $conta[saldo]"
//    );
//    ESTRUTURA DE STRING COMPLEXA
    echo exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}

//USO DA FUNÇÃO LIST
echo "\nUSO DA FUNCAO LIST\n";
//$idadeList = [21, 23, 19, 25, 30, 41, 18];
//
//list($idadeVinicius, , $idadeMaria) = $idadeList;

foreach ($contasCorrentes as $cpf => $conta) {
//  list('titular' => $titular, 'saldo' => $saldo) = $conta;
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo exibeMensagem(
        "$cpf $titular $saldo"
    );
}

//REMOVENDO UM DADO
echo "\nREMOVENDO UM DADO\n";
unset($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo exibeMensagem(
        "$cpf $titular $saldo"
    );
}