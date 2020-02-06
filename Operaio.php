<?php
// Includo dentro alla struttura le generiche caratteristiche del prodotto:
include_once 'Dipendente.php';
// Entro nel dettaglio: (non proprio...)
class Operaio extends Dipendente {
    public $mansione;

    function __construct($nome,$cognome,$mansione){
        parent::__construct($nome,$cognome);
        $this->mansione=$mansione;
    }

    function ope(){
        echo "<p>Svolge la mansione: ".$this->mansione."</p>";
    }
};
?>
