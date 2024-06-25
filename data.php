<?php
include __DIR__ . "/prodotto.php";
include __DIR__ . "/cibo.php";
include __DIR__ . "/cuccia.php";
include __DIR__ . "/gioco.php";
 

// $gioco = new Gioco("pallina rossa", 12, "immagine del giochino", "gomma");
// $corda = new Gioco("corda arancione", 4, "foto corda", "corda rigida resistente");
// $cuccia = new Cuccia("castello canino", 56, "immagine castello", "molto grande");
// $casetta = new Cuccia("casetta dei sogni", 23, "immagine casetta", "grande il giusto");
// $cibo = new Cibo("crocchette cani", 16, "immagine sacchetto cibo", "7 KG");
// $secco = new Cibo("dentastics", 7, "immagine dentastics", "500 Gr");

// $prodotti = [
// $gioco,
// $corda,
// $cuccia,
// $casetta,
// $cibo,
// $secco
// ];

$prodotti = [
    new Gioco("pallina rossa", 12, "immagine del giochino", "gomma"),
    new Gioco("corda arancione", 4, "foto corda", "corda rigida resistente"),
    new Cuccia("casetta dei sogni", 23, "immagine casetta", "grande il giusto"),
    new Cuccia("castello canino", 56, "immagine castello", "molto grande"),
    new Cibo("crocchette cani", 16, "immagine sacchetto cibo", "7 KG"),
    new Cibo("dentastics", 7, "immagine dentastics", "500 Gr"),
];



