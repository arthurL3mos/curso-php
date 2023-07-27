<div class="titulo">Função recursiva Fatorial</div>

<form action="#" method="post">
    <p>Digite um número para calcular o seu fatorial:</p>
    <input type="text" name="numero">
    <button>Calcular</button>
</form>
<br>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
$numero = $_POST['numero'];

function fatorial($numero) {
    if ($numero === 0 or $numero === 1){
        return 1;
    } else {
        return $numero * fatorial($numero - 1);
    }
}



echo "O fatorial de " . $numero . " é: " . fatorial($numero);