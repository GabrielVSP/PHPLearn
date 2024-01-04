<?php

    /*$json = file_get_contents('data.json');
    
    $obj = json_decode($json);
    $arr = ['nome'=>"Gabriel", "idade"=>16];

    $json = json_encode($arr);  
    echo $json;*/

    //$arr = json_decode($json, true);

    //echo $arr['b'][0];

    //var_dump(json_decode($json, true));

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    
    <script>

       
        fetch('./data.json', {

            body: JSON.stringify()

        }).then((response) => {

            return response.json()

        }).then(function(response) {
        
            console.log(response)

        })

    </script>

</body>
</html>