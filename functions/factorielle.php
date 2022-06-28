<?php

function factorielle(int $valeur): int {
    if ($valeur === 0) {
        return 1;
    }

    else {
        return $valeur * factorielle($valeur - 1);
    }
}