<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time counter</title>

    <script src="scripts/logout.js" defer></script>
    <script src="scripts/timer.js" defer></script>

</head>
<body>

    <base href="http://localhost/PHPLearn/0-Projetos/TimeCounter/">
    
    <header>

        <nav>
            <a href="#">Home</a>
            <a href="#" id="logout">Logout</a>
        </nav>

    </header>

    <main>

        <h2>Hello, <?= $_SESSION['user'][1]?>!</h2>

        <section>

            <div>

                <h3 class="timerName">Nome</h3>
                <h2 class="timer">00:00:00</h2>

            </div>

            <input type="text" name="timerName" id="timerName">

            <button class="init">Iniciar timer</button>
            <button class="end"  disabled>Finalizar</button>

        </section>

    </main>

</body>
</html>