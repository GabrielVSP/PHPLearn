<?php

    if(isset($_POST['request']) && $_POST['request'] === 'nome_return') {

        $news = [['News 1', 'Content 1'], ['News 2', 'Content 2']];

        die(json_encode($news));
    }

?>