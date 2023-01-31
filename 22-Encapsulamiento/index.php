<?php
// Encapsulamiento

class MiClase {
    public $public = "Public";
    protected $protected = "Protected";
    private $private = "Private";

    function imprimirHola() {
        echo $this->public . "<br>"; // Public es de acceso público
        echo $this->protected . "<br>"; // Protected puede ser accedido desde la clase padre y desde sus clases hijas
        echo $this->private . "<br>"; // Private solo puede ser accedida desde la clase padre. Puede ser accedida desde la clase hija siempre y cuando el método que la contiene no haya sido sobreescrito desde la clase hija.
    }
}

// $objeto = new MiClase;

// $objeto->imprimirHola();

// echo $objeto->public;
// echo "<br>";
// echo $objeto->protected;
// echo "<br>";
// echo $objeto->private;


class MiClase2 extends MiClase {

    public $public = "Public 2";
    protected $protected = "Protected 2";

    function imprimirHola() {
        echo $this->public . "<br>";
        echo $this->protected . "<br>";
    }
}

$objecto2 = new MiClase2;

$objecto2->imprimirHola();