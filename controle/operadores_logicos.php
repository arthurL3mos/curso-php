<div class="titulo">Operadores Lógicos</div>

<?php
echo "<p class='divisao'> V ou F</p><hr>";
var_dump(true);
echo '<br>';
var_dump(!true); // not

echo "<p class='divisao'>Table verdade do 'AND' (E)</p><hr>";
var_dump(true && true);
var_dump(true && false);
var_dump(false && true);
var_dump(false && false);

var_dump(true and true);
var_dump(true and false);
var_dump(false and true);
var_dump(false and false);

echo "<p class='divisao'>Table verdade do 'OR' (OU)</p><hr>";

var_dump(true || true);
var_dump(true || false);
var_dump(false || true);
var_dump(false || false);

var_dump(true or true);
var_dump(true or false);
var_dump(false or true);
var_dump(false or false);

echo "<p class='divisao'>Table verdade do 'XOR' (OU Exclusivo)</p><hr>";

var_dump(true xor true);
var_dump(true xor false);
var_dump(false xor true);
var_dump(false xor false);

var_dump(true != true);
var_dump(true != false);
var_dump(false != true);
var_dump(false != false);

echo "<p class='divisao'>Exemplo</p><hr>";

$idade = 65;
$sexo = 'M';

$pagouPrevidencia = true;

$criterioHomem = ($idade >= 65 && $sexo === 'M');
$criterioMulher = ($idade >= 60 && $sexo === 'F');
$atingiuCriterio = $criterioHomem || $CriterioMulher;
$podeSeAposentar = $pagouPrevidencia && $atingiuCriterio;
echo "Pode se aposentar -> $podeSeAposentar.<br>";


if ($idade >= 60 && $sexo === 'F'){
    echo "Pode se aposentar -> $sexo";
}elseif($idade >= 65 && $sexo === 'M') {
    echo "Pode se aposentar -> $sexo";
}else {
    echo 'Vai ter que trabalhar mais um pouco';
}




// um trabalho na terça e o outro na quinta e se der certo vamos sair pra comprar a tv de 50 polegadas e um sorvete
// caso apenas um dos dois dê certo ainda iremos vamos sair para comprar uma tv de 32 polegadas e um sorvete
// caso nenhum dos dois dê certo ficaremos em casa, mas vai ficar mais saudável
?>

