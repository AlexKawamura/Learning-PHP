<?php
//ARRAY LIST
$idadeList = /*array(21, 22, 24, 30, 17) ou */ [21, 22, 24, 30, 17];
$idade1 = $idadeList[0];

echo $idade1 . PHP_EOL;

echo "Listando o array\n";
for ($i = 0; $i < /*5 ou */ count($idadeList); $i++) {
    echo $idadeList[$i] . PHP_EOL;
}