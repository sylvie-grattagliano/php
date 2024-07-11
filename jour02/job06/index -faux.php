<? php
                // Définir les dimensions du rectangle//

$largeur=20;
$hauteur=10;
$colonne=0;
$ligne= 0;



while ($ligne <$largeur) {
   echo "_" ;
   $ligne++; //quand tu arrives a 20 tu 'arretes
    
}
      echo "<br/>";//apres la boucle sinon il fera un espace dans ma boucle

    $ligne=0 ;//JE REMET MA VARIABLE A 0

while ($colonne<9){ // boucle dans 1 boucle//
while ($ligne<20) {
    if($ligne=0 || $ligne=19)
       echo"|";
       $ligne++;
}
    

else 
    echo " ";//
    $ligne++;//boucle pour 
}
echo "<br/>";
$ligne =0;
?