<?php 

  #Criptografia assimétrica

    $data = $argv[1];
   
    if(!file_exists('keys/public.key')) {

        $keypair = sodium_crypto_box_keypair();
        file_put_contents('keys/public.key', sodium_crypto_box_publickey($keypair));
        file_put_contents('keys/private.key', sodium_crypto_box_secretkey($keypair));

    }

    $cifra = sodium_bin2hex(sodium_crypto_box_seal($data, file_get_contents('keys/public.key')));
    echo $cifra;
