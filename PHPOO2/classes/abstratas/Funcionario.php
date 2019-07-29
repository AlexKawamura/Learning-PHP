<?php
namespace classes\abstratas;

/* abstract -> Impede a instaciação de objetos através da classe Funcionario,
 * agora para se instanciar um objeto deve-se ser feita através das classes de cargos */
abstract class Funcionario {
    public $nome;
    public $cpf;
    /* protected -> Permite as classes que herdam a classe Funcionario realize manipulações */
    protected $salario;

    public function __construct($cpf, $salario) {
        $this->cpf = $cpf;
        $this->salario = $salario;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    /* Ao tornar um método abstrato, as classes que a herdarem serão obrigadas a
     * implementarem o método */
    abstract function getBonificacao();
//  public function getBonificacao() {
//      return $this->salario * 0.5;
//  }

    public function aumentarSalario() {
        return $this->salario *= 1.5;
    }
}