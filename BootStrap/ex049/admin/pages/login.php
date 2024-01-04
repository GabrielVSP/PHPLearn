<section class="login form-control border-dark position-absolute top-50 start-50 translate-middle">

    <h1 class="text-center fs-2">LOGIN</h1>

    <form method="post">

        <div class="mb-3">
            <label for="user" class="form-label">Nome de usuário:</label>
            <input type="text" name="user" class="form-control border-dark" id="user" required>

        </div>

        <div class="mb-3">
            <label for="pass" class="form-label">Senha:</label>
            <input type="password" name="pass" id="pass" class="form-control border-dark" required>
        </div>

        <?php 

            if(isset($_POST['action'])) {

                $user = ($_POST['user']);
                $pass = $_POST['pass'];

                $pdo = new Database;
                $sql = $pdo::connect()->prepare("SELECT * FROM admin_user WHERE user = ? AND password = ?");
                $sql->execute([$user, $pass]);

                if($sql->fetchColumn() === 1) {

                    $_SESSION['login_boot'] = [$user, $pass];

                    if(isset($_POST['remember'])) {

                        Remember::Remember($user);
                
                    }

                    header('Location: http://localhost/cursoDanki/BootStrap/ex049/admin/');

                }else {

                    Warn::Warn('error', 'Falha ao efetuar log-in. Verifique se os dados são validos e tente novamente');

                }

            }

        ?>

        <div class="d-flex justify-content-between align-items-center">
            <input type="submit" value="Enviar" name="action" class="btn btn-primary">
            
            <div>
                <input type="radio" name="remember" id="remember">
                <label for="remember">Lembrar-me</label>
            </div>

        </div>

    </form>

</section>
