<?php 


    if(isset($_COOKIE['remind'])) {

        $user = $_COOKIE['user'];
        $pass = $_COOKIE['password'];

        $sql = Database::connect()->prepare("SELECT * FROM `admin_users` WHERE user = ? AND password = ?");

        $sql->execute([$user, $pass]);

        if($sql->rowCount() == 1) {

            $info = $sql->fetch();

            $_SESSION['login'] = true;
            $_SESSION['user'] = $user;
            $_SESSION['password'] = $info['password'];
            $_SESSION['cargo'] = $info['cargo'];
            $_SESSION['nome'] = $info['name'];
            $_SESSION['img'] = $info['img'];

            header('Location: '.INCLUDE_PATH_PAINEL);
            die();

        }

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>

    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PAINEL; ?>style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<body>
    
    <section class="boxLogin">

        <h2>Efetue o login</h2>

        <form action="" method="post">

            <input type="text" name="user" id="user" placeholder="Login..." required>
            <input type="password" name="password" id="password" placeholder="Senha.." required>

            <?php 
      
                if( isset($_POST['acao']))
                {

                    $user = $_POST['user'];
                    $pass = $_POST['password'];
                    
                    $sql = Database::connect()->prepare("SELECT * FROM `admin_users` WHERE user = ? AND password = ?");

                    $sql->execute([$user, $pass]);

                    if($sql->rowCount() == 1) {

                        //login efetuado

                        $info = $sql->fetch();

                        $_SESSION['login'] = true;
                        $_SESSION['user'] = $user;
                        $_SESSION['password'] = $info['password'];
                        $_SESSION['cargo'] = $info['cargo'];
                        $_SESSION['nome'] = $info['name'];
                        $_SESSION['img'] = $info['img'];

                        if(isset($_POST['remind'])) {

                            setcookie('remind', true, time() + (60 * 60 * 24), '/');
                            setcookie('user', $user,  time() + (60 * 60 * 24), '/');
                            setcookie('password', $pass,  time() + (60 * 60 * 24), '/');

                        }

                        header('Location: '.INCLUDE_PATH_PAINEL);
                        die();

                    }
                    else
                    {

                        echo "<h3><span class='material-symbols-outlined'>
                        error
                        </span>Usuário ou senha incorretos!<span class='material-symbols-outlined'>
                        error
                        </span></h3>";

                    }

                }

            ?>

            <div class="formGroupLogin left">
                <input type="submit" value="Logar" name="acao">
            </div>

            <div class="formGroupLogin right">

                <label for="remind">Lembrar-me:</label>
                <input type="checkbox" name="remind" id="remind">
                
            </div>

            <div class="clear"></div>

        </form>

    </section>

</body>
</html>