<?php

class Calculadora {
    /* ? -> Indica que o método pode retornar float ou nulo */
    public function calculaMedia(array $notas):?float {
        $qntNotas = sizeof($notas);
        $soma = 0;
        if($qntNotas > 0) {
            for ($i = 0; $i < $qntNotas; $i++) {
                $soma = $soma + $notas[$i];
            }
            $media = $soma / $qntNotas;
            return $media;
        } else {
            return null;
        }
    }
}