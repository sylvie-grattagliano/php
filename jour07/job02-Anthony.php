<?php
$bouteille1=bouteille(3,10);
$bouteille2=bouteille(51,100);
$bouteille3=bouteille(80,210);


function bouteille($alcool, $liquide) {

$taux_alcool= ($alcool / $liquide)*100;
return round($taux_alcool);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bouteille sylvie</title>
</head>
<body>
    <h1> Taux alcool bouteille Sylvie </h1>

    <p> Salut à tous, j' ai decidé de faire :
        <ul>
            <li>une bouteille de rhum avec un taux d'alcool de <?=$bouteille1 ?>%</li>
            <li>une bouteille de whisky avec un taux d'alcool de <?=$bouteille2 ?>%</li>
            <li>une bouteille de cognac avec un taux d'alcool de <?=$bouteille3 ?>%</li>

        </ul> 


    
</body>
</html>