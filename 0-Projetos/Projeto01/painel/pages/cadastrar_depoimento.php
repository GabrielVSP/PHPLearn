<?php

    verifyPermPage(2);

?>


<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">edit</span> Adicionar Depoimentos</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <?php

            if(isset($_POST['action'])) {

                if(Painel::insert($_POST)) {


                    Painel::alert('error', "<div class='success'> <span class='material-symbols-outlined'>check</span> Depoimento cadastrado com sucesso</div>");

                }else {

                    Painel::alert('a', "<div class='error'> <span class='material-symbols-outlined'>error</span> Impossível cadastrar depoimento, cheque se há campos vazios.</div>");

                }                      

            }

        ?>

        <div class="formGroup">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" >

        </div>

        <div class="formGroup">

            <label for="content">Depoimento</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>

        </div>

        <div class="formGroup">

           <input type="submit" value="Enviar Depoimento" name="action">

        </div>

    </form>

</div>