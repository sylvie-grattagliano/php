<?php

$i = 0;
while ($i <= 1338) {
    $i = $i + 1;
  
  if ($i==26) {
        $i=$i+1;
    } 
    elseif ($i==37) {
        $i=$i+1;
    }
    elseif ($i==88) {
        $i=$i+1;
    }
    
    elseif ($i ==1111) {
        $i = $i + 0;
    }

    else {
        echo $i . "<br/>";
    }
    
}

?>


