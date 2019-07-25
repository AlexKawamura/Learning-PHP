<?php

class Validacao {
    public static function verifyAtributo($atributo) {
        echo"<br> MÉTODO ESTÁTICO FOI CHAMADO <br>";
        if ($atributo == "titular" || $atributo == "saldo") {
            throw new Exception("O atributo $atributo não pode ser acessado");
        }
    }
}