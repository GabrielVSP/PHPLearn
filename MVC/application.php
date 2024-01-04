<?php

    define('VIEW_PATH', 'http://localhost/cursoDanki/MVC/Views');
    define('MAIN_PATH', 'http://localhost/cursoDanki/MVC');

    class Application {

        public static function Execute() {

            $url = isset($_GET['url']) ? explode('/', $_GET['url'])[0] : 'home';

            $url = ucfirst($url);

            $url .= 'controller';

            if(file_exists("Controllers/$url.php")) {

                $classname = "Controllers\\".$url;

                $controller = new $classname;
                $controller->Execute();

            }else {

                die('Esse controlador não existe');

            }

        }

    }

?>