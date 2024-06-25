<?php

class Cuccia extends Prodotto {
    public $dimensione;

    public function __construct($nome, $prezzo, $immagine, $dimensione){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this -> dimensione = $dimensione;
    }
}