<?php 

    function test($sum = 1, $multiply = 1) {

        static $num = 0;
        ///echo $num;
        return  $num += $sum * $multiply;

    }

    //echo test() . "<br>" . test() . "<br>" . test(multiply: 3, sum: 2);
    echo test();
    echo test();
    echo test(multiply: 3, sum: 2) . "<br>";

    class Teste {

        function sum() {

            static $num = 0;
            $num += 1;
            return $num;

        }

    }

    $n = new Teste;
    echo $n->sum() . "<br>" . $n->sum();

?>