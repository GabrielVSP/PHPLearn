<?php 

    $nome = 'drive';
    //$ark = &$nome;

    function change(&$var) {

        //global $ark;
        $var = 'arkinori';


    }

    change($nome);
    //echo $nome;

    class Teste {

        public function index() {

            echo 'Index0()';

        }

    }

    class Teste1 {

        public function index() {

            echo 'Index1()';

        }

        public function callback($func) {

            if($func instanceof Closure) {
                $func();
            }

        }

    }

    $test = new Teste;
    $test1 = new Teste1;

    $test1->callback(
        function() use ($test, $test1) {
            $test->index();
            $test1->index();
            echo 'Hello, world!';
        }
    ) 
    

?>