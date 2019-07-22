<?php
//PRINT
echo "Olá mundo!\n";

//COMENTÁRIOS
/*Comentário
de vários linhas*/

//VARIÁVEIS
$idade = 21;
echo $idade;
echo "\n";

//OPERAÇÕES
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