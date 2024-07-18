<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>resultat</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
    
        <h2> Vous êtes sur la page du résultat</h2>

        <div class="resultats">
            <?php
                $nombre1= $_POST["nombre1"] ?? 0;
                $nombre2= $_POST ["nombre2"] ?? 0;
                $operateur=$_POST ["operateur"] ?? ""; // Donne une valeur par défaut

                // Affichage des valeurs pour le débogage

                echo "Nombre 1: " . $nombre1 . "<br>";
                echo "Nombre 2: " . $nombre2 . "<br>";
                echo "Opérateur: " . $operateur . "<br>";

                // Vérification des conditions d'erreur

                if ($nombre1 <= 0 && $nombre2 <= 0) {
                    echo "<b>Erreur : Les deux nombres doivent être positifs.<b>";
                
                }
                // Vérification des opérateurs et calculs
                
                elseif ($operateur == "addition") {
                    $resultat = $nombre1 + $nombre2;
                    echo "$nombre1 + $nombre2 = $resultat ";
                } elseif ($operateur == "soustraction") {
                    $resultat = $nombre1 - $nombre2;
                    echo "$nombre1 - $nombre2 = $resultat";
                } elseif ($operateur == "multiplication") {
                    $resultat = $nombre1 * $nombre2;
                    echo "$nombre1 * $nombre2 = $resultat";
                } elseif ($operateur == "division") {
                    if ($nombre2 != 0) {
                        $resultat = $nombre1 / $nombre2;
                        echo "$nombre1 / $nombre2 = $resultat";
                    
                } elseif ($operateur == "modulo") {
                    $resultat = $nombre1 % $nombre2;
                    echo "$nombre1 % $nombre2 = $resultat";
                }
                } else {
                    echo "Erreur : Division par zéro.";
                }
            ?>
       
        </div>
    </body>
</html>
