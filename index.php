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
//
//
// Creo un'istanza di un dipendente:
$dipendente_1= new Magazziniere("Mario","Rossi","Camnago Volta");
// Visualizzo a schermo le caratteristiche:
$dipendente_1->matricola = $dipendente_1->genera_matricola();
$dipendente_1->contatto = $dipendente_1->genera_contatto();
$dipendente_1->stampa_dipendente();
$dipendente_1->mag();
// Chiamo una funzione che mi calcola lo stipendio:
try {
    $stipendio_mensile=Dipendente::stipendio(7.5,40,4);
    echo "<p>Paga mensile: <strong>".$stipendio_mensile."€</strong>.</p>";
} catch (Exception $e) {
    // echo "Problema: ".$e->getMessage();
    header("Location: error.php");
}
//
echo "<br>";
//
// Creo un'istanza di un dipendente:
$dipendente_2= new Impiegato("Serena","Verdi","Gestione Catalogo");
// Visualizzo a schermo le caratteristiche:
$dipendente_2->matricola = $dipendente_2->genera_matricola();
$dipendente_2->contatto = $dipendente_2->genera_contatto();
$dipendente_2->stampa_dipendente();
$dipendente_2->imp();
// Chiamo una funzione che mi calcola lo stipendio:
try {
    $stipendio_mensile=Dipendente::stipendio(9.5,40,4);
    echo "<p>Paga mensile: <strong>".$stipendio_mensile."€</strong>.</p>";
} catch (Exception $e) {
    // echo "Problema: ".$e->getMessage();
    header("Location: error.php");
}
//
echo "<br>";
//
// Creo un'istanza di un dipendente:
$dipendente_3= new Operaio("Arianna","Mottarello","Assemblaggio");
// Visualizzo a schermo le caratteristiche:
$dipendente_3->matricola = $dipendente_3->genera_matricola();
$dipendente_3->contatto = $dipendente_3->genera_contatto();
$dipendente_3->stampa_dipendente();
$dipendente_3->ope();
// Chiamo una funzione che mi calcola lo stipendio:
try {
    $stipendio_mensile=Dipendente::stipendio(8.5,40,4);
    echo "<p>Paga mensile: <strong>".$stipendio_mensile."€</strong>.</p>";
} catch (Exception $e) {
    // echo "Problema: ".$e->getMessage();
    header("Location: error.php");
}
?>
