<?php

    $input = sodium_hex2bin($argv[1]);
    $nonce = substr($input, 0, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    $cifra = substr($input, SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);
    $key = file_get_contents('cryptkey.key');

    echo sodium_crypto_secretbox_open($cifra, $nonce, $key);
    echo PHP_EOL;
    echo $cifra;
