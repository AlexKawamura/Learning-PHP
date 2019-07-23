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

echo exibeMensagem("--Estrutura de string simples--");

foreach ($contasCorrentes as $cpf => $conta) {
    echo exibeMensagem(
        "$cpf $conta[titular] $conta[saldo]"
    );
}

echo exibeMensagem("--Estrutura de string complexa--");

foreach ($contasCorrentes as $cpf => $conta) {
    echo exibeMensagem(
        "$cpf {$conta['titular']} {$conta['saldo']}"
    );
}