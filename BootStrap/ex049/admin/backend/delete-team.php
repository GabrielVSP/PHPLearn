<?php

    require_once(__DIR__ . '/../../config.php');
    require_once(MAIN_PATH.'\admin\backend\database.php');

    if(isset($_POST['data'])) {

        $pdo = new Database;
        $sql = $pdo::connect()->prepare("DELETE FROM `admin_team` WHERE id = ?");

        if($sql->execute([$_POST['data']])) {

            //echo "<script>location.href='http://localhost/cursoDanki/BootStrap/ex049/admin/'</script>";
            die();

        }

    }
    else if(isset($_GET['data'])) {

        $pdo = new Database;

        $sql = $pdo::connect()->prepare("SELECT * FROM admin_team");
        $sql->execute();

        print_r(json_encode($sql->fetchAll()));

    }

?>