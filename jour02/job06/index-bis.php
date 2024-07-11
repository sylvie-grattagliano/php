<?php
                // Définir les dimensions du rectangle/

$largeur=20;
$hauteur=10;
$colonne=0;
$ligne= 0;
             // pour mon rectangle je pose mes reflexions tant que ligne est inferieur a largeur 

while ($ligne < $largeur) {
    echo "_";
    $ligne++;
}
    echo "<br/>";
    $ligne = 0;

/*tu vas m'  a affiche mon tiret pour le dessin de mon rectangle et je referme ma commande par ;
 //je n oublie pas de repeter l'action pour ma variable $ligne++ = incrementation jusqu' a 19 

echo "br/"; retour a la ligne pour aller a UNE nouvelle ligne

$ligne=0;  remettre variable a 0 puisque je lui ai demandé de faire l operation jusqu' à 19

Maintenant je dois faire idem pour la colonne de mon rectangle et je fais une boucle dans la boucle*/

while ($colonne <=9) {   //premiere boucle
  
    $colonne++;

    while ($ligne <= 20) {

                        //deuxieme boucle 

    if($ligne == 0 || $ligne == 20) {

    // condition si ma ligne est egale a zero ou si elle est egale a 19 AFFICHE:
        echo "|";
        $ligne++;
       
    } 

        else {
            echo "*";
            $ligne++;
        }
    }    
        echo "<br/>";
        $ligne=0;  // variable remise a zero
   
   

  }
  
$ligne=0;

for($ligne=0;$ligne<21;$ligne++) {

    if($ligne==0 or $ligne == 20){

        echo "|";
    }
    else {

        echo "_";
    }
    
}
?>

