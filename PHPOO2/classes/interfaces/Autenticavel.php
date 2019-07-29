<?php
namespace classes\interfaces;

use classes\abstratas\AutenticaSenha;

/* Todas as classes que herdarem a interfaces deverão implementar os métodos dentro dela */
interface Autenticavel {

    /* Os métodos devem ser sempre publicos e não devem possuir corpo */
    public function Autentica(AutenticaSenha $funcionario, $senha);

}