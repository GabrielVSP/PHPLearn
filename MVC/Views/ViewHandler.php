<?php

    namespace Views;

use DirectoryIterator;

    class ViewHandler {

        public $paths = [];

        private $fileName;
        private $header = 'header';
        private $footer = 'footer';

        const docTitle = "MVC Project";

        public function __construct($fileName/*, $header = 'header.php', $footer = 'footer.php'*/) {
            
            $this->fileName = $fileName;
            
            $handle = new DirectoryIterator(dirname(__FILE__).'/pages');
            
            foreach($handle as $file) {

                if(!$file->isDot()) {

                    if (!$file->isDir() && strlen($file->getFilename()) < 12) {

                        $file =  explode('.', $file->getFilename())[0];
                        $this->paths[$file] = $file;

                    }
                }

            }

        }


        public function render($arr = []) {

            require('pages/components/'.$this->header.'.php');

            require('pages/'. $this->fileName . '.php');

            require('pages/components/'.$this->footer.'.php');
            
        }

    }

?>