<?php

$i = 0;
while ($i <100) {
    
    $i=$i+1; // je creee ma boucle sinon rien ne va se passer toujours a 0//

   if($i==42){
    echo "laplateforme_<br/>"; // si ma variable est egale a 42 affiche la plateforme et a la ligne//

}
    elseif ( $i <= 20) { // et si ma variable est inferieur ou egale a 20

        echo "<i>" .$i."</i><br />"; // affiche en italique ma variable et a la ligne//
    }
    
     elseif($i>20 && $i<=25) { // et si ma variable est sup a 20 ET si ma variable est inferieur ou egale a 25

        echo $i . "<br/>"; // alors affiche variable et a la ligne//
     }
     elseif($i>25 && $i<=50) { // et si ma variable est sup a 25 ET inferieur ou egal a 50

        echo "<u>" .$i. "</u><br/>"; //alors affiche les  variables  soulignees//
    }

    else {
        echo $i . "<br/>"; // et si aucune conditions rempli alors affiche seulement variable//
    }
}  


?>


