<?php

require_once "validacao.php";
require_once "ContaCorrente.php";

$contaJoao = new ContaCorrente(
    "Joao", "1212", "343477-9", 2000.00
);
$contaMaria = new ContaCorrente(
    "Maria", "1212", "343432-9", 6000.00
);
$contaJose = new ContaCorrente(
    "Jose", "1212", "343423-9", 6000.00
);

echo "<p>".ContaCorrente::$totalContas."</p>";

echo "<p>".ContaCorrente::$taxaOperacao."</p>";

echo "<pre>";
var_dump($contaJoao);
$contaJoao->sacar(400.90)->depositar(30.90);
var_dump($contaJoao);
echo "</pre>";

