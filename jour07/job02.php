<?php

function bonjour($jour) {

    if ($jour == true ) {
       echo "Bonjour";
    }

   else if($jour == false) {
    echo "Bonsoir";
   }
    
   }


bonjour(true);
echo "<br>";
bonjour(false);


?>

