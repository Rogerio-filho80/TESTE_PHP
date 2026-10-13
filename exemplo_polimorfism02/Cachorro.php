<?php
require_once 'Animal.php';

class Vaca extends Animal {
    public $especie;
    
    public function __construct($familia, $especie) {
        parent::__construct($familia);

        $this->especie = $especie;
    }
    
    public function emitir_som() {
        echo "O Animal $this->especie faz au au.";
    }
}
?>