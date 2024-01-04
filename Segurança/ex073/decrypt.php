<?php

    $data = sodium_hex2bin($argv[1]);

    $publicKey = file_get_contents('keys/public.key');
    $privateKey = file_get_contents('keys/private.key');

    $keyPair = sodium_crypto_box_keypair_from_secretkey_and_publickey($privateKey, $publicKey);
    $decifra = sodium_crypto_box_seal_open($data, $keyPair); 

    echo $decifra;
