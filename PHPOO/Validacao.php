<?php

class Validacao {
    public static function verifyAtributo($atributo) {
        echo"<br> MÉTODO ESTÁTICO FOI CHAMADO <br>";
        if ($atributo == "titular" || $atributo == "saldo") {
            throw new Exception("O atributo $atributo não pode ser acessado");
        }
    }
    public static function ehNumero($valor) {
        if(!is_numeric($valor)) {
            throw new \Exception("<p>O tipo passado não é um número válido!</p>");
        }
    }
}