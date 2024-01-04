<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    
    <h1>Váriaveis do servidor</h1>

    <?php 
    
        echo $_SERVER["SERVER_NAME"];
        echo $_SERVER["DOCUMENT_ROOT"];

       /*echo "<pre>";

        print_r($_SERVER);

        echo "<\pre>"*/
    
    ?>

    <h1>Criando váriaveis</h1>

    <?php 
    
        $nome = "Gabriel";
        $idade = 16;
        $gosto = true;
        $pi = 3.14159;

        echo "Meu nome é $nome";

        $nome = "Vergílio";
        echo " e meu sobrenome é $nome";

        echo "<br>Eu tenho $idade anos";
        echo "<br>Eu gosto de pizza? $gosto";
        echo "<br>Os primeiros digitos de pi são: $pi";

    ?>

    <h1>Tipos de viriáveis</h1>

    <?php 
    
        echo "A variável nome é uma string e a váriavel idade é um inteiro";
        echo "<br>A váriavel gosto é um bool";
        echo "<br>A várivael pi é um double";

    ?>

</body>
</html>