<?php

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=projeto_01', 'root', '');
        //Modo de desenvolvimento(não suba para a prodção)
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch (Exception $e) {

        //echo $e->getMessage();
        echo 'Impossível conectar no momento, tente novamente mais tarde.';

    }

    if(isset($_POST['send'])) {

        $user = $_POST['user'];
        $sql = $pdo->prepare("SELECT * FROM `admin_users` WHERE user = '$user'");
        $sql->execute();

        if($sql->rowCount() == 1) {

            echo 'logado';

        }else {

            echo 'negado';

        }

    }

?>

<form method="post">

    <input type="text" name="user">

    <input type="submit" value="Enviar" name='send'>

</form>