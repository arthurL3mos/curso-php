<div class="titulo">Desafio Erros</div>

<?php

interface Template {
    function metodo1();
    public function metodo2($parametro);
}

abstract class ClassAbstrata implements Template {

    public function metodo3() {
        echo "Estou funcionado";
    }
}

class Classe extends ClassAbstrata {
    function __construct($parametro) {
        
    }

    public function metodo1(){
        return 'Método 1 implementado na Classe abstrata';
    }

    public function metodo2($parametro){
        return 'Método 1 implementado na Classe abstrata';
    }
}

$exemplo = new Classe('...');
$exemplo->metodo3();