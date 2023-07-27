<div class="titulo">Argumento Padrão</div>

<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
    echo "Bem Vindo, $nome $sobrenome!<br>";
}

echo saudacao();
echo saudacao(NULL);
echo saudacao(null, NULL);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'Água') {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

anotarPedido('Hamburguer');
anotarPedido('Pizza', 'Refrigerante');

function anotarPedido2($bebida = 'Água', $comida) {
    echo "Para comer: $comida <br>";
    echo "Para beber: $bebida <br>";
}

// Vai dar problema neste caso
// anotarPedido2('Hamburguer');
anotarPedido2('Refrigerante2', 'Pizza2');

