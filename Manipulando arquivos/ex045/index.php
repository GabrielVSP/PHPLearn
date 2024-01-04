<?php

    if(!is_dir("./js")) {

        mkdir('js');

    }else {

        echo "Já existe";
        rmdir("./js");

    }

    if(is_dir("./html")) {

        $folder = opendir('./html');

        while ($file = readdir($folder)) {

            if($file == "." || $file == '..') {
                continue;
            }

            if(is_dir("./html/$file")) {
                echo "$file é uma pasta <br>";
            }
            else {
                echo "$file é um arquivo <br>";
            }

            //echo "$file <br>";

        }

        closedir($folder);

        /*for($i = 0; $i < 5; $i++) {

            //unlink("page$i.html");
            file_put_contents("./html/page$i.html", "<h1>Hello, world!</h1>");

        }*/

    }

?>