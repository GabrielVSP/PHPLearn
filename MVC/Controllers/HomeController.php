<?php

    namespace Controllers;

    class HomeController extends Controller {

        public function __construct() {
            
            $this->view = new \Views\ViewHandler('home');

        }

        public function Execute() {

            $this->view->render(['title' => 'home']);

        }

    }

?>