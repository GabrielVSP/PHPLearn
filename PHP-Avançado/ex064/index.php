<?php 

    /*define("PI", ['host' => 'localhost', 'db' => 'dbname', 'user' => 'root', 'password' => '']);

    var_dump(PI);*/

    class Hello {

        public function sendMsg($n) {

            if ($n instanceof Closure) {

                $n = $n->bindTo($this);
                $n();

            }

        }

        public function goodbye() {

            echo "bye";

        }

    }   

    $hello = new Hello;
    $hello->sendMsg(function ()  {echo 'Olá'; $this->goodbye();});


?>