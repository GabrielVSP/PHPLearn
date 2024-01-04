<?php

    $content = file_get_contents('https://cursoemvideo.com');
    echo $content;

    /*if (file_exists('texto.txt')) {

        $content = file_get_contents('texto.txt');
        echo nl2br($content);

    }else {

        $data = "Texto editado com sucesso \r\nOlá Mundo";
        file_put_contents('texto.txt', $data);

    }*/

?>