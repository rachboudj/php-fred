<?php

require_once './functions/salut.php';
require_once './functions/surface.php';
require_once './functions/volume.php';
require_once './functions/factorielle.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Fonctions</title>
</head>
<body>
    <?php
    //     // création d'un tableau
    //     $tableau = array("Michel", "Banane", 12, true);
        
    //     // Création d'un tableau vide
    //     $tableau2 = array();
    //     // Ajout d'une valeur à la fin du tableau
    //     array_push($tableau2, "Toto", "Titi");
        
    //     // Tableau associatif
    //     $tableauAssociatif = array("prenom" => "Michel", "nom" => "Dupont", "age" => 42);

    //     $resultat = "<ul>";

    // for ($i = 0 ; $i < count($tableau2) ; $i++) {
    //     $resultat .= "<li>";
    //     if (is_array($tableau2[$i]))
    //         $resultat .= "C'est un tableau";
    //     else
    //         $resultat .= $tableau2[$i];
    //     $resultat .= "</li>";
    // }    
    // $resultat .= "</ul>";
    
    // echo $resultat;

    $test = surface(10,20);
    var_dump($test);

    echo mb_strlen("Boudjakdji");

    function listerFruits(...$fruits) {
        foreach($fruits as $value) {
            echo "<p>Ce est un ou une $value </p>";
        }
    }

    listerFruits("Banane", "Pomme", "Poire");


    function compter() {
        static $x = 0;
        echo "La valeur est $x <br />";
        $x++;
    }

    compter();
    compter();
    compter();
    compter();
    compter();


    ?>
</body>
</html>