<?php

    $senha = '134s';
    $hash = password_hash($senha, CRYPT_BLOWFISH);

    echo $hash;
    echo '<br>';
    echo password_verify($senha, '$2y$10$v23zh8cep/UAX/ZTl1jcB.C7dJnLNd6fgrasNGO6mObpcoFo6n5Bq');

