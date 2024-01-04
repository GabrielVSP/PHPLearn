<?php

    require __DIR__ . '/vendor/autoload.php';

    $client = new GuzzleHttp\Client();

    $res = $client->get('https://catfact.ninja/fact');

    echo $res->getBody(), "<br>";

    $postfields = json_encode([
        'name' => 'Morpheus',
        'job' => 'leader'
    ]);

    $res = $client->post('https://reqres.in/api/users/', [
        'headers' => ['Content-Type' => 'application/json'],
        'body' => $postfields
    ]);

    echo $res->getBody();
    var_dump($res->getStatusCode());