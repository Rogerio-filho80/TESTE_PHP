<?php

abstract class Animal {
    public $familia;

    public function __construct($familia) {
        $this->familia = $familia;
    }

    #FUNÇÃO ABSTRATA
    abstract public function emitir_som();
    #essa Ação existe na classe filha (vaca,Cachorro)
}


?>