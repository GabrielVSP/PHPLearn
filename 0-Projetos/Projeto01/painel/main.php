<?php 

    if(isset($_GET['loggout'])) {
        Painel::loggout();
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

    <div class="sidebar">

        <div class="menuWrapper">
            <div class="userBox">

                <?php 
                    if ($_SESSION['img'] == '') {
                ?>
                <div class="avatar">
                    <span class="material-symbols-outlined">
                        person
                    </span>
                </div>
                <?php }else { ?>
                
                <div class="imgAvatar">
                    <img src="<?php echo INCLUDE_PATH_PAINEL .'uploads/'. $_SESSION['img']; ?>" alt="">
                </div>

                <?php } ?>

                <div class="nome">
                    <p><?php echo $_SESSION['nome']; ?></p>
                    <p><?php echo getRole($_SESSION['cargo']); ?></p>
                </div>

            </div>

            <div class="abas">

                    <h2>Cadastro</h2>

                    <a <?php selectMenu('cadastrar-depoimento');?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar_depoimento">Cadastrar Depoimento</a>
                    <a <?php selectMenu('cadastrar-servico');?> href="<?php echo INCLUDE_PATH_PAINEL?>cadastrar_servico">Cadastrar Serviço</a>
                    <a <?php selectMenu('cadastrar-slides');?> href="#">Cadastrar Slides</a>

                    <h2>Gestão</h2>

                    <a <?php selectMenu('usar-depoimentos');?> href="<?php echo INCLUDE_PATH_PAINEL?>usar-depoimentos">Usar Depoimentos</a>
                    <a <?php selectMenu('usar-servico');?> href="#">Usar Serviço</a>
                    <a <?php selectMenu('usar-slides');?> href="#">Usar Slides</a>

                    <h2>Administração do Painel</h2>

                    <a <?php selectMenu('edit-user');?> href="<?php echo INCLUDE_PATH_PAINEL ?>edit-user">Editar Usuário</a>

                    <a href="<?php echo INCLUDE_PATH_PAINEL ?>add-user"" <?php selectMenu('add-user');?> <?php verifyPermMenu('1');?>>Adicionar Usuários</a>

                    <h2>Configuração Geral</h2>

                    <a <?php selectMenu('editar-site');?> href="#">Editar Site</a>

            </div>

        </div>
    </div>

    <header>

        <div class="center">

            <div class="menuBtn left">

                <span class="material-symbols-outlined">
                    menu
                </span>

            </div>

            <div class="btnHome left">
                <a href="<?php echo INCLUDE_PATH_PAINEL;?>home">
                    <span class="material-symbols-outlined" <?php if(@$_GET['url'] == 'home' || @$_GET['url'] == ''){echo 'style="border: 1px solid white;"';}?> >
                        home
                    </span>
                </a>
            </div>

            <div class="logout right">

                <a href="<?php echo INCLUDE_PATH_PAINEL;?>?loggout">
                <span class="material-symbols-outlined">
                    logout
                </span>
                </a>

            </div>

        </div><!--center-->

        <div class="clear"></div>

    </header>

    <div class="clear"></div>

    <main class="left">

        <?php 

            Painel::loadPage();

        ?>

        <div class="clear"></div>

    </main>

    <script src="<?php echo INCLUDE_PATH; ?>scripts/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH_PAINEL;?>scripts/main.js"></script>

</body>
</html>