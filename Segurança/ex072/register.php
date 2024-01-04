<?php

    $pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');

    if(isset($_POST['email'])) {

        $email = $_POST['email'];
        $pass = password_hash($_POST['password'], CRYPT_BLOWFISH);

        $sql = $pdo->prepare("INSERT INTO senhas (email, password) VALUES (?, ?)");
        $sql->execute([$email, $pass]);

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    
    <form method="post">

        <input type="text" name="email" required>
        <input type="text" name="password">

        <input type="submit" value="Cadastrar">

    </form>

</body>
</html>