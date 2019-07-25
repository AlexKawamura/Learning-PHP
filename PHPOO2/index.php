<?php
ini_set("display_errors",1);
//autoload.php -> Arquivo responsável por incluir todas as classes que serão utilizadas
require_once "autoload.php";

/* use -> Usado quando a classe estiver em um diretório diferente,
 * no caso index.php e Diretor.php estão em pastas diferentes */
use classes\funcionarios\Diretor;
/* É possível atribuir apelidos,
 * por exemplo quando existirem duas de classes de mesmo nome porém diretórios diferentes */
use classes\funcionarios\Designer as Design;

$diretor = new Diretor();
$designer = new Design(); //Usando o apelido Desing dado anteriormente

var_dump($diretor);
var_dump($designer);
