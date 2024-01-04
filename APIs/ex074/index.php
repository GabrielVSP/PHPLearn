<?php

    $ch = curl_init();

    curl_setopt_array($ch, [

        CURLOPT_URL => 'https://catfact.ninja/fact',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_TIMEOUT => 10,
        CURLOPT_CUSTOMREQUEST => 'GET',
        //CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => [
            "Accept: */*"
        ]

    ]);

    $data = curl_exec($ch);
    $err = curl_error($ch);

    curl_close($ch);

    if($err) {
        echo 'Failed';
        die(0);
    }

    echo $data, '<br>';

    $ch = curl_init();
    $postfields = json_encode([
        'name' => 'Morpheus',
        'job' => 'leader'
    ]);

    curl_setopt_array($ch, [

        CURLOPT_URL => 'https://reqres.in/api/users/',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_TIMEOUT => 10,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $postfields,
        //CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_HTTPHEADER => [
            "Accept: */*",
            "Content-Type: application/json",
        ]

    ]);

    $data = curl_exec($ch);
    $err = curl_error($ch);
    $status = curl_getinfo($ch);

    curl_close($ch);

    if($err) {
        echo 'Failed';
        die(0);
    }

    echo $data, "<br>";
    print_r($status);
