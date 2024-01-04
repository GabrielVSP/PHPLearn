<?php

    include('./panel.php');
    include('../../config.php');
    include(MAIN_PATH.'\admin\backend\database.php');

    //$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME, USER, PASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    $pdo = new Database;
    //$pdo = $db::connect();
    //$sql = $pdo->prepare("INSERT INTO admin_aboutsite (about) VALUES (?)");
    $sql = $pdo::connect()->prepare("SELECT * FROM admin_aboutsite");
    $sql->execute();

    $count = count($sql->fetchAll());

    $about;

    if(isset($_POST['about'])) {

        $about = $_POST['about'];   

    }else if (isset($_GET['about'])) {

        $about = $_GET['about'];

    }


    if(strlen($about) > 20 ) {

        if($count-1 < 0) {

            $sql = $pdo::connect()->prepare("INSERT INTO admin_aboutsite (about) VALUES (?)");
            if ($sql->execute([$about])) {

                Warn::Warn('success', 'Sobre atualizado com sucesso');
                $aboutSite = $about;
        
            }else {

                Warn::Warn('error', 'Falha ao atualizar Sobre');

            }

        }else {

            $sql = $pdo::connect()->prepare("UPDATE admin_aboutsite SET about = ? WHERE 1");
            if($sql->execute([$about])) {

                Warn::Warn('success', 'Sobre atualizado com sucesso');
                $aboutSite = $about;

            }else {

                Warn::Warn('error', 'Falha ao atualizar Sobre');

            }

        }
    }else {
        Warn::Warn('error', 'Mínimo 20 caracteres');
    }   
    
   
 
?>