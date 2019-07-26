<?php
ini_set("display_errors",1);
//autoload.php -> Arquivo responsável por incluir todas as classes que serão utilizadas
require_once "autoload.php";

/* use -> Usado quando a classe estiver em um diretório diferente,
 * no caso index.php e Diretor.php estão em pastas diferentes */
use classes\funcionarios\Diretor;
/* as -> É possível atribuir apelidos,
 * por exemplo quando existirem duas classes de mesmo nome porém diretórios diferentes */
use classes\funcionarios\Designer as Design;

$diretor = new Diretor("111.111.111-11", 30000.00);
//Usando o apelido Desing dado anteriormente
$designer = new Design("222.222.222-22", 2000.00);

//Ao tentar atribuir uma valor para um atributo privado de classe herdeira,
//será criado um novo atributo publico.
//$diretor->salario = 1;
//Deve-se usar o modificador protected, junto com um método modificador
$designer->modifySalario(1500.00);

var_dump($diretor);
var_dump($designer);
