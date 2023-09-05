<div class="titulo">Modificador Final</div>

<?php

use Abstrata as GlobalAbstrata;

abstract class Abstrata {
    abstract public function metodo1();

    final public function metodo2() {
        echo 'Não vou mudar!<br>';
    }
}

class Classe extends GlobalAbstrata {
    public function metodo1()
    {
        echo 'Executando método 1 <br>';
    }
    
    // public function metodo2() {
    //     echo 'Extendendo método 2<br>';
    // }
}

$classe = new Classe();
$classe->metodo1();
// Está dando erro porque na hora do new classe é tem um método final
$classe->metodo2();

final class Unica {
    public $attr = 'Valor';
}

$unica = new Unica();
echo $unica->attr;
