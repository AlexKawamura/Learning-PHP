<?php
/* namespace -> Como estamos utilizando um arquivo autoload,
 * apartir de agora as classes deverão especificar seus diretórios através do namespace*/
namespace classes\funcionarios;

use classes\abstratas\Funcionario;

//Ao utilizar autoload e namespace o nome da classe e do diretório devem ser iguais
class Diretor extends Funcionario {

}