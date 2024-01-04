<?php

    verifyPermPage(2);

?>


<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">edit</span> Adicionar Serviços</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <?php

            if(isset($_POST['action'])) {

                if(Painel::insert($_POST, 'site_servicos')) {


                    Painel::alert('error', "<div class='success'> <span class='material-symbols-outlined'>check</span> Serviço cadastrado com sucesso</div>");

                }else {

                    Painel::alert('a', "<div class='error'> <span class='material-symbols-outlined'>error</span> Impossível cadastrar serviço, cheque se há campos vazios.</div>");

                }                      

            }

        ?>

        <div class="formGroup">
            <label for="content">Serviço</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>

        </div>

        <div class="formGroup">

           <input type="submit" value="Enviar Serviço" name="action">

        </div>

    </form>

</div>