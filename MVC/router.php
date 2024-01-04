<?php 

    class Router {

        public static function Route($path, $arg) {

            $url = isset($_GET['url']) ? $_GET['url'] : '';

            if($url === $path) {

                $arg();

                die();

            }

            $path = explode("/", $path);
            $url = explode('/', $url);
            $debounce = true;
            $par = [];

            if(count($path) === count($url)) {

                foreach($path as $key => $value) {

                    if($value = '?') {

                        $par[$key] = $url[$key];

                    }else {

                        if($url[$key] !== $value) {

                            $debounce = false;
                            break;

                        }

                    }

                }

                if($debounce) {

                    $arg($par);
                    die();

                }

            }

        }

    }

?>