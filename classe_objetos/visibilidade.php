<div class="titulo">Visibilidade</div>

<?php
class A {
    public $publico = 'Público';
    protected $protegido = 'Protegido';
    private $privado = 'Privado';

    public function mostrarA() {
        //$this->naoMostrar();
        echo "Class A) Public = {$this->publico}<br>";
        echo "Class A) Public = {$this->protegido}<br>";
        echo "Class A) Public = {$this->privado}<br>";
    }

    protected function vaiPorHeranca() {
        echo 'Serei transmitido por Herança!<br>';
    }

    private function naoMostrar() {
        echo 'Não vou imprimir!<br>';
    }

}

$a = new A();
//echo $a->privado;
//echo $a->protegido
// Apenas o público é acessado
//echo $a->publico;
$a->mostrarA();

// Essa não mostrar consigo acessar diretamente apenas na class
//$a->nãoMostrar();
class B extends A {
    public function mostrarB() {
        echo "Class B) Publico = {$this->publico} <br>";
        echo "Class B) Protegido = {$this->protegido}<br>";
        //echo "Class B) Privado = {$this->privado}<br>";
        parent::vaiPorHeranca();
    }
}

echo '<br>';
echo 'Mostrando B agora <br>';
$b = new B();
$b->mostrarB();
$b->mostrarA();
//$b->naoMostrar();
//$b->vaiPorHeranca();