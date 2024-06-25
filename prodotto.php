<?php

class Prodotto {
    public $nome;
    public $prezzo;
    public $immagine;

    public function __construct($nome, $prezzo, $immagine){
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
    }
}