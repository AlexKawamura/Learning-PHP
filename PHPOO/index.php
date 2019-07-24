<?php

require_once "contaCorrente.php";

$contaJoao = new contaCorrente(
    "Joao", "1212", "343477-9", 2000.00
);
$contaMaria = new contaCorrente(
    "Maria", "1212", "343432-9", 6000.00
);

//$contaJoao->titular = "Joao";
//$contaJoao->agencia = "1212";
//$contaJoao->numero = "343434-4";
//$contaJoao->saldo = 500.00;
//
//$contaMaria->titular = "Maria";
//$contaMaria->agencia = "1212";
//$contaMaria->numero = "343435-4";
//$contaMaria->saldo = 1500.00;

var_dump($contaJoao);
echo "<br>";
//Possível apenas com return $this
$contaJoao->sacar(400.90)->depositar(30.90);
var_dump($contaJoao);
echo  "<br>";

//var_dump($contaJoao);
//$contaJoao->sacar(400.90);
//var_dump($contaJoao);
//$contaJoao->depositar(400.90);
//var_dump($contaJoao);

echo "Saldo do João: " . $contaJoao->getSaldo() . "<br>";
echo "Titular da conta: " . $contaMaria->getTitular() . "<br>";

var_dump($contaJoao);
echo  "<br>";
$contaJoao->setNumero("00000");
var_dump($contaJoao);
echo  "<br>";