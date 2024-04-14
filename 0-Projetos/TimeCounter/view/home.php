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

                    },
                    minHeight: {
                        '16/2': '80vh',
                    }
                }
            }
            }
    </script>

    <style>

        html {
            min-height: 100vh;
            background: #C6D57E;
        }

    </style>

</head>
<body>

    <base href="http://localhost/PHPLearn/0-Projetos/TimeCounter/">
    
    <header class="p-3 bg-zinc-700 flex justify-between items-center">

        <h2 class="text-2xl text-lime-900 bg-lightred p-1">Time Counter</h2>

        <nav class="p-3 lg:basis-1/6 justify-evenly items-center">

            <button class="menuBtn text-white md:hidden">
                <span class="material-symbols-outlined text-4xl">
                    menu
                </span>
            </button>

            <div class="menu pt-4 right-full fixed transition-all md:static md:right-0 flex flex-col md:flex-row md:w-1/6 w-full bg-zinc-700 opacity-90">
                <a href="<?= BASE_URL?>" class="text-lightred text-lg p-3 md:p-1 hover:bg-lightred hover:text-zinc-700" style="transition: 0.8s">Home</a>
                <a href="<?= $uri?>history" class="text-lightred text-lg p-3 md:p-1 hover:bg-lightred hover:text-zinc-700" style="transition: 0.8s">History</a>
                <a href="#" id="logout" class="text-lightred text-lg p-3 md:p-1 hover:bg-lightred hover:text-zinc-700" style="transition: 0.8s">Logout</a>
            </div>

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