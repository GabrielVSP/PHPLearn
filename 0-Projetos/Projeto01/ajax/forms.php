<?php 

    include('../config.php');

    $data = [];

   /* $nome = $_POST['nome'];
	$email = $_POST['email'];
	$tel = $_POST['telefone'];
	$msg = $_POST['mensagem'];*/

    $assunto = 'Nova mensagem do site';
    $corpo = '';

    foreach ($_POST as $key => $value) {
       
        $corpo.= "$key : $value";
        $corpo.="<hr>";

    }

    /*$corpo = "<p>De: " . ucfirst($nome) .  "</p>
                <p>Email: $email</p>
                <p>Telefone: $tel</p>
                
                <hr>

                <p>'- $msg '</p>
                
                ";*/

    $email = new email('smtp.gmail.com', 'gabrielverg134s@gmail.com', "Roblox12345", 'Gabriel');
    $email->addAdress('gabrielverg134s@gmail.com', 'Gabriel');

    $email->format(['assunto'=>"$assunto", 'corpo'=>"$corpo"]);

    if($email->sendEmail())
    {

        $data['success'] = true;
        //echo "<script>alert('E-mail enviado com sucesso!-CONTATO')</script>";

    }
    else
    {

        $data['error'] = true;
        //echo "<script>alert('Desculpe! Algo deu errado :(')</script>";

    }

    //$data['retorno'] = 'success';

    die(json_encode($data));

?>