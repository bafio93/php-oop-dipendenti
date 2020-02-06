<?php
include_once 'Magazziniere.php';

class Dipendente {
    public $nome;
    public $cognome;
    public $matricola;

    function genera_matricola() {
        return $this->nome[0].$this->cognome[0]."00Dip";
    }

    function stampa_dipendente() {
        echo "<p>".$this->nome." ".$this->cognome.", matricola: ".$this->matricola.".</p>";
    }

    public static function stipendio($paga_ora,$ora,$settimana){
        if ((!is_int($paga_ora))||(!is_int($ora))||(!is_int($settimana))) {
            throw new Exception("Una delle cifre inserite non è un numero!");
        }
        return $paga_ora*$ora*$settimana;
    }

    function __construct($nome,$cognome,$matricola){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->matricola=$matricola;
    }
};
?>
