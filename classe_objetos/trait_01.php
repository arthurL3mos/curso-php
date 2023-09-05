<div class="titulo">Trait #01</div>

<?php

Trait validacao {
    public $a = 'Valor A';

    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor B';
    private $c = 'Valor C (privado)';

    public function validarStringMelhor($str) {
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor;
    public function imprimirValorC() {
        echo '<br>', $this->c;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validarStringMelhor(' '));
echo $usuario->a, '<br>', $usuario->b;
echo $usuario->imprimirValorC();