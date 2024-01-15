<?php

    declare(strict_types = 1);
    
    include_once ROOT . "/controller/loginController.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Counter</title>
</head>
<body>
    
    <main>

        <section>

            <h2>Login</h2>

            <form method="post">

                <input type="email" name="email" id="email">
                <input type="password" name="pass" id="pass">

                <?php

                    if(isset($_POST['login'])) {

                        $email = $_POST['email'];
                        $pass = $_POST['pass'];

                        $cntrl = new LoginController();
                        $cntrl->login($email, $pass);

                    }

                ?>

                <input type="submit" name="login" value="Login">

            </form>


        </section>

        <section>

            <h2>Register</h2>

            <form method="post">

                <input type="text" name="name" id="name">
                <input type="email" name="email" id="email">
                <input type="password" name="pass" id="pass">
                <input type="password" name="passR" id="passR">

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

                <input type="submit" name="register" value="Register">

            </form>


        </section>

    </main>

</body>
</html>