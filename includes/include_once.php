<div class="titulo">Include Once</div>

<?php

include('include_once_arquivo.php');
require('include_once_arquivo.php');

echo "Variavel = '{$variavel}'.<br>";
$variavel = 'Variável Alterada';
echo "Variável = '{$variavel}'.<br>";

include('include_once_arquivo.php');
echo "Variavel = '{$variavel}.<br>";
$variavel = 'Variavel Alterada';
echo "Variavel = '{$variavel}.<br>";

include_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}.<br>";

require_once('include_once_arquivo.php');
echo "Variavel = '{$variavel}.<br>";