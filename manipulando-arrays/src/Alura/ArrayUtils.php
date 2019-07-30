<?php declare(strict_types=1);

namespace Alura;

class ArrayUtils {
    /* Ao passar uma variável do tipo inteiro como argumento de $elemento,
     * o PHP realiza a conversão automaticamente para string, removendo o elemento errado,
     * para impedir isso utiliza-se a declaração (strict_types=1) no início do código,
     * tornando a passagem de parâmetros estrita e não realizando mais a conversão. */
    /* Agora para remover um elemento de um tipo específico deve ser altera a tipagem
     * dos argumentos. Porém limitando a execução da função para um único tipo,
     * por isso é aconselhável não criar arrays com variáveis de tipos diferentes. */
    public static function remover(int $elemento, array &$array) {
        /* Type Juggling -> array_search retorna false quando não encontra nenhum elemento,
         * como false = 0, então o PHP converte false para inteiro, excluindo a primeira
         * posição. */
        /* O array_search faz a busca no array e caso o tipo não seja igual, será feita a
         * conversão. Para isso, pode-se passar um terceiro argumento, tornando a função
         * no modo estrito */
        $posicao = array_search($elemento, $array);
        /* Uma forma de contornar o problema é fazer uma condição,
         * porém ao retornar o elemento na posição 0, o PHP realiza a conversão para false
         * novamente e não realiza a exclusão. Para resolver-lo utiliza-se a
         * função is_int() */
        if (is_int($posicao)) {
            unset($array[$posicao]);
        } else {
            echo "Não foi encontrado no array";
        }
    }
}