<div class="titulo">Clousure e Callable</div>

<?php

$soma1 = function ($a, $b) {
    return $a + $b;
};

function soma2($a, $b) {
    return $a + $b;
}

// Todas as funçòes estão passíveis de ser chamadas, então são callable
echo $soma1(2, 3) . '<br>';
echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>';

// Aqui não está envolvido de uma classe, então ele não é um clousure
echo soma2(2, 3) . '<br>';
echo (is_callable(soma2(2, 3)) ? 'Sim' : 'Não') . '<br>';