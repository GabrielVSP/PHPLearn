<?php

    namespace Controllers;
    //use Views as Views;

    class AboutController extends Controller {

        public function __construct() {
            
            $this->view = new \Views\ViewHandler('about');

        }

        public function Execute() {

            $this->view->render(['title' => 'About']);

        }

    }

?>