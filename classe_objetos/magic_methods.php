<div class="titulo">Métodos Mágicos</div>

<?php
class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) 
    {
        echo 'Construtor Invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function __destruct()
    {
        echo 'E morreu!';
    }

    public function __toString()
    {
        return "{$this->nome} tem {$this->idade} anos";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atrib) {
        echo "Lendo atributo não declarado: {$atrib}<br>";
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tentando executar método ${metodo}.";
        echo ", com os parametros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40);

$pessoa->apresentar(); // chamando o __toString
echo '<br>', $pessoa; // chamando o __toString

$pessoa->nome = 'Reinaldo'; 
echo '<br>';

$pessoa->apresentar();// chamando __toString diretamente sem o call
echo '<br>';

$pessoa->nomeCompleto = 'Muito Legal!!!'; // chamando __set
echo '<br>';

$pessoa->nomeCompleto; // chamando o __get
echo '<br>';

echo $pessoa->nome; // acessa o atributo diretamento sem __get
echo '<br><br>';

$pessoa->exec(1, 'teste', true, [1,2,3]); // chamando o __call
echo '<br><br>';

$pessoa = null; // __chamando com o destruct