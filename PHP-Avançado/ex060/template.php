<?php 

    namespace Base;

    class Template {

        public static function render($arr, $file) {

            $chosFile = file_get_contents('files/'.$file);

            foreach($arr as $key => $value) {

                $chosFile = str_replace('{'.$key.'}', $value, $chosFile);

            }

            echo $chosFile;

        }

    }

?>