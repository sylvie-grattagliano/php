<?php

                                // je crée mes 3 VARIABLES
$pain_chocolat =0;
$croissant = 0;
$brioche = 0;
                                   // je dois récupérer etudiant $_GET
$etudiant = $_GET ["etudiant"];



if($etudiant == "theo") {
    $pain_chocolat = 3;
    $brioche = 2;
    $croissant = 0;

    
}
elseif ($etudiant == "walid") {
    $brioche = 0;
    $pain_chocolat =7;
    $croissant = 6;
}

                    // pour voir Affichage des résultats  utilise echo

echo "Pain  au chocolat : " . $pain_chocolat . "<br>"; // J'utilise un string "pain au chocolat"
echo "Croissant : " . $croissant . "<br>";
echo "Brioche : " . $brioche . "<br>";












?>
