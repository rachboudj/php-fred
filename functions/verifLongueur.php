<?php 

function verifLongueur(string $chaine, int $nbrMinimumCaracteres): string {
    if (mb_strlen($chaine) >= $nbrMinimumCaracteres)
        $message = "Nombre de caractères suffisant";
    else 
        $message = "Nombre de caractères insuffisants, il en manque " . $nbrMinimumCaracteres - mb_strlen($chaine);
    return $message;
}

/* 

Écrire une fonction comprenant deux paramètres : une chaîne de caractères à saisir (type nom ou mot de passe) 
et un nombre minimum de caractères que doit comporter la chaîne.
Dans les deux cas, afficher un message indiquant 
que si le nombre de caractères est suffisant ou non.

*/