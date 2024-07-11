                                      <!--section php-->
<?php
$str="LaPlateforme ";
$str2="vive ";
$str3="!";
$str4= $str2 . $str . $str3;
$val=6;
$myBool="true ";
$myBool="false";

?>
                                         <!--section HTLM-->

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job01</title>
</head>
<body>
    <H1>Hello </H1>
     <p> Bonjour <?=$str4;?></p>
    <P> <?=$val ; ?>
     <p> <?=$val+4;?></p>           <!--raccourci echo pour afficher mon php dans html-->
     <p> <?=$myBool ;?>
     



     
    
    
    
</body>
</html>