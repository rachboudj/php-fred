<?php 

function compterMots() {

    $str = "C'est une belle chose d'être honnête, mais il est également important d'avoir raison.";

    print_r(str_word_count($str, 1));
    // print_r(str_word_count($str, 2));
    // print_r(str_word_count($str, 1, 'àáãç3'));

    echo "<pre>";
    echo str_word_count($str);
    echo "</pre>";

}