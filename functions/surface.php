<?php 

function surface(int|float $longueur, int|float $largeur): int|float {
    return abs($longueur) * abs($largeur);
}

