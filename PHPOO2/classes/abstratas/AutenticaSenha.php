<?php

namespace classes\abstratas;

/* Como a classe AutenticarSenha está sendo herdada e
 * ao mesmo tempo herda a classe abstrata Funcionario,
 * ela deve se tornar abstrata */
abstract class AutenticaSenha extends Funcionario {

    public $senha;

    public function autenticar($senha) {
        return $senha == $this->senha;
//      if($senha == $this->senha) {
//          return true;
//      }
//      return false;
    }
}