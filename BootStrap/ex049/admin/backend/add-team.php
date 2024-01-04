<?php

    include('../../config.php');
    include('./panel.php');
    include(MAIN_PATH.'\admin\backend\database.php');

    if(isset($_POST['team-name']) && isset($_POST['team-about'])) {

        $name = strip_tags($_POST['team-name']);
        $about = strip_tags($_POST['team-about']);

        if(strlen($about) >= 30) {

            $pdo = new Database;
            $sql = $pdo::connect()->prepare("INSERT INTO admin_team (name, about) VALUES (?, ?)");
    
            if ($sql->execute([$name, $about])) {
    
                    Warn::Warn('success', 'Membro adicionado com sucesso');
    
            }else {
    
                    Warn::Warn('error', 'Falha ao adicionar membro');
    
            }

        }else {

            Warn::Warn('error', 'Mínimo de 30 caracteres');

        }
       
    }else if(isset($_GET['data'])) {

        $pdo = new Database;

        $sql = $pdo::connect()->prepare("SELECT * FROM admin_team");
        $sql->execute();

        print_r(json_encode($sql->fetchAll()));

    }

?>