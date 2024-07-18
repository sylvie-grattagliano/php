<?php
$poney1=poney2("dodo", "150cm","grise");
$poney2=poney2("riri","100cm" ,"marron");
$poney3=poney2("nicole","90cm", "blanche");


function poney2($noms, $taille, $robe)
{
    /*Concaténation avec des espaces :  espaces 
    entre les caractéristiques pour une meilleure lisibilité*/

    $caracteristique = $noms . " " . $taille . " " . $robe;
    return $caracteristique;
}
// Affichage des caractéristiques des poneys//

echo "je suis un poney " .$poney1."<br/>";
echo "et moi je suis la ponette " . $poney2. "<br>";
echo "et moi je suis la ponette " . $poney3;

?>
