<?php 

    echo "<h2>Classes de caracteres</h2>";

    echo "<h3>Palavras e espaços</h3>";

    //$pattern = '/^[a-zA-Z0-9 ]+$/';
    $pattern = '/^[\w\s]+$/'; // O \w checa por caracteres alfa numéricos + underline e o /s por espaços/tab/quebras de linha
    $source  = 'Omega Industries';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h3>Caracteres numéricos</h3>";

   // $pattern = '/^[0-9]+$/';
    $pattern = '/^[\d]+$/'; // o \d checa por números entre 0 e 9
    $source  = '1234';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h3>Negando classes e conjuntos</h3>";

   // $pattern = '/^[^0-9]+$/'; // O acento cícunflexo dentro de conjuntos indica negação, então o conjunto deve ser falso
   // $pattern = '/^[\D]+$/'; // o \D checa por caracteres não númericos
    $pattern = '/^[\W]+$/'; // o \W checa por caracteres não alfa númericos
    $source  = '$$';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h3>Classe de fronteiras</h3>";

    /*$pattern = '/\bpropor\b/'; //Deve haver uma 'fronteira' após o 'r' e antes do 'b', buscando apenas pela palavra propor 
    $source  = 'ação de propor e proporcionar uma festa';*/
    $pattern = '/lar\B/'; //Nega a barreira
    $source  = 'Você pode falar';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Flags</h2>";

    echo "<h3>Flags de case insensitive</h3>";

    $pattern = '/^[a-z ]+$/i'; //As flags são definidas após a ultima barra, a flag i é usada para checar por caracteres maíusculos, sem necessidade de defini-los em conjuntos
    $source  = 'Drive akinori';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h3>Flag de multiline</h3>";

    $pattern = '/^drive$/im'; //A flag m faz a expressão ser reiniciada a cada linha, fazendo com que a expressão seja lida de novo a cada linha
    $source  = 'drive
    drive';
    $result = preg_match($pattern, $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h3>Global search</h3>";

    $pattern = '/([\w]+) (drive)/im'; 
    $source  = 'Owner drive
    Admin drive';
    $result = preg_match_all($pattern, $source, $matches); //O preg_match_all retornará todas as ocorrências, não só a primeira

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; print_r($matches); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

    echo "<h2>Removendo caracteres indesejados</h2>";

    $pattern = '/\D/'; 
   // $source  = '123.456.789-10';
    $source = '+55 (64) 9 1234-5678';
    $result = preg_match_all($pattern, $source, $matches);
    $replace = preg_replace($pattern, '', $source);

    echo "<pre>"; print_r($pattern); echo "</pre>";
    echo "<pre>"; print_r($source); echo "</pre>";
    echo "<pre>"; print_r($replace); echo "</pre>";
    echo "<pre>"; var_dump($result); echo "</pre>";

?>