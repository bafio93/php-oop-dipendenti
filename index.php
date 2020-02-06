<?php
// Visione a schermo degli errori (StackOverflow):
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Creo un insieme di dipendenti:
include_once "Dipendente.php";
include_once "Magazziniere.php";
include_once "Impiegato.php";
include_once "Operaio.php";
// Creo un'istanza di un dipendente:
$dipendente_1= new Magazziniere("Mario","Rossi","0","Camnago Volta");
echo "<pre>";
$dipendente_1->matricola = $dipendente_1->genera_matricola();
var_dump($dipendente_1);
$dipendente_1->stampa_dipendente();
// Chiamo una funzione che mi calcola lo stipendio:
try {
    $stipendio_mensile=Dipendente::stipendio(10,40,4);
    echo "<strong>".$stipendio_mensile."</strong>";
} catch (Exception $e) {
    // echo "Problema: ".$e->getMessage();
    header("Location: error.php");
}
echo "</pre>";
?>
