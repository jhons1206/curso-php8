<?php
// Clases abstractas
// Las clases abstractas si pueden desarrollar métodos a diferencia de las interfaces donde solo podemos declararlos.

// Cuando trabajamos con clases abstractas podemos definir métodos protegidos a diferencia de las interfaces donde solo podemos definir métodos públicos.

abstract class ClaseAbstracta {

    abstract protected function getValor();
    abstract public function valorPrefijo($prefijo);

    public function imprimir() {
        echo $this->getValor();
    }
}

class ClaseConcreta extends ClaseAbstracta {

    protected function getValor() {
        return "Clase concreta";
    }

    public function valorPrefijo($prefijo, $separador = '.') {
        // Lógica del método
        return $prefijo . "Clase concreta";
    }
}

$clase1 = new ClaseConcreta;

$clase1->imprimir();
echo "<br>";
echo $clase1->valorPrefijo("Prefijo ");