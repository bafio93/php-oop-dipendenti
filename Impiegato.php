<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Dipendente.php';
// Entro nel dettaglio:
class Impiegato extends Dipendente {
    public $sample;

    function __construct($nome,$cognome,$matricola,$sample){
        parent::__construct($nome,$cognome,$matricola);
        $this->sample=$sample;
    }    
};
?>
