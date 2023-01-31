<?php
// Interfaces

interface iTemplate {
    public function setVariable($nombre);
    public function getHtml();
}

interface a {
    public function prueba1();
}

interface b {
    public function prueba2();
}

interface c extends a, b {
    public function prueba3();
}

class d implements c {
    public function prueba1() {
        
    }

    public function prueba2() {
        
    }

    public function prueba3() {
        
    }

    public function prueba4() {
        
    }

    public function prueba5() {
        
    }
}








// interface b extends a {
//     public function prueba2();
// }

// class c implements b {
//     public function prueba() {

//     }

//     public function prueba2() {
        
//     }
// }





























// class Template implements iTemplate {

//     public function setVariable($nombre)
//     {
        
//     }

//     public function getHtml()
//     {
        
//     }
// }