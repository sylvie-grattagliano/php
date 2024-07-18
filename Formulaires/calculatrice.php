
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma calculatrice</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <h1> Ma Super Calculatrice </h1>

<form action = "resultats.php" method= "post">

      <!-- je vais creer un bloc calculatrice-->


<div class= "container"> <!-- mon bloc general-->

  <div class = "calculatrice"> <!-- calculatrice-->
    
        <!-- nombre 1-->

    <div class = "bloc-nombre"> <!-- creation d'un bloc par nombre et style-->

        <div>
             <label for = "nombre1"> nombre 1</label>
             <input type = "number" name= "nombre1" id="nombre1">
        </div>
        <br>
        
        <!-- nombre 2-->
        <div> 
            <label for = "nombre2"> nombre 2</label>
            <input type = "number" name="nombre2" id="nombre2">
        </div>
        
        <br>

    </div>  
    
        <!-- creation de select pour pouvoir y inclure le mode de calcul-->
        
    <div class = "operateur"><br>

    <label for = "operateur"> Choisir votre mode de calcul</label><br><br>
    
        <select name = "operateur">
                

           <option> addition </option>
           <option> soustraction</option>
           <option> multiplication </option>
           <option> division </option>
           <option> modulo </option>
        </select>   



    <br>
    <br>
    


        <!-- je dois maintenant creer un bouton et un bloc div-->
       <div class = "bouton">

           <button type= "submit" name= "submit" value= "submit">Calcul </button>
           <!--<input type= "submit" name="submit" value= "Calcul">-->
           <input type= "reset" name="reset" value= "Effacer">

        </div>

    </div>
    
    <br>
        
  </div>

  <div class = "image"> <!-- 2em bloc-->
           <img src ="image-calcul.jpg" alt=" image calcul">

</body>


</div>
</form>





       



</body>
</html>