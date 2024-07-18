<?php

function calcule($a,$operation,$b) {
if($a!=0 && $b!=0){
    if($operation == "+"){
        $total = $a+$b;
    }
    elseif($operation =="-"){
        $total= $a-$b;
    }
}

    echo $total;
    return $total; 
}

echo calcule(4,"+",8);
?>
