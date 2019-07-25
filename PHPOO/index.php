<?php

require_once "contaCorrente.php";

//ATRIBUINDO VALORES PARA O CONSTRUCT
$contaJoao = new contaCorrente(
    "Joao", "1212", "343477-9", 2000.00
);
$contaMaria = new contaCorrente(
    "Maria", "1212", "343432-9", 6000.00
);

//ATRIBUINDO VALORES PARA O CONSTRUCT
//$contaJoao->titular = "Joao";
//$contaJoao->agencia = "1212";
//$contaJoao->numero = "343434-4";
//$contaJoao->saldo = 500.00;
//
//$contaMaria->titular = "Maria";
//$contaMaria->agencia = "1212";
//$contaMaria->numero = "343435-4";
//$contaMaria->saldo = 1500.00;

//UTILIZANDO MÉTODO COM RETURN THIS
var_dump($contaJoao);
echo "<br>";
$contaJoao->sacar(400.90)->depositar(30.90); //Possível apenas com return $this
var_dump($contaJoao);
echo  "<br>";

//UTILIZANDO MÉTODO SEM RETURN THIS
//var_dump($contaJoao);
//$contaJoao->sacar(400.90);
//var_dump($contaJoao);
//$contaJoao->depositar(400.90);
//var_dump($contaJoao);

//USANDO GETTERS E SETTERS
//echo "Saldo do João: " . $contaJoao->getSaldo() . "<br>";
//echo "Titular da conta: " . $contaMaria->getTitular() . "<br>";
//
//var_dump($contaJoao);
//echo  "<br>";
//$contaJoao->setNumero("00000");
//var_dump($contaJoao);
//echo  "<br>";

//USANDO MÉTODOS MÁGICOS GETTER E SETTER
echo "Numero da Maria: $contaMaria->numero" . "<br>";
//
//Tentativa de alterar um atributo privado
//echo "Saldo do João: $contaJoao->saldo" . "<br>";
//$contaJoao->saldo = 0;
//echo "Saldo do João: $contaJoao->saldo" . "<br>";

//CHAMADA DE UM MÉTODO PÚBLICO QUE UTILIZA ENCAPSULAMENTO
echo "Saldo de João formatado: " . $contaJoao->getSaldo();

