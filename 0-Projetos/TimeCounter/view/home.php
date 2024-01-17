<?php  $uri = $_SERVER["REQUEST_URI"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time counter</title>

    <script src="scripts/logout.js" defer></script>

</head>
<body>

    <base href="http://localhost/PHPLearn/0-Projetos/TimeCounter/">
    
    <header>

        <nav>
            <a href="<?= BASE_URL?>">Home</a>
            <a href="<?= $uri?>history">History</a>
            <a href="#" id="logout">Logout</a>
        </nav>

    </header>

    <?php 

        switch ($uri) {

            case "/PHPLearn/0-Projetos/TimeCounter/":
                require ROOT . "/view/main.php";
                break;

            case "/PHPLearn/0-Projetos/TimeCounter/history":
                require ROOT . "/view/history.php";
                break;

            default:
                require ROOT . "/view/404.php";
                break;

        }


    ?>

</body>
</html>