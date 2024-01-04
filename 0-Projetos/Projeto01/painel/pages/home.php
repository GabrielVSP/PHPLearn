<?php 

    $onlineUsers = Painel::listOnlineUsers();
    $getTotalVisits = Database::connect()->prepare("SELECT * FROM `admin_visitas`");
    $getTotalVisits->execute();

    $getTotalVisits = $getTotalVisits->rowCount();

    $todayVisits = Database::connect()->prepare("SELECT * FROM `admin_visitas` WHERE dia = ?");
    $todayVisits->execute([date('Y-m-d')]);

    $todayVisits = $todayVisits->rowCount();

?>

<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">home</span>Painel de Controle - <?php echo NOME_EMPRESA;?></h2>

    <div class="center">

        <div class="boxStat">

            <div class="singleStat">

                <div class="wrapper">

                    <h2>Usuários Online</h2>
                    <p><?php echo count($onlineUsers);?></p>

                </div>

            </div>

            <div class="singleStat">

                <div class="wrapper">

                    <h2>Total de visitas</h2>
                    <p><?php echo $getTotalVisits;?></p>

                </div>

            </div>

            <div class="singleStat">

                <div class="wrapper">

                    <h2>Visitas Hoje</h2>
                    <p><?php echo $todayVisits;?></p>

                </div>

            </div>

            <div class="clear"></div>

        </div>

    </div>

</div>

<div class="boxContent w100">

    <h2><span class="material-symbols-outlined">public</span>Usuários Online</h2>

    <div class="table">

        <div class="row" head>

            <div class="col">

                <span>IP</span>

            </div>

            <div class="col">

                <span>Última Ação</span>

            </div>

            <div class="col">

                <span>Página</span>

            </div>

            <div class="clear"></div>

        </div>

        <?php 
        
            foreach($onlineUsers as $key => $value) {

        ?>

        <div class="row">

            <div class="col">

                <span><?php echo $value['ip'];?></span>

            </div>

            <div class="col">

                <span><?php echo date("d/m/Y",strtotime($value['lastaction'])) . " - ". date("H:i:s",strtotime($value['lastaction']));?></span>

            </div>

            <div class="col">

                <span><?php echo $value['page'];?></span>

            </div>

            <div class="clear"></div>

        </div>

        <?php }?>

    </div>

</div>

<div class="boxContent w100">

    <h2><span class="material-symbols-outlined">public</span>Admins cadastrados</h2>

    <div class="table">

        <div class="row" head>

            <div class="col">

                <span>Nome</span>

            </div>

            <div class="col">

                <span>Cargo</span>

            </div>


            <div class="clear"></div>

        </div>

        <?php 
        
            $panelAdmins = Database::connect()->prepare("SELECT * FROM `admin_users`");
            $panelAdmins->execute();
            $panelAdmins = $panelAdmins->fetchAll();

            foreach($panelAdmins as $key => $value) {

        ?>

        <div class="row">

            <div class="col">

                <span><?php echo $value['user'];?></span>

            </div>

            <div class="col">

                <span><?php echo getRole($value['cargo']);?></span>

            </div>

            <div class="clear"></div>

        </div>

        <?php }?>

    </div>

</div>

<div class="clear"></div>
