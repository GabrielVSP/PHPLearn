<?php

    include('../config.php');
    include(MAIN_PATH.'\admin\backend\panel.php');
    include(MAIN_PATH.'\admin\backend\database.php');
    include(MAIN_PATH.'\admin\backend\delete-team.php');

    $members = [];
    $pdo = new Database;

    $sql = $pdo::connect()->prepare("SELECT * FROM admin_team");
    if($sql->execute()) {
        $members = $sql->fetchAll();
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <base href="http://localhost/cursoDanki/BootStrap/ex049/admin/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/mq.css">

</head>
<body>

    <?php 

        if(isset($_POST['user'])) {

            echo 'aaaaaa';

        }else {
            echo ' bbb';
        }

        if(isset($_SESSION['login_boot'])) {

            if ($_SESSION['login_boot'] == $user) {



            }

            include_once(MAIN_PATH.'\admin\pages\home.php');

        }else {

            include_once(MAIN_PATH.'\admin\pages\login.php');

        }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>