<?php

    namespace Controllers;
    //use Views as Views;

    class ContactController extends Controller {

        public function Execute() {

            if(isset($_POST['action'])) {

                header("Location: ".MAIN_PATH.'/contact/success');
                echo "<script>  </script>";
                die();

            }

            \Router::Route('contato/success', function() {
                $this->view = new \Views\ViewHandler('successContact');
                $this->view->render(['title' => 'Success']);
            });

            \Router::Route('contato', function() {
                $this->view = new \Views\ViewHandler('contact');
                $this->view->render(['title' => 'Contato']);
            });

        }

    }

?>