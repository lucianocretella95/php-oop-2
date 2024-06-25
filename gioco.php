<?php

class Gioco extends Prodotto {
    public $materiale;

    public function __construct($nome, $prezzo, $immagine, $materiale)
    {
        $this->nome = $nome;
        $this->prezzo = $prezzo;
        $this->immagine = $immagine;
        $this->materiale = $materiale;
    }
}