
    <main class="flex justify-center items-center bg-lightred" style="height: 100vh">

        <section class="bg-zinc-700 rounded-md p-3 flex flex-col justify-center items-center md:w-1/3">

            <section class="flex flex-col justify-center items-center w-full">

                <h2 class="text-4xl text-white my-2">Register</h2>

                <form method="post" class="flex flex-col justify-center items-center w-full">

                    <div class="my-2 w-full">
                        <label for="name" class="text-zinc-300 p-2">Username</label>
                        <input type="text" name="name" id="name" class="w-full p-2 text-white border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <div class="my-2 w-full">
                        <label for="email" class="text-zinc-300 p-2">E-mail</label>
                        <input type="email" name="email" id="email" class="w-full p-2 text-white border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <div class="my-2 w-full">
                        <label for="pass" class="text-zinc-300 p-2">Password</label>
                        <input type="password" name="pass" id="pass" class="w-full p-2 text-white border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <div class="my-2 w-full">
                        <label for="passR" class="text-zinc-300 p-2">Repeat Password</label>
                        <input type="password" name="passR" id="passR" class="w-full p-2 text-white border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <?php

                        if(isset($_POST['register'])) {

                            $name = $_POST['name'];
                            $email = $_POST['email'];
                            $pass = $_POST['pass'];
                            $passR = $_POST['passR'];

                            $cntrl = new LoginController();
                            $cntrl->register($name, $email, $pass, $passR);

                        }

                    ?>

                    <input type="submit" name="register" value="Register" class="w-full my-4 rounded-sm bg-lightred p-2 cursor-pointer">

                </form>

                <p class="text-white">Already a member? <a href="http://localhost/PHPLearn/0-Projetos/TimeCounter/" class="text-lightred">Login</a></p>

            </section>

        </section>

    </main>

</body>
</html>