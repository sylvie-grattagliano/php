<?php
//avec valeur de depart,condition entree,et enfin volution//


for ($i = 1; $i <= 100; $i++) { 
    
if ($i %  3==0 && $i % 5==0) {
    
    echo "FizzBuzz" . "<br/";
}
//Cette condition vérifie si $i est divisible par 3 sans reste.//
//Si $i % 3 donne 0, cela signifie que $i est un multiple de 3.//

elseif ($i % 3 == 0) {

    echo "Fizz" . "<br/>";
}
elseif ($i % 5 == 0) {

    echo "Buzz" . "<br/>";
}

else {
    echo $i . "<br/>";
}
}








?>
    
    