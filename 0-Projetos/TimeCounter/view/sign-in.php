    <main class="flex justify-center items-center bg-lightred" style="height: 100vh">

        <section class="bg-zinc-700 rounded-md p-3 flex flex-col justify-center items-center md:w-1/3">

         <section class="flex flex-col justify-center items-center w-full">

            <h2 class="text-4xl text-white my-2">Login</h2>

                <form method="post" class="flex flex-col justify-center items-center w-full">

                    <div class="my-2 w-full">
                        <label for="email" class="text-zinc-300 p-2">E-mail</label>
                        <input type="email" name="email" id="email" class="w-full p-2 border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <div class="my-2 w-full">
                        <label for="pass" class="text-zinc-300 p-2">Password</label>
                        <input type="password" name="pass" id="pass" class="w-full p-2 border border-solid border-zinc-400 bg-zinc-700 rounded-md">
                    </div>

                    <?php

                        if(isset($_POST['login'])) {

                            $email = $_POST['email'];
                            $pass = $_POST['pass'];

                            $cntrl = new LoginController();
                            var_dump($cntrl->login($email, $pass));

                        }

                    ?>

                    <input type="submit" name="login" value="Login" class="w-full my-4 rounded-sm bg-lightred p-2 cursor-pointer">

                </form>

                <p class="text-white">New? <a href="register" class="text-lightred">Register</a></p>

            </section>

        </section>

    </main>
