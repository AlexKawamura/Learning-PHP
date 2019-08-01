<?php

use Exceptions\SaldoInsuficienteException;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
header('Content-Type: text/html; charset=utf-8');

include "autoload.php";

echo "<pre>";

//ATRIBUINDO VALORES PARA O CONSTRUCT
$contaJoao = new contaCorrente(
"Joao", "1212", "343477-9", 2000.00
);
$contaMaria = new contaCorrente(
"Maria", "1212", "343432-9", 6000.00
);
$contaJoana = new ContaCorrente(
    "Joana","1212","343423-9",100.00
);

$contaJosefa = new ContaCorrente(
    "josefa","1212","343423-9",100.00
);

$contaJosenilda = new ContaCorrente(
    "Josenilda","1212","343423-9",100.00
);

$contaFernanda = new ContaCorrente(
    "Fernanda","1212","3434234-9",100.00
);

$contaBernardo = new ContaCorrente(
    "Bernardo","1212","3434235-9",100.00
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
echo "<br>";

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
echo "<br>USANDO MÉTODOS MÁGICOS GETTER E SETTER <br>";
echo "Numero da Maria: $contaMaria->numero . <br>";
//
//Tentativa de alterar um atributo privado
//echo "Saldo do João: $contaJoao->saldo" . "<br>";
//$contaJoao->saldo = 0;
//echo "Saldo do João: $contaJoao->saldo" . "<br>";

//CHAMADA DE UM MÉTODO PÚBLICO QUE UTILIZA ENCAPSULAMENTO
echo "<br> CHAMADA DE UM MÉTODO PÚBLICO QUE UTILIZA ENCAPSULAMENTO <br>";
echo "Saldo de João formatado: " . $contaJoao->getSaldo() . "<br>";

//PASSAGEM DE PARÂMETRO NULL E DEFINIDA
echo "<br> PASSAGEM DE PARÂMETRO NULL E DEFINIDA <br>";
echo "Saldo do João: ".$contaJoao->getSaldo() . "<br>";
echo "Saldo da Maria: ".$contaMaria->getSaldo() . "<br>";
try {
    $contaJoao->transferir("werew", $contaMaria);
} catch(\Exception $e) {
    echo "Capturado erro 1";
    echo $e->getMessage();
} catch(\InvalidArgumentException $iae) {
    echo "Capturado erro 2";
    echo $e->getMessage();
}
echo "Transferindo...<br>";
echo "Saldo do João: ".$contaJoao->getSaldo() . "<br>";
echo "Saldo da Maria: ".$contaMaria->getSaldo() . "<br>";

echo "Numero da conta Maria: " . $contaMaria->numero . "<br>";
echo "Saldo da conta João: ";
//echo $contaJoao->saldo;
//echo validacao::verifyAtributo("saldo"); Chamando método estático de outra classe
try{

    $contaJoao->sacar(50000);

}catch(SaldoInsuficienteException $e){
    echo "<p>" . $e->getMessage()." Saldo disponível: ".$e->saldo." Valor do saque: ".$e->saque . "</p>";
    var_dump($e);

}
var_dump(ContaCorrente::calculaTaxaOperacao());