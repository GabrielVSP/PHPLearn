<?php

    declare(strict_types = 1);
    
    include_once ROOT . "/controller/loginController.php";
    $uri = $_SERVER["REQUEST_URI"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Counter</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        lightred: '#C6D57E',
                        cleanred: '#95554E',

                    }
                }
            }
            }
    </script>
</head>
<body>

    <?php 

        switch ($uri) {

            case "/PHPLearn/0-Projetos/TimeCounter/register":
                require ROOT . "/view/register.php";
                break;

            case "/PHPLearn/0-Projetos/TimeCounter/":
                require ROOT . "/view/sign-in.php";
                break;

            default:
                require ROOT . "/view/404.php";
                break;

        }


    ?>

</body>
</html>