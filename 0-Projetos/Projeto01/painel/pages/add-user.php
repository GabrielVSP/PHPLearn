<?php

    verifyPermPage(1);

?>


<div class="boxContent left w100">

    <h2><span class="material-symbols-outlined">edit</span> Adicionar Usuário</h2>

    <form action="" method="post" enctype="multipart/form-data">

        <?php

            if(isset($_POST['action'])) {

                $user = new User;

                $login = $_POST['login'];
                $name = $_POST['nome'];
                $pass = $_POST['password'];
                $cargo = $_POST['cargo'];
                $img = $_FILES['img'];

                if($login == '') {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Login está vazio</div>");

                }elseif($name == '') {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Nome está vazio</div>");

                }elseif($pass == '') {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Senha está vazia</div>");

                }elseif($img['name'] == '') {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Imagem está vazia</div>");

                }elseif($cargo == '') {

                    Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Cargo precisa estar selecionado</div>");

                }else {

                    if($cargo <= $_SESSION['cargo']) {

                        Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span> Você precisa selecionar um cargo menor que o seu</div>");

                    }elseif(!Painel::isValid($img)) {

                        Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span>Imagem inválida</div>");

                    }elseif(User::userExists($login)) {

                        Painel::alert('error', "<div class='error'> <span class='material-symbols-outlined'>error</span>O login já existe, selecione outro.</div>");

                    }else {

                        $user = new User();
                        $img = Painel::uploadImage($img);

                        $user->createUser($login, $name, $pass, $img, $cargo);

                        Painel::alert('error', "<div class='success'> <span class='material-symbols-outlined'>check</span> O usuário $login foi cadastrado com sucesso</div>");

                    }

                }
            
               /* if($newImg['name'] != '') {

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

                }*/

            }

        ?>

        <div class="formGroup">

            <label for="login">Login:</label>
            <input type="text" name="login" id="login" >

        </div>

        <div class="formGroup">

            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" >

        </div>

        <div class="formGroup">

            <label for="pass">Senha:</label>
            <input type="password" name="password" id="pass" >

        </div>

        <div class="formGroup">

            <label for="">Cargo:</label>
            <select name="cargo" id="cargo">

                <?php

                    foreach (Painel::$cargos as $key => $value) {
                       
                        if ($key > $_SESSION['cargo'])
                        {
                            echo "<option value='$key'>$value</option>";
                        }
                    }

                ?>

            </select>

        </div>

        <div class="formGroup">

            <label for="img">Imagem:</label>
            <input type="file" name="img" id="img">
            <input type="hidden" name="actImg">

        </div>

        <div class="formGroup">

           <input type="submit" value="Adicionar" name="action">

        </div>

    </form>

</div>