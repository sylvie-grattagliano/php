<?php

function calcule($nombre1,$operateur,$nombre2) {
    $resultat = 0;

    if ($operateur == "addition") {
        $resultat = $nombre1 + $nombre2;
        echo "$nombre1 + $nombre2 = $resultat "; // affiche le mode de mon calcul
    } 
    elseif ($operateur == "soustraction") {
        $resultat = $nombre1 - $nombre2;
        echo "$nombre1 - $nombre2 = $resultat";
    } 
    elseif ($operateur == "multiplication") {
        $resultat = $nombre1 * $nombre2;
        echo "$nombre1 * $nombre2 = $resultat";
    } 
    elseif ($operateur == "division" && $nombre2 != 0) {
        $resultat = $nombre1 / $nombre2;
        echo "$nombre1 / $nombre2 = $resultat";
    } 
    elseif ($operateur == "modulo" && $nombre2 != 0) {
        $resultat = $nombre1 % $nombre2;
        echo "$nombre1 % $nombre2 = $resultat";
    }
    else {
        echo "Erreur : Inconnue";
    }

    return $resultat;
}

$valeurRetour = calcule(6, "soustraction", 3);
//echo $valeurRetour;

?>
