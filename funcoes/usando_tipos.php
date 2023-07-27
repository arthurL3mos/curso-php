<div class="titulo">Usando Tipos</div>

<?php
function somar1($a, $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar1(2, 3) . '<br>';
echo somar1(1.7, 2.5) . '<br>';
echo somar1(2, '4dois') . '<br>';

function somar2(int $a, int $b) {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

echo somar2(2, 3) . '<br>';
// A depender da versão do php funciona, mas muda o comportamento da função
//echo somar2(1.7, 2.5) . '<br>';
//echo somar2(2, '4dois') . '<br>';

function somar3($a, float $b): int {
    echo "<span>Somando $a + $b = </span>";
    return $a + $b;
}

// Converte o valor dentro da função e não na passagem dos paramêtros
echo somar3(2, 3) . '<br>';
echo somar3(1.7, 2.5) . '<br>';
echo somar3(2, '4dois') . '<br>';