<?php
namespace classes\abstratas;

/* abstract -> Impede a instaciação de objetos através da classe Funcionario,
 * agora para se instanciar um objeto deve-se ser feita através das classes de cargos */
abstract class Funcionario {
    public $nome;
    public $cpf;
    /* protected -> Permite as classes que herdam a classe Funcionario realize manipulações */
    protected $salario;
    protected static $piso = 1056.00;

    /* Sobrecarga de métodos no PHP */
    public function __construct($cpf, $salario) {
        if ($salario == null) {
            $this->construtor2($cpf);
        } else {
            $this->cpf = $cpf;
            $this->salario = $salario;
        }
    }
    /* O PHP não permite a sobrecarga de métodos, ou seja,
     * dois métodos com mesmo nome, porém com quantidades de argumentos diferentes */
//   public function __construct($cpf) {
//       $this->cpf = $cpf;
//       $this->salario = $salario;
//   }

    public function construtor2($cpf) {
        $this->cpf = $cpf;
        $this->salario = self::$piso;
    }

    public static function setPiso($valor) {
        self::$piso = $valor;
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

    /* Método final, não pode mais ser sobrescrito */
    final public function aumentarSalario() {
        return $this->salario *= 1.5;
    }
}