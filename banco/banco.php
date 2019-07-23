<?php
//FUNÇÕES e SUBROTINAS

function exibeMensagem(string $mensagem):string {
    return $mensagem . PHP_EOL;
}

//FUNÇÃO ESPECIFICANDO OS PARÂMETROS E RETORNO
function sacar(array $conta, float $saque):array {
    if ($saque > $conta['saldo']) {
        echo exibeMensagem("Voce não pode sacar este valor");
    } else {
        $conta['saldo'] -= $saque;
    }
    return $conta;
}

//FUNÇÃO SEM ESPECIFICAR OS PARÂMETROS E RETORNO
function depositar($conta, $deposito) {
    if ($deposito > 0) {
        $conta['saldo'] += $deposito;
    } else {
        echo exibeMensagem("Depositos devem ser positivos");
    }
    return $conta;
}

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