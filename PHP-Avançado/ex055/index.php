<?php 

    class A {



    }

    class B {



    }

    /*$a = new A;
    $b = new B;

    if($a instanceof A) {
        echo "A variavel A faz referencia a sua classe";
    }*/

    function execute($a, $b = 'Gabriel') {

        $a($b);

    }

    execute(function($name) {echo "Olá, $name"; }, 'Akinori')

?>