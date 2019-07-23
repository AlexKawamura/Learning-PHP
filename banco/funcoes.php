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

//PASSAGEM DE PARÂMETRO POR VALOR
//function titularMaiusculo (array $conta) {
//    $conta['titular'] = strtoupper($conta['titular']);
//}

//PASSAGEM DE PARÂMETRO POR REFERÊNCIA (&)
function titularMaiusculo (array &$conta) {
    $conta['titular'] = mb_strtoupper($conta['titular']);
}