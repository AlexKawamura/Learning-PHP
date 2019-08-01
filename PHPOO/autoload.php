<?php
function load($namespace) {
    $namespace = str_replace("\\", "/", $namespace);
    $caminhoAbsoluto = __DIR__ . "/" . $namespace . ".php";
    return include_once $caminhoAbsoluto;
}

/* Método invocado sempre que um objeto é instanciado e
 * chamar a função (load) responsável pelo carregamento das classes */
spl_autoload_register(__NAMESPACE__ . "\load");