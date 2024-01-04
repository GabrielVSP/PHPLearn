<?php

    verifyPermPage(2);

    if(isset($_GET['id'])){

        $id = (int)$_GET['id'];
        $depoimento = Painel::select('site_depoimentos', 'id = ?', [$id]);

    }else {
        Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Paràmetro ID não foi informado</div>");
        die();
    }

?>


<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">edit</span> Editar Depoimento</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <?php

            if(isset($_POST['action'])) {

                if(Painel::update('site_depoimentos' ,$_POST)) {

                    Painel::alert('error', "<div class='success'> <span class='material-symbols-outlined'>check</span> Depoimento atualizado com sucesso</div>");
                    $depoimento = Painel::select('site_depoimentos', 'id = ?', [$id]);
                    

                }else {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> ímpossivel atualizar depoimento</div>");

                }

               
            }

        ?>

        <div class="formGroup">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="<?php echo $depoimento['nome']?>">

        </div>

        <div class="formGroup">

            <label for="content">Depoimento</label>
            <textarea name="content" id="content" cols="30" rows="10">
            <?php echo $depoimento['content']?>
            </textarea>

        </div>

        <div class="formGroup">

            <input type="hidden" name="id" value="<?php echo $id?>">
           <input type="submit" value="Enviar Depoimento" name="action">

        </div>

    </form>

</div>