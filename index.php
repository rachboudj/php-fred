<?php

// Afficher une chaîne de caractère
$toto = "<h1>12</h1>";
echo $toto;

// Affichage de variables 
$jour = "lundi";
echo 'Nous sommes ' . $jour . '.';
echo "<br />";

// Avec guillemets doubles, la variable est évaluée
echo 'Nous sommes $jour';
echo "<br />";
// Avec guillemets simples, la variable ne l'est pas
echo "Nous sommes $jour";
echo "<br />";

// Obtenir le type de la variable
echo gettype($jour);
echo "<br />";

// Afficher des infos sur le type de la variable et
var_dump($jour);

echo "<br />";

// La fonction print_r() retour un résultat similaire, mais sans mentionner le type 
print_r($jour);

/* 
Quelques règles : 
- toutes les variables commencent par le signe $
- toutes les variables commencent par une lettre ou '_'
- le nom d'une variable contient des lettres, chiffres, des underscore
- le nom d'une variable ne contient pas d'espace
*/
echo "<br />";

$jour = "mardi";
$jourTest = $jour = "mercredi";

// Passage par référence
$a = 1;
$b = &$a;
echo $b;

/* Les différents types de variables 
- String 
- Integer
- Float 
- Boolean
- NULL
- Array
- Object 
- Ressource 
- Enumeration ou Enums
*/

/* Opérateurs 
- Addition +
- Soustraction -
- Multiplication *
- Division /
- Modulo %
- ** (10 puissance 2 : 10 ** 2)
*/

/* Opérateurs combinés 
$i = $i + 1;
$i++;
$i += 1;
*/

/* Opérateurs de comparaison 
- == compare la valeur
- === compare la valeur et le type (utilisé surtout avec les booléans)
- != ou <> différent en valeur 
- ! == différent en valeurs et en types

$x = $x / 4;
$x /= 4;
*/

// Exemple de vérification d'opérateurs de comparaison avec la fonction var_dump()

$x = 42;
var_dump($x == "42");

echo "<br />";
$x = 210;

// Selon PSR-12 : mettre des espaces après if et elseif

echo "<br />";
$x = 0;

// if (isset($x) && is_numeric($x)){
if (isset($x) && (is_numeric($x) || is_float($x))){
    if ($x > 0){
        echo '$x est positif';
    } elseif ($x < 0) {
        echo '$x est négatif';
    } else {
        echo '$x est nul';
    }
} else {
    echo '$x est vide';
}

echo "<br />";
$truc = 20;
// echo $truc++;
echo ++$truc;

// ++, --

$resultat = "<ul>";
for($i = 0 ; $i <= 100 ; $i++) {
    $resultat .= "<li>";
    $resultat .= $i;
    $resultat .= "</li>";
}
$resultat .= "<ul>";
echo $resultat;

echo "<br />";
echo "<br />";

$compteur = 0;
$resultat = "<ul>";
for($i = 0 ; $i <= 100 ; $i++) {
    $resultat .= "<li>";
    $resultat .= $i;
    $resultat .= "</li>";
for($i = -17627 ; $i <= 14256 ; $i++) {
    if ($i % 7 === 0) {
        $resultat .= "<li>";
        $resultat .= $i;
        $resultat .= "</li>";
        $compteur++;
    }
}
$resultat .= "<ul>";
$resultat .= "</ul>";
$resultat .= "<p>Il y a $compteur resultats</p>";


// $compteur = 0;
// $i = -17627 ;
// $resultat2 = "<ul>";

// while ($i <= 14256) {
//     if ($i % 7 === 0) {
//         $resultat2 .= "<li>";
//         $resultat2 .= $i;
//         $resultat2 .= "</li>";
//         $compteur++;
//     }
//     $i++;
// }

// $resultat2 .= "</ul>";
// $resultat2 .= "<p>Il y a $compteur resultats</p>";

// echo $resultat2;