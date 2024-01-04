<?php 

    $a = $b = (array)69;
    $b = (int)'123';

    //echo $a, '<br>', $b;

    var_dump($b, $a);
    echo '<br>';

    class Anom {

        public function sendMsg($msg): string {

            return $msg->showMessage();

        }

    }

    $anom = new Anom;
    echo $anom->sendMsg(new Class {
        public function showMessage() {

            return 'Olá, mundo!';

        }
    });

?>