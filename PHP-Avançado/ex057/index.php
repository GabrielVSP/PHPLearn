<?php 

    $nome = 'drive';
    $ark = 'arkinori';

    $func = function() use ($nome, $ark) {

        echo "Hello $nome and $ark";

    };

    $func();

?>