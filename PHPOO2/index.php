<?php
ini_set("display_errors",1);
echo "<pre>";
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
$designer->modifySalario(30000.00);

echo "Salario do designer: " . $designer->salario . "<br>";
echo "Salario do designer: " . $diretor->salario . "<br>";

//Ambos recebem a mesma quantia de bonificação,
//caso deseje que seja diferente é usa-se o polimorfismo
echo "Bonificação do designer: " . $designer->getBonificacao() . "<br>";
echo "Bonificação do diretor: " . $diretor->getBonificacao() . "<br>";

//Polimorfismo na classe Designer, dando aumentos diferentes para os funcionarios
echo "Aumento no salario do designer: " . $designer->aumentarSalario() . "<br>";
echo "Aumento no salario do diretor: " . $diretor->aumentarSalario() . "<br>";

$diretor->senha = "pass123";
echo "Autenticando senha: ";
var_dump($diretor->autenticar("pass123"));
echo "Autenticando senha: ";
var_dump($diretor->autenticar("pass13"));

var_dump($diretor);
var_dump($designer);
