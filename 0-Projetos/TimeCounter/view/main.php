<main class="flex justify-center items-center flex-col min-h-16/2">

    <section class="flex flex-col">

        <div class="flex flex-col items-center my-3">

            <h3 class="timerName text-3xl mb-4">Timer Name...</h3>
            <h2 class="timer text-4xl p-2 bg-zinc-700 text-white">00:00:00</h2>

        </div>

        <input type="text" name="timerName" id="timerName" placeholder="Timer name" class="p-2 rounded-md">

        <div class="flex justify-around my-4">
            <button class="init bg-zinc-700 text-white text-lg p-0.5  rounded-sm hover:shadow-2xl cursor-pointer" style="transition: 0.6s">Init timer</button>
            <button class="pause bg-zinc-700 text-white text-lg p-0.5  rounded-sm hover:shadow-2xl cursor-pointer" style="transition: 0.6s" disabled state="pause">Pause</button>
            <button class="end bg-zinc-700 text-white text-lg p-0.5 rounded-sm hover:shadow-2xl cursor-pointer"  style="transition: 0.6s" disabled>End</button>
        </div>

    </section>

</main>

<script src="scripts/timer.js" defer></script>