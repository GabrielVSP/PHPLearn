<?php

    $email = '1';
    $cript = password_hash('drive', CRYPT_BLOWFISH, ['cost' => 10]);
    $hash = '$2y$10$qDSlr9Ss0NT4oOz2Wy7/zOoTmFnVYFjuDzRuR0STgOt18SRYbF/Yu';

    var_dump(filter_var($email, FILTER_VALIDATE_EMAIL)); //Valida a informação
    var_dump(filter_var('http://php.net¬', FILTER_SANITIZE_URL)); //Limpa a informação

    echo '<br>';

    if(password_verify('drive', $cript)) {

        echo 'ok ';

        if(password_needs_rehash($hash, PASSWORD_DEFAULT)) {
            $newHash = password_hash('drive', PASSWORD_DEFAULT);
            echo 'novo hash gerado';
        }

    }else {
        echo 'bypasser!';
    }
