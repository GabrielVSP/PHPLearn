<?php 

if (isset($_POST['login'])) {

    $pass = $_POST['password'];
    $email = $_POST['email'];

    include "classes/db.php";
    include "classes/login.php";
    include "classes/loginCtrl.php";

    $controller = new LoginController($pass, $email);
    $controller->login();

    header("Location: http://localhost/PHPLearn/0-Projetos/Login/");

}else if (isset($_POST['register'])) {

    $name = $_POST['username'];
    $pass = $_POST['password'];
    $passRepeat = $_POST['passwordRepeat'];
    $email = $_POST['email'];

    include "classes/db.php";
    include "classes/signup.php";
    include "classes/signupCtrl.php";

    $controller = new SignUpController($name, $pass, $passRepeat, $email);

    $controller->signUp();

    header("Location: http://localhost/PHPLearn/0-Projetos/Login/");

}

?>

<div>
    <?php if (isset($_SESSION['userID'])) {?>
    <p><?= $_SESSION['userUID'] ?></p>
    <a href="logout">Logout</a>
    <?php }?>
</div>

<section id="home">

    <div class="banner"></div>
    <div class="shadow"></div>

    <section id="about">

        <h2>Sobre nós</h2>

        <p>Lorem ipsum dolor <strong>sit</strong> amet consectetur adipisicing elit. Iste necessitatibus distinctio non inventore obcaecati minima provident sint <strong>modi</strong>. Aliquid ad veritatis necessitatibus, consequatur natus repudiandae itaque ab corporis reprehenderit illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. <strong>Expedita</strong> molestias voluptas nisi qui <strong>quos</strong> debitis, iste ullam facilis error dignissimos, veniam.</p>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste necessitatibus distinctio non inventore <strong>obcaecati</strong> minima provident sint modi. Aliquid ad veritatis necessitatibus, consequatur natus repudiandae itaque ab corporis reprehenderit illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita molestias voluptas <strong>nisi</strong> qui quos debitis, iste ullam facilis error dignissimos, veniam. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque molestias aspernatur aliquam dolor quia, id reprehenderit pariatur aliqui</p>

    </section>

    <section id="login">

        <div class="register">

            <h2>Novo por aqui? Registre-se</h2>

            <form method="post">

                <div class="inputGroup">
                    <label for="username">Nome de usuário:</label>
                    <input type="text" name="username" id="username" placeholder="João Ninguem">
                </div>

                <div class="inputGroup">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="joao@gmail.com">
                </div>

                <div class="inputGroup">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Evite usar sequência de números como 12345">
                </div>
                
                <div class="inputGroup">
                    <label for="passwordR">Repita a senha:</label>
                    <input type="password" name="passwordRepeat" id="passwordR">
                </div>

                <input type="submit" value="Registrar" name="register">

            </form>

        </div>

        <div class="login">

            <h2>Já é um membro?</h2>

            <form method="post">

                <div class="inputGroup">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" placeholder="joao@gmail.com">
                </div>

                <div class="inputGroup">
                    <label for="password">Senha:</label>
                    <input type="password" name="password" id="password" placeholder="Senha">
                </div>

                <input type="submit" value="Logar" name="login">

            </form>

        </div>
        
    </section>

</section>