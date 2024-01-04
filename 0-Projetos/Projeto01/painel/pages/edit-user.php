<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">edit</span> Editar Usuário</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <?php

            if(isset($_POST['action'])) {

                $user = new User;

                $newName = $_POST['nome'];
                $newPass = $_POST['password'];
                $newImg = $_FILES['img'];
                $actImg = $_POST['actImg'];
                
                if($newImg['name'] != '') {

                    if (Painel::isValid($newImg)) {
                       
                        $newImg = Painel::uploadImage($newImg);
                        Painel::deleteFile($actImg);

                        if ($user->updateUser($newName, $newPass, $newImg, $actImg)) {
                            Painel::alert('success', "<div class='success'> <span class='material-symbols-outlined'>check</span> Dados atualizados com sucesso</div>");
                            $_SESSION['img'] = $newImg;
                        }else {
                            Painel::alert('error', "<div class='error'><span class='material-symbols-outlined'>error</span> Impossível atualizar dados devido a imagem</div>");
                        }

                    }else {
                        Painel::alert('error', "<div class='error'><span class='material-symbols-outlined'>error</span> Formato inválido de imagem</div>");
                    }
                }
                else
                {

                    $newImg = $actImg;

                   if ($user->updateUser($newName, $newPass, $newImg, $actImg)) {
                    Painel::alert('success', "<div class='success'> <span class='material-symbols-outlined'>check</span> Dados atualizados com sucesso</div>");
                   }else {
                    Painel::alert('error', "<div class='error'><span class='material-symbols-outlined'>error</span> Impossível atualizar dados</div>");
                   }

                }

            }

        ?>

        <div class="formGroup">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?php echo $_SESSION['nome'];?>">

        </div>

        <div class="formGroup">

            <label for="pass">Senha:</label>
            <input type="password" name="password" id="pass" required value="<?php echo $_SESSION['password'];?>">

        </div>

        <div class="formGroup">

            <label for="img">Imagem:</label>
            <input type="file" name="img" id="img">
            <input type="hidden" name="actImg" value="<?php echo $_SESSION['img']?>">

        </div>

        <div class="formGroup">

           <input type="submit" value="Atualizar" name="action">

        </div>

    </form>

</div>