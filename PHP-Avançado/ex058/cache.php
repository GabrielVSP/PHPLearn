<?php 

    class Cache {

        public $data = null;

        private function createCache() {

            echo 'aa';
            $this->data = ['time' => time() + 60, 'content' => file_get_contents('template.html')];
            file_put_contents('cache', json_encode($this->data));

        }

        public function readCache() {

            if(file_exists('cache')) {

                echo 'Cache já criado';
                $this->data = json_decode(file_get_contents('cache'));

                if($this->data->time < time()) {

                    echo "Hora de criar um cache";
                    self::createCache();

                }

            }else {

                echo 'criando cache pela primeira vez';
                self::createCache();

            }

            return $this->data;

        }

    }

?>