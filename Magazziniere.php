<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Dipendente.php';
// Entro nel dettaglio:
class Magazziniere extends Dipendente {

    public $magazzino;

    function __construct($nome,$cognome,$magazzino){
        parent::__construct($nome,$cognome);
        $this->magazzino=$magazzino;
    }
};
?>
