<div class="titulo">Membros Estáticos</div>

<?php
class A {
    public $naoStatic = 'Variável de Instância';
    public static $static = 'Variável de classe (estática)';

    public function mostrarA() {
        echo "Não estático = {$this->naoStatic}<br>";
        // Tentativa 1
        // echo "Estática = {$this->static}<br>";
        // Tentativa 2
        // echo "Estática = {self::$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }

    public static function mostrarStaticA() {
        //dentro de uma função estática você só acessa membros estáticos
        //echo "Não estática = {$this->naoStatic}<br>";
        //echo "EStática = {$static}<br>";
        echo "Estática = " . self::$static . "<br>";
    }
}

$objetoA = new A();
$objetoA->mostrarA();
$objetoA->mostrarStaticA(); // não é a forma ideal
//melhor forma de acessa uma função estática

echo '<br>';
echo A::$static, '<br>'; // acessar diretamente pela classe
A::mostrarStaticA(); // acessar diretamente pela classe

A::$static = 'Alterado pelo membro de classe';
echo A::$static, '<br>'; // acessar diretamente pela classe