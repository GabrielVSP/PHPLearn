<main>

    <h2>Hello, <?= $_SESSION['user'][1]?>!</h2>

    <section>

        <div>

            <h3 class="timerName">Nome</h3>
            <h2 class="timer">00:00:00</h2>

        </div>

        <input type="text" name="timerName" id="timerName">

        <button class="init">Init timer</button>
        <button class="pause" disabled state="pause">Pause</button>
        <button class="end"  disabled>End</button>

    </section>

</main>

<script src="scripts/timer.js" defer></script>