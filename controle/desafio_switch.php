<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km para Milha</option>
        <option value="milha-km">Milha para Km</option>
        <option value="metro-km">Metros para Km</option>
        <option value="km-metro">Km para Metros</option>
        <option value="cel-fah">Celsius para Fahrenheit</option>
        <option value="fah-cel">Fahrenheit para Celsius</option>
    </select>
    <button>Calcular</button>
    <!--<input type="submit" value="converter">-->
</form>

<style>
    form > * {
        font-size: 1.8rem;
    }
</style>

<?php
$resultado = 0.0;
$param = $_POST['param'] ?? 0;
const FATOR_CEL_FAH = 1.8;

if(isset($_POST['conversao'])){
    switch($_POST['conversao']){
        case 'km-milha' : 
            $resultado = $param * 0.621371;
            $mensagem = "O resultado de " . $param . " Kilômetros em Milhas é " . 
             $resultado; 
            break;
    
        case 'milha-km' : 
            $resultado = $param * 1.621371;
            $mensagem = "O resultado de " . $param . " Milhas em Kilômetros é $resultado"; 
            break;
    
        case 'metro-km' : 
            $resultado = $param / 1000;
            $mensagem = "O resultado de " . $param . " Metros em Kilômetros é $resultado"; 
            break;
    
        case 'km-metro' :
            $resultado = $param * 1000;
            $mensagem = "O resultado de " . $param . " Kilômetros em Metros é $resultado"; 
            break;

        case 'cel-fah':
            $conversao  = $param * FATOR_CEL_FAH + 32;
            $mensagem = "{$param} graus Celsius = {$conversao} graus Fahrenheit";
            break;
        case 'fah-cel':
            $conversao = ($param - 32) / FATOR_CEL_FAH;
            $mensagem = "{$param} graus Fahrenheit = {$conversao} graus Celsius";
            break;
    
        default: 
            $mensagem = 'Por favor digite um valor para ser Calculado!<br>';
    }
    echo $mensagem;
}




