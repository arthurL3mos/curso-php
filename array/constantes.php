<div class="titulo">Arrays Constantes</div>

<?php
const FRUTAS = array('laranja', 'abacaxi');
// FRUTAS = 'teste';
//FRUTAS[0] = 'banana';
//FRUTAS[] = 'banana';
echo FRUTAS[0];
print_r(FRUTAS);

const CARROS = ["fiat" => "uno", "ford" => "fiesta"];
//CARROS ["BMW"] = '325i';
echo '<br>' . CARROS["fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
//CIDADES[0] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];