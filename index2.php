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

    $pommes = array("Golden", "Granny Smith", "Canada", "Pink Lady");
    $tableau = array("Banane", "Kiwi", "Clémentine", "Poire", $pommes);

    echo "<pre>";
    var_dump($tableau);
    echo "</pre>";


    $str = "C'est une belle chose d'être honnête, mais il est également important d'avoir raison.";

    print_r(str_word_count($str, 1));
    // print_r(str_word_count($str, 2));
    // print_r(str_word_count($str, 1, 'àáãç3'));

    echo "<pre>";
    echo str_word_count($str);
    echo "<br />";
    echo mb_strlen($str);
    echo "</pre>";


    function calculerLongueurLargeur(float $diagonale) : string
{
    $diagonale = 2.54 * abs($diagonale);
    $longueur = round($diagonale / sqrt(1 + (9/16) ** 2 ), 2);
    $largeur = round((9 * $longueur) / 16, 2);
    $longueur = str_replace('.', ',', $longueur);
    $largeur = str_replace('.', ',', $largeur);
    $resultat = "Longueur : $longueur cm, largeur : $largeur cm";
    return $resultat;
}

    echo calculerLongueurLargeur(50);

    echo "<br />";
    echo "<br />";
    echo ord('f'); //102
    echo "<br />";
    echo chr(103);
    echo "<br />";
    $version = 8;
    $langue = "fr";
    $masque = "PHP %d est disponible en %s";
    printf($masque, $version, $langue);

    /* Masques de printf()
    * %s chaîne de caractères
    * %d nombre entier signé
    * %u nombre entier non signé
    * %f nombre à virgule flottante
    * %b binaire
    * %o octal
    * %x hexadécimal
    * %X hexadécimal avec majuscules
    * %% affiche %
    */

    ?>
</body>
</html>