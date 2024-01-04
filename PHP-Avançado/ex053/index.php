<?php 

    function sum() {

        static $i = 0;
        $i++;

        echo "Olá, mundo!";

        if ($i < 3){
            sum();
        }

    }

    sum();

?>