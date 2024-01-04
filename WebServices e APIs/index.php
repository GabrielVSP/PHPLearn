<form method='post'>

    <input type='text' name='address' />
    <input type="submit" name="action" value="Enviar">

</form>

<?php 

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://reqres.in/api/users');
    //curl_setopt($ch, CURLOPT_POST, 1);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(['request' => 'nome_return']));

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $serverOutput = curl_exec($ch);
    $response = json_decode($serverOutput);

    curl_close($ch);

    echo "<pre>";

    print_r($response);

    echo "</pre>";

    //echo $response[0][0];

    if(isset($_POST['action'])) {

        /*$url = urlencode($_POST['address']);
        $str = file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$url.'&sensor=false');

        $address = json_decode($str);

        echo $address->result->address_components[0]->short_name;

        echo "<pre>";

        var_dump($str);

        echo "</pre>";*/

    }
?>