<?php

    $data = '05457305112';

    if(!file_exists('cryptkey.key')) {

       $k = sodium_crypto_secretbox_keygen();
       file_put_contents('cryptkey.key', $k);
       //O keygen gera uma quantidade de bites para ser usado como chave

    }

    $key = file_get_contents('cryptkey.key');
    $iv = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

    //O iv gera uma quantidade de bites que certifica que o texto ao ser cifrado(encriptado), não gere o mesmo código de encriptação

    echo sodium_bin2hex($iv . sodium_crypto_secretbox($data, $iv, $key));

    //echo PHP_EOL;