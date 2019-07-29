<?php
namespace classes\sistemaInterno;

use classes\abstratas\Funcionario;
use classes\abstratas\AutenticaSenha;
use classes\interfaces\Autenticavel;

/* Implementa a interface Autenticavel */
class GerenciadorBonificacao implements Autenticavel {

    private $totalBonificacoes;

    private $autenticado;

    public function registrar(Funcionario $funcionario) {
        if ($this->autenticado) {
            $this->totalBonificacoes += $funcionario->getBonificacao();
        } else {
            throw new \Exception("Voce não está logado!");
        }
    }

    public function getTotalBonificacoes() {
        return $this->totalBonificacoes;
    }

    /* Método obrigatório pois está na classe interface Autenticavel */
    public function Autentica(AutenticaSenha $funcionario, $senha) {
        $this->autenticado = $funcionario->autenticar($senha);
    }

}