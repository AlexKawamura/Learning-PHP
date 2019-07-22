<?php
//PRINT
echo "Olá mundo!\n";

//COMENTÁRIOS
/*Comentário
de vários linhas*/

//VARIÁVEIS
echo "VARIÁVEIS\n";
$idade = 21;
echo $idade;
echo "\n";

//OPERAÇÕES
echo "OPERAÇÕES\n";
$idadeSoma = $idade + 10;   //Soma
echo $idadeSoma;
echo "\n";
$idadeSub = $idade - 5;     //Subtração
echo $idadeSub;
echo "\n";
$idadeMult = $idade * 5;    //Multiplicação
echo $idadeMult;
echo "\n";
$idadeDiv = $idade / 3;     //Divisão
echo $idadeDiv;
echo "\n";
$idadePot = $idade ** 3;    //Potencialização
echo $idadePot;
echo "\n";
$idadeResto = $idade % 2;   //Resto da Divisão
echo $idadeResto;
echo "\n";

//TIPOS DE VARIÁVEIS
echo "TIPOS DE VARIÁVEIS\n";
$idade = 21;
echo gettype($idade);   //Inteiro
echo "\n";
$salario = 1000.30;
$divisao = 10 / 3;
echo gettype($salario); //Decimal
echo "\n";
$texto = "Olá mundo";
echo gettype($texto);   //String
echo "\n";
$boolean = true;
$boolean = false;
echo gettype($boolean);   //Boolean
echo "\n";

//STRINGS
echo "STRINGS\n";
$idade = 21;
echo 'Olá mundo! Minha idade é ' . $idade . ' anos';    //Aspas simples
echo "\n";
echo "Olá mundo! Minha idade é $idade anos\n";          //Aspas duplas
echo "Olá mundo! Minha idade é \"$idade\" anos";
echo "\n\t";                                            //Quebra de linha e tab
echo "Outra linha" . PHP_EOL;                           //Quebra de linha PHP_EOL
echo "Usando PHP_EOL";














