<?php

class Cibo extends Prodotto {
    public $peso;

    public function __construct($nome, $prezzo, $immagine, $peso){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this-> peso = $peso;
    }
}