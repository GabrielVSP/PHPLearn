<?php 

    date_default_timezone_set('America/Sao_Paulo');

    $name = 'arkinori';

    if($name !== 'arkinori') {

        error_log("\n " . date('d/m/Y H:i:s') . ' Erro: Você não é o akinori', 3, 'output.log');

    }

    function custom($a) {

        if ($a == 1) {

            echo 'Success';

        }else  {

            throw new Exception("Impossível", 2);

        }

    }

    try {

        custom(1);

    } catch(Exception $e) {

        echo $e->getMessage();

    }

?>