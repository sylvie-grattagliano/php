<?php
// Définir les dimensions du rectangle
$largeur = 20;
$hauteur = 10;
$colonne = 0;
$ligne = 0;

// Afficher la première ligne avec des tirets
while ($ligne < $largeur) {
    echo "_";
    $ligne++;
}
echo "<br/>";
$ligne = 0;

/* 
Remettre $ligne à 0 puisque la première ligne est terminée
Maintenant afficher les lignes intermédiaires
*/

// Afficher les lignes intermédiaires avec des barres verticales et des espaces
while ($colonne < $hauteur ) { // -2 car on ne compte pas la première et la dernière ligne
    echo "|"; // Commencer la ligne avec une barre verticale
    while ($ligne < $largeur ) { // -2 pour laisser de la place pour les barres verticales
        echo " "; // Ajouter des espaces au milieu de la ligne
        $ligne++;
    }
    echo "|<br/>"; // Terminer la ligne avec une barre verticale et retour à la ligne
    $ligne = 0; // Remettre $ligne à 0 pour la prochaine ligne
    $colonne++;
}

// Afficher la dernière ligne avec des tirets
$ligne = 0; // Réinitialiser $ligne pour la dernière ligne
while ($ligne < $largeur) {
    echo "_";
    $ligne++;
}
echo "<br/>"; // Retour à la ligne après la dernière ligne