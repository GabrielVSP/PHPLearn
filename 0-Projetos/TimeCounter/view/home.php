<?php  $uri = $_SERVER["REQUEST_URI"]; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time counter</title>

    <script src="scripts/logout.js" defer></script>
    <script src="scripts/menu.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

    <base href="http://localhost/PHPLearn/0-Projetos/TimeCounter/">
    
    <header class="p-3 bg-zinc-700 flex justify-between items-center">

        <h2 class="text-2xl text-lime-900 bg-lightred p-1">Time Counter</h2>

        <nav class="p-3 flex lg:basis-1/6 justify-evenly items-center hidden lg:block">

            <div class="lg:flex basis-2/5 justify-evenly">
                <a href="<?= BASE_URL?>" class="text-lightred text-lg">Home</a>
                <a href="<?= $uri?>history" class="text-lightred text-lg">History</a>
            </div>

            <div class="bg-zinc-950 w-px h-4 hidden lg:block"></div>

            <a href="#" id="logout" class="text-lightred text-lg">Logout</a>
        </nav>

        <div>

            <button class="menuBtn text-white">
                <span class="material-symbols-outlined text-4xl">
                    menu
                </span>
            </button>

            <nav class="hidden menu">
                <a href="<?= BASE_URL?>" class="text-lightred text-lg">Home</a>
                <a href="<?= $uri?>history" class="text-lightred text-lg">History</a>
                <a href="#" id="logout" class="text-lightred text-lg">Logout</a>
            </nav>

        </div>

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