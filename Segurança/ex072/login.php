<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if(isset($_POST['login'])) {

        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = $pdo->prepare("SELECT * FROM senhas WHERE email = ? LIMIT 1");

        if($sql->execute([$email])) {

            $fetch = $sql->fetchAll();

            echo "<pre>";
            print_r($fetch);
            echo "</pre>";

            if(password_verify($pass, $fetch[0]['password'])) {

                echo 'Logado';

            }else {

                echo "Negado";

            }

        }
     

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form method="post">

        <input type="email" name="email">
        <input type="text" name="password">
        
        <input type="submit" value="Login" name="login">

    </form>

</body>
</html>