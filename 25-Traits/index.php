<?php
// Traits PHP

// En PHP la herencia es simple, es decir que una clase solo puede heredar de una y solo una clase padre.

class Ciudadano {
    public $nombre;

    public function saludo() {
        echo "Hola";
    }

    public function setNombre($nombre) {
        $this->nombre = strtolower($nombre);
    }

    public function getNombre() {
        return ucwords($this->nombre);
    }
}

// Los traits no se pueden instanciar, solo se utilizan para extender las propiedades y métodos de una determinada clase.

trait Latinoamericano {
    // public function saludoLatinoamericano() {
    //     echo "Este es un saludo Latinoamericano";
    // }
    public function saludo() {
        echo "Hola mundo";
    }
}

// trait Europeo {
//     public function saludoEuropeo() {
//         echo "This is a European greeting";
//     }
// }

// trait hola {
//     public function decirHola() {
//         echo "Hola";
//     }
// }

// trait mundo {
//     public function decirMundo() {
//         echo " mundo";
//     }
// }

// trait A {
//     protected function saludo() {
//         echo "Hola mundo desde el trait A";
//     }
// }

// trait B {
//     public function saludo() {
//         echo "Hola mundo desde el trait B";
//     }
// }

trait A {
    public function decirHola() {
        echo "Hola";
    }
}

trait B {
    public function decirMundo() {
        echo " mundo";
    }

    abstract public function saludar();
}

trait C {
    use A, B;

    public function saludar() {
        $this->decirHola();
        $this->decirMundo();
    }
}


class Peruano extends Ciudadano {
    // use Latinoamericano;
    // use hola, mundo;

    // public function saludo() {
    //     echo "Hola mundo desde la clase peruano";
    // }

    // use A, B {
    //     B::saludo insteadOf A;
    // }
    // use A { saludo as public; }
    use C;
}

// class Aleman extends Ciudadano {
//     use Europeo;
// }

$peruano = new Peruano;

// $peruano->saludo();

// $peruano->decirHola();
// $peruano->decirMundo();

// $peruano->saludoLatinoamericano();

$peruano->saludar();
