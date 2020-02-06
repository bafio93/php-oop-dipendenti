<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Dipendente.php';
// Entro nel dettaglio: (non proprio...)
class Impiegato extends Dipendente {
    public $ufficio;

    function __construct($nome,$cognome,$ufficio){
        parent::__construct($nome,$cognome);
        $this->ufficio=$ufficio;
    }
};
?>
