<?php

function volume(int|float $longeur, int|float $largeur, int|float $hauteur): int|float {
    $volumePiece = surface($longeur, $largeur) * abs($hauteur);
    return round ($volumePiece, 2);
}