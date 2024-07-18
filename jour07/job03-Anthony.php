<?php
$coupe=1;
$parts=0;



function couperGateau($coupe){

   if($coupe>1){
    $parts=$coupe+1;
   }
    echo "le nombre de parts est $parts ";
        return $parts;

}
couperGateau (5);

?>