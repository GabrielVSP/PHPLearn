<?php 

    ob_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buffer</title>
</head>
<body>
    
    <h1>Hello, world!</h1>

</body>
</html>

<?php 

    $contents = ob_get_clean();
    /*ob_get_clean();
    echo $contents;*/

?>