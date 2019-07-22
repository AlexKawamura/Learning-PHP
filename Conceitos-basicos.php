<?php
//PRINT
echo "Olá mundo!\n\n";

//COMENTÁRIOS
/*Comentário
de vários linhas*/

//VARIÁVEIS
echo "VARIÁVEIS\n";
$idade = 21;
echo $idade;
echo "\n\n";

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
echo "\n\n";

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
echo "\n\n";

//STRINGS
echo "STRINGS\n";
$idade = 21;
echo 'Olá mundo! Minha idade é ' . $idade . ' anos';    //Aspas simples
echo "\n";
echo "Olá mundo! Minha idade é $idade anos\n";          //Aspas duplas
echo "Olá mundo! Minha idade é \"$idade\" anos";
echo "\n\t";                                            //Quebra de linha e tab
echo "Outra linha" . PHP_EOL;                           //Quebra de linha PHP_EOL
echo "Usando PHP_EOL\n\n";

//TOMADA DE DECISÃO (IF)
echo "TOMADA DE DECISÃO (IF)\n";
$idade = 21;
$nome = 'Alexandre';
echo "Só pode entrar se tiver a partir de 18 anos." . PHP_EOL;
/*OU*/
/*if ($idade > 18 || $idade == 18) {
    echo "Sua idade é de $idade anos." . PHP_EOL;
    echo 'Pode entrar.';
}*/
if ($idade >= 18) {
    echo "Sua idade é de $idade anos." . PHP_EOL;
    echo 'Pode entrar.' . PHP_EOL;
}
/*E*/
if ($idade >= 18 && $nome == 'Alexandre') {
    echo "Seu nome é $nome e sua idade é de $idade anos." . PHP_EOL;
    echo 'Pode entrar.' . PHP_EOL;
}
/*SE NÂO*/
$idade = 16;
if ($idade >= 18) {
    echo "Sua idade é de $idade anos." . PHP_EOL;
    echo 'Pode entrar.' . PHP_EOL;
} else {
    echo "Você só tem $idade anos.\n";
    echo 'Não pode entrar' . PHP_EOL;
}
/*ELSE IF*/
$idade = 16;
$pessoas = 2;
echo "Só pode entrar se tiver a partir de 18 anos";
echo " ou 16 anos acompanhado." . PHP_EOL;
if ($idade >= 18) { //Mais de uma linha
    echo "Sua idade é de $idade anos." . PHP_EOL;
    echo 'Pode entrar sozinho.' . PHP_EOL;
} else if ($idade >= 16 && $pessoas > 1) //Apenas uma linha
    echo "Você tem $idade anos e está acompanhado. Pode entrar" . PHP_EOL;
else
    echo "Você só tem $idade anos ou não está acompanhado. Não pode entrar" . PHP_EOL;