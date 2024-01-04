<?php

declare(strict_types=1);
session_start();

$uri = $_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="styles/header/header.css">
    <link rel="stylesheet" href="styles/home/home.css">
    <link rel="stylesheet" href="styles/footer/footer.css">

</head>

<body>

    <main>
        <?php

            require "./inc/header.php";

            switch ($uri) {

                case '':
                case '/PHPLearn/0-Projetos/Login/':
                    require __DIR__ . "/pages/home.php";
                    break;

                case "/PHPLearn/0-Projetos/Login/contact":
                    require __DIR__ . "/pages/contact.php";
                    break;

                case "/PHPLearn/0-Projetos/Login/logout":
                    require __DIR__ . "/pages/logout.php";
                    break;

                default:
                    require __DIR__ . "/pages/404.php";
                    break;
            }

            require "./inc/footer.php";

        ?>
    </main>

</body>

</html>