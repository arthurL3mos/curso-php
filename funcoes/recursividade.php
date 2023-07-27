<div class="titulo">Recursividade</div>

<form action="#" method="post">
    <p>Digite um Número para realizar a soma de todos os seus valores até 1</p>
    <input type="text" name="numero">
    <button>Enviar</button>
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
function somaUmAte($numero){
    $soma = 0;
    for(; $numero >= 1; $numero--) {
        $soma += $numero;
    }
    return $soma;
}

echo "A soma de todos os números é " . somaUmAte($_POST['numero']) . '<br>';

function somaRecursivaUmAte($numero) {
    if($numero === 1) {
        return 1;
    }
    return $numero + somaRecursivaUmAte($numero - 1);
}

echo "A soma de todos os números com uma Função recursiva é " . 
somaRecursivaUmAte($_POST['numero']) . '<br>';

function somaRecursivaEconomica($numero) {
    return $numero === 1 ? 1 : $numero + somaRecursivaEconomica($numero - 1);
}

echo "A soma de todos os números com uma Função Recursiva Econômica é " . 
somaRecursivaUmAte($_POST['numero']) . '<br>';
